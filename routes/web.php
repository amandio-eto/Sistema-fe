<?php

use App\Http\Controllers\authController;
use App\Http\Middleware\checkRole;

Route::get('/', function () {
    return view('auth.login');
});

// Ida nee Mak Controller Husi Sistema
Route::get('/auth/login', 'AuthController@login')->name('login');
Route::post('/auth/post', 'AuthController@postlogin');
Route::get('/auth/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/Dadoscredito/delete/{id}', 'dadoscreditoController@delete');
    Route::post('/Dadoscredito/create', 'dadoscreditoController@create');
    Route::get('/Dadoscredito/edit/{id}', 'dadoscreditoController@edit');
    Route::post('/Dadoscredito/update/{id}', 'dadoscreditoController@update');
    Route::get('/Report', 'dadoscreditoController@report');
    Route::get('/edit', 'dadoscreditoController@update');


    // ida nee Mak Group Husi gorup husi carta nia mak nee
    Route::get('/request/credito', 'cartaController@index');
    Route::get('/request/create', 'cartaController@request');
    Route::get('/request/create', 'cartaController@request');
    // });

    // ida nee mak Controller ba iha Avisu
    Route::get('/avisu', 'avisuController@index');
    Route::get('/avisu/view', 'avisuController@view');
    Route::post('/avisu/view/create', 'avisuController@create');
    Route::get('/avisu/view/edit/{id}', 'avisuController@edit');
    Route::post('/avisu/view/update/{id}', 'avisuController@update');
    Route::get('/avisu/view/delete/{id}', 'avisuController@delete');

    //**! ida nee Mak Group Husi update Setoran */
    Route::get('/setoran/show', 'setoranController@index');
    Route::post('/setoran/create', 'setoranController@create');
    Route::get('/setoran/edit/{id}', 'setoranController@edit');
    Route::post('/setoran/update/{id}', 'setoranController@update');
    Route::get('/setoran/delete/{id}', 'setoranController@delete');


    //**! ida nee Mak Rohan Husi Update Setoran Route */

    //? ida nee Usa Iha Arquivo
    Route::get('/arquivo/file', 'arcivoController@index');
    Route::get('/arquivo/show', 'arcivoController@show');
    Route::post('/arquivo/create', 'arcivoController@create');
    Route::get('/arquivo/edit/{id}', 'arcivoController@edit');
    Route::post('/arquivo/update/{id}', 'arcivoController@update');
    Route::get('/arquivo/delete/{id}', 'arcivoController@delete');

    //? ida nee Mak Rohan Husi Controller Aquivo Nian Mak nee

    //! ida nee Mak Route Husi Printer





    // ida nee Mak Halo User Husi sistema Fe
    Route::get('/auth/create/user', 'AuthController@create');
    Route::post('/auth/create/user/cria', 'AuthController@register');
    Route::post('/auth/create/user/update/{id}', 'AuthController@update');
    Route::get('/auth/create/user/edit/{id}', 'AuthController@edit');
    Route::get('/auth/create/user/delete/{id}', 'AuthController@delete');

    //! ida nee Mak Saldo Husi Sistema
    Route::get('/setting/osan/edit/{id}', 'saldoController@edit');
    Route::post('/setting/osan/update/{id}', 'saldoController@update');
    Route::get('/setting/osan/delete/{id}', 'saldoController@delete');

    //!  ida nee Mak Rohan Husi Sistema Fe
});

Route::group(['middleware' => ['auth', 'checkRole:admin,user']], function () {

    Route::post('/setting/osan/create', 'saldoController@create');
    Route::get('/setting/osan', 'saldoController@index');
    Route::get('/Dasboard', 'dasboardController@index');
    Route::get('/Dadoscredito', 'dadoscreditoController@index');
    Route::get('/Detail/{id}', 'dadoscreditoController@detail');
    Route::get('/setoran/show', 'setoranController@index');
    Route::post('/setoran/create', 'setoranController@create');
    Route::get('sistema/print/{id}', 'printController@index');
});
