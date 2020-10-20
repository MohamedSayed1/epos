<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   // \Helmesvs\Notify\Facades\Notify::success('تم الاضافه بنجاح', 'احسنت');
    return view('admin.layout.admin');
});

Route::get('/test', 'test@index');


Route::get('/test', 'test@index');


Route::prefix('dashboard/users')->group(function () {
    Route::namespace('Users')->group(function () {
        // Controllers Within The "App\Http\Controllers\Expenses" Namespace

        Route::get('/', 'UsersControllers@index');
        Route::post('/', 'UsersControllers@updated');
        Route::post('/password', 'UsersControllers@updatedPassword');


    });
});
