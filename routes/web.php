<?php
use App\Http\Controllers\LoanController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\SavingController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\InstallmentController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//loanController

Route::group(['prefix' => 'loans'], function(){

    route::get('/', 'LoanController@index')->name('loans');
    route::post('{loan}','LoanController@destroy')->name('loans.destroy');


    route::get('create/{type}',  'LoanController@create')->name('loans.create');
    route::post('kalkulasi/{type}','LoanController@kalkulasi')->name('loans.kalkulasi');
    route::post('store/{type}','LoanController@store')->name('loans.store');

    route::get('submissions', 'SubmissionController@index')->name('submissions');
    route::post('submissions/{loan}','SubmissionController@store')->name('submissions.store');

});

//TypeController

Route::group(['namespace'], function(){
    route::resource('types', 'TypeController');
});

//SavingController

Route::group(['prefix' =>'savings'],  function(){
    route::get('/anggota', 'Savings\SavingController@index')->name('savings.anggota');
});

//TransaksiController

Route::group(['prefix' => 'transaksi'], function(){
    route::get('', 'TransaksiController@index')->name('transaksi');
});

//InstallmentController

    Route::group(['prefix'=> 'installments', 'namespace'=>'Installments'], function(){
        route::get('/', 'InstallmentController@index')->name('installments.index');
    });
    //Data Pegawai

    Route::group(['prefix' => 'users', 'namespace' => 'Users'], function(){
        Route::post('/', 'UserController@store')->name('users.store');
        Route::get('pegawai','PegawaiController@index')->name('pegawai.index');
        Route::get('anggota','AnggotaController@index')->name('anggota.index');
        Route::get('create', 'UserController@create')->name('users.create');
        Route::get('{user}/edit', 'UserController@edit')->name('users.edit');
        Route::patch('{user}/update', 'UserController@update')->name('users.update');



    });

