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
        Route::get('/get-data/{modelName}/{routeName}', [App\Http\Controllers\AdminControllers\Table\TableController::class, 'getData'])->name('admin.getdata');
        
        Route::get('/datatable', [App\Http\Controllers\AdminControllers\Table\TableController::class, 'datatable'])->name('admin.datatable');

        Route::resources([
            'category/parentcategory' => App\Http\Controllers\AdminControllers\Category\CategoryController::class,
            'category/subcategory' => App\Http\Controllers\AdminControllers\Category\CategoryController::class,
        ]);
    });
});