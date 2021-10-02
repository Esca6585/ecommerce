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

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-z]{2}'],
], function () {
    Route::get('/', function () {
        return view('user-panel.index');
    });
    
    Auth::routes(['verify' => true]);
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
    Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);

    Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
    
    Route::get('email/test', function(){
        $rand = mt_rand(100000, 999999);
        $data = [
            'email' => 'esca656585@gmail.com',
            'name' => 'Esca Meredoff', 
            'verification_code' => $rand,
            'strRand' => strval($rand),
        ];

        return view('mail.register-email', compact('data'));
    });

    Route::get('email/verify', [App\Http\Controllers\Auth\LoginController::class, 'emailVerifyForm'])->name('emailVerifyForm ');
    Route::get('/email/verify/code', [App\Http\Controllers\Auth\LoginController::class, 'emailVerifyCode'])->name('verification.send');
    Route::get('email/resend', [App\Http\Controllers\Auth\LoginController::class, 'emailResend'])->name('verification.resend');
    
});

require __DIR__ . '/admin-routes/auth/admin-auth-route.php';
require __DIR__ . '/admin-routes/panel/admin-panel-route.php';
