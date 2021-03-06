<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\dadoscreditoController;
use App\Http\Controllers\tbtsmController;
use App\Http\Middleware\checkRole;
use App\tbtsm;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get('qr-code', 'qrcodeController@index');

Route::get('/', function () {
    return view('auth.login');
});

// Ida nee Mak Controller Husi Sistema
Route::get('/auth/login', 'AuthController@login')->name('login');


Route::post('/auth/post', 'AuthController@postlogin');
Route::get('/auth/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {

    //?ida ne Mak Route Husi Log
    Route::get('add-to-log', 'HomeController@myTestAddToLog');
    Route::get('logActivity', 'HomeController@logActivity');
    //? ida nee Mak Rohan Husi Logs

    //! ida nee Mak Route Husi Home
    Route::get('/home', 'homeController@home');
    //! Ida nee Mak Roha Husi Route Husi Home


    Route::get('/Transaction', 'TrasactionController@index');
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

    Route::get('/contaosan/destroy/{id}', 'contaosanController@destroy');
    Route::get('/contaosan/edit/{id}', 'contaosanController@edit');
    Route::put('/contaosan/update/{id}', 'contaosanController@update');
    //! ida nee Mak nia Rohan Husi Route

    //? ida nee Mak Controller Husi Level Husi Credito
    Route::get('/setting/level', 'levelCotroller@index');
    Route::post('/setting/level/create', 'levelCotroller@create');
    //? ida nee Mak Rohan Husi Level Credito

    //todo Ida nee Mak Controller Husi Logs File
    Route::get('/logs','logsController@logs');
    //todo Ida nee Mak Roha Husi LogController

    //? ida nee mak Group Husi Controller Double
    Route::post('/credito/double','doubleController@create');
    //? ida nee mak Rohan Husi DoubleController

    //todo ida nee mak We Route Husi Recredito Ou Credito Double

    Route::get('/recredito', 'doubleController@index');
    Route::post('/recredito/create', 'doubleController@create');
    Route::get('/recredito/edit/{id}', 'doubleController@edit');
    Route::get('/recredito/delete/{id}', 'doubleController@destroy');
    Route::resource('tbtsm', tbtsmController::class);
    //todo ida nee Mak Rohan Husi Recrito Husi Sistema Husi FE
    //? ida nee Mak Controller Husi PortailController
    Route::get('/nav/setting/portail','portailController@index');
    //? Ida nee Mak Rohan Husi PortailController
    //! ida nee Mak Route controller Husi Aumenta Tempo
    Route::get('/setting/durasaun','durasaunController@index');
    Route::get('/setting/durasaun/edit/{id}','durasaunController@edit');
    Route::post('/setting/durasaun/create','durasaunController@create');
    Route::post('/setting/durasaun/update/{id}','durasaunController@update');
    Route::get('/setting/durasaun/destory/{id}','durasaunController@destroy');
       //! ida nee Mak Rohan Husi Route Controller Tempo

    //todo ida nee Mak Route Husi Profile
    Route::get('/myprofile','profileController@index');
    Route::post('/myprofile','profileController@UpdatePasssword');
    // Route::get('/profile','profileController@index');

    //todo ida nee Mak Rohan Husi Rous Profile

    //? ida nee Mak soft delete Husi Sistema fe
    Route::get('/delete/file','softdeleController@index');
    Route::get('/delete/forcedelete/{id}','softdeleController@forcedelete');
    Route::get('/delete/restore/{id}','softdeleController@restore');
    //? ida nee Mak Rohan Husi Softdelete
});

//!<---------------------------------------------------------------------------------->


//todo ida nee Mak Middleware Ba Iha User Sira nebe Acesso ba IHa Sistema Fundu Esperanca
Route::group(['middleware' => ['auth', 'checkRole:admin,user']], function () {

      Route::get('/myprofile','profileController@index');
      Route::post('/myprofile','profileController@UpdatePasssword');
      Route::post('/myprofile/foto','profileController@EditFoto');
      // Route::get('/profile','profileController@index');

      //todo ida nee Mak Rohan Husi Rous Profile
    Route::get('/home', 'homeController@home');
    Route::post('/setting/osan/create', 'saldoController@create');
    Route::get('/setting/osan', 'saldoController@index');
    Route::get('/Dasboard', 'dasboardController@index');
    Route::get('/Dadoscredito', 'dadoscreditoController@index');
    Route::get('/Detail/{id}', 'dadoscreditoController@detail');
    Route::get('/setoran/show', 'setoranController@index');
    Route::post('/setoran/create', 'setoranController@create');
    //todo ida nee Mak Group husi Printer
    Route::get('sistema/print/{id}', 'printController@index');
    Route::get('sistema/print/extrato/{id}', 'printController@extrato');

    //todo ida nee Mak Rohan Husi Print
    //! ida nee Mak husi Route Husi Conta Osan
    Route::get('/contaosan', 'contaosanController@index');
    Route::get('/contaosan/show', 'contaosanController@show');
    Route::post('/contaosan/create', 'contaosanController@create');

});
