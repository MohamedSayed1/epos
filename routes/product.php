<?php





Route::prefix('dashboard/products')->group(function () {
    Route::namespace('Products')->group(function () {
        // Controllers Within The "App\Http\Controllers\Products" Namespace

        Route::get('/', '@index');



    });
});
