<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', config('app.locale'));

Route::redirect('/login', config('app.locale') . '/login' )->name('login');

Route::get('email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-z]{2}'],
], function () {
    Route::get('/', function () {
        return view('user-panel.index');
    });
    
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
    Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);
    
    Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
    
});


require __DIR__ . '/admin-routes/auth/admin-auth-route.php';
require __DIR__ . '/admin-routes/panel/admin-panel-route.php';
