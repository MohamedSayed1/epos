<?php

Route::prefix('dashboard/session')->group(function () {
    Route::namespace('Sessions')->group(function () {

        Route::get('/', 'SessionsControllers@index');


        Route::get('/point', 'PointOfSalleControllers@Point');
        Route::get('/pagintaion/fetch_data', 'PointOfSalleControllers@fetchData');

    });
});
