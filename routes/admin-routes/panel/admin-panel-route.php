<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-z]{2}'],
], function () {
    
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', [App\Http\Controllers\AdminControllers\Dashboard\DashboardController::class, 'index'])->name('admin.dashboard');
        
        Route::resources([
            'category/allcategory' => App\Http\Controllers\AdminControllers\Category\CategoryController::class,
            'category/parentcategory' => App\Http\Controllers\AdminControllers\Category\CategoryController::class,
            'category/subcategory' => App\Http\Controllers\AdminControllers\Category\CategoryController::class,
        ]);
    });
});