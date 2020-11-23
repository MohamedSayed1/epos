<?php


Route::prefix('dashboard/purchases')->group(function () {
    Route::namespace('Purchases')->group(function () {

        Route::get('/get/product', 'PurchasesControllers@returnProduct');
        Route::get('/add', 'PurchasesControllers@addView');




    });
});