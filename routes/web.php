<?php

use App\Http\Controllers\authController;

Route::get('/', function () {
    return view('master.master');
});

// Ida nee Mak Controller Husi Sistema


Route::group(['middleware' => 'auth'], function () {
    Route::get('/Dasboard', 'dasboardController@index');
    Route::get('/Dadoscredito', 'dadoscreditoController@index');
    Route::get('/Dadoscredito/delete/{id}', 'dadoscreditoController@delete');
    Route::post('/Dadoscredito/create', 'dadoscreditoController@create');
    Route::get('/Detail/{id}', 'dadoscreditoController@detail');
    Route::get('/Dadoscredito/edit/{id}', 'dadoscreditoController@edit');
    Route::post('/Dadoscredito/update/{id}', 'dadoscreditoController@update');
    Route::get('/Report', 'dadoscreditoController@report');
    Route::get('/edit', 'dadoscreditoController@update');

    
    // ida nee Mak Group Husi gorup husi carta nia mak nee
    Route::get('/request/credito', 'cartaController@index');
    Route::get('/request/create', 'cartaController@request');
    Route::get('/request/create', 'cartaController@request');
});

// ida nee Mak Auth Controler

Route::get('/auth/login', 'AuthController@login')->name('login');
Route::post('/auth/post', 'AuthController@postlogin');
Route::get('/auth/logout', 'AuthController@logout');
