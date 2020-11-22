<?php


Route::prefix('dashboard/purchases')->group(function () {
    Route::namespace('Purchases')->group(function () {

        Route::get('/add', 'PurchasesControllers@addView');




    });
});