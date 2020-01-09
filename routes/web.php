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
        Route::delete('/{serviceType}', 'ServiceTypeController@destroy')->name('serviceType.delete');
    });

    Route::prefix("city")->group(function (){
        Route::get("/","CityController@index")->name('city.index');
        Route::get("/create","CityController@create")->name('city.create');
        Route::post("/","CityController@store")->name('city.store');
        Route::get("/{city}","CityController@show")->name('city.show');
        Route::get("/{city}/edit","CityController@edit")->name('city.edit');
        Route::patch("/{city}","CityController@update")->name('city.update');
        Route::delete('/{city}', 'CityController@destroy')->name('city.delete');
    });

    Route::prefix("city")->group(function (){
        Route::get("/","CityController@index")->name('city.index');
        Route::get("/create","CityController@create")->name('city.create');
        Route::post("/","CityController@store")->name('city.store');
        Route::get("/{city}","CityController@show")->name('city.show');
        Route::get("/{city}/edit","CityController@edit")->name('city.edit');
        Route::patch("/{city}","CityController@update")->name('city.update');
        Route::delete('/{city}', 'CityController@destroy')->name('city.delete');
    });


});


