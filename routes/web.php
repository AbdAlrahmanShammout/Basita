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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/services-types', function () {
    return view('servicesTypes.list');
});
Route::get('/services-types-create', function () {
    return view('servicesTypes.create');
});
Route::prefix("controlPanelB")->group(function (){//middleware("checkRuleAdmin")->

    Route::prefix("serviceType")->group(function (){
        Route::get("/","ServiceTypeController@index")->name('serviceType.index');
        Route::get("/create","ServiceTypeController@create")->name('serviceType.create');
        Route::post("/","ServiceTypeController@store")->name('serviceType.store');
        Route::get("/{serviceType}","ServiceTypeController@show")->name('serviceType.show');
        Route::get("/{serviceType}/edit","ServiceTypeController@edit")->name('serviceType.edit');
        Route::patch("/{serviceType}","ServiceTypeController@update")->name('serviceType.update');
        Route::delete('/{serviceType}', 'ServiceTypeController@destroy')->name('role.destroy')->name('serviceType.delete');
    });


});


