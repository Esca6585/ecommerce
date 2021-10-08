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
            '/{categoryType}/category' => App\Http\Controllers\AdminControllers\Category\CategoryController::class,
            '/brand' => App\Http\Controllers\AdminControllers\Brand\BrandController::class,
            '/product' => App\Http\Controllers\AdminControllers\Product\ProductController::class,
        ]);
    });
});