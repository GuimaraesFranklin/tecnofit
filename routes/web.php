<?php
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//index
Route::get('/produtos', 'ControllerProduto@index');
//create product
Route::get('/produtos/novoproduto','ControllerProduto@create');
//store product
Route::post('/produtos','ControllerProduto@store');


Route::get('/pedidos', 'ControllerPedido@index');

