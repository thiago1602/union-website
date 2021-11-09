<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});



Route::get('cliente/exportacao/{extensao?}','ClienteController@exportacao')->name('cliente.exportacao')->middleware('verified');
Route::get('venda/report/{extensao?}','VendaController@report')->name('venda.report')->middleware('verified');


Route::get('venda/import','VendaController@import')->name('venda.import');
Route::post('venda/storeImport','VendaController@storeImport')->name('venda.storeImport');


Route::resource('venda','VendaController')->middleware('verified');
Route::resource('cliente','ClienteController')->middleware('verified');
Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('grafico', 'GraficoController@index')->name('grafico')->middleware('verified');
Route::get('support', 'SupportController@index')->name('support')->middleware('verified');

Route::get('/mensagem-teste', function (){
    return new \App\Mail\MensagemTesteMail();
   //Mail::to('unionsystem2021@gmail.com')->send(new \App\Mail\MensagemTesteMail());
   // return 'E-mail enviado com sucessoo';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')
    ->middleware('verified');
