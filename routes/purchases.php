<?php


Route::prefix('dashboard/purchases')->group(function () {
    Route::namespace('Purchases')->group(function () {

        Route::get('/', 'PurchasesControllers@index');
        Route::get('/get/product', 'PurchasesControllers@returnProduct');
        Route::get('/add', 'PurchasesControllers@addView');
        Route::post('/add', 'PurchasesControllers@addProces');
        Route::get('/updated/detail/{id?}', 'PurchasesControllers@updatedDetails');
        Route::post('/updated/detail', 'PurchasesControllers@updatedDetailsProcess');
        Route::get('/updated/{id?}', 'PurchasesControllers@updatedView');





    });
});