<?php

Route::prefix('dashboard/session')->group(function () {
    Route::namespace('Sessions')->group(function () {

        Route::get('/', 'SessionsControllers@index');
        Route::post('/', 'SessionsControllers@open');


        Route::get('/point', 'PointOfSalleControllers@Point');
        Route::get('/point/get/bill/{id?}', 'PointOfSalleControllers@printReset');
        Route::get('/pagintaion/fetch_data', 'PointOfSalleControllers@fetchData');


    });
});

Route::get('card/add/{id?}', 'cartControllers@index');
Route::get('card/del/{id?}', 'cartControllers@del');
Route::post('card/updated', 'cartControllers@updated');
Route::get('card/dump', 'cartControllers@Remove');
Route::get('card/pay/view', 'cartControllers@payModal');
Route::get('card/paid', 'cartControllers@paid');



