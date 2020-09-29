<?php




Route::namespace('Expenses')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin\Sub" Namespace


    Route::prefix('dashboard/expenses')->group(function () {

        Route::get('/', 'SplitExpensesControlles@index');
        Route::post('/', 'SplitExpensesControlles@add');
        Route::get('/updated', 'SplitExpensesControlles@index');
        Route::post('/updated', 'SplitExpensesControlles@updated');


    });
});

