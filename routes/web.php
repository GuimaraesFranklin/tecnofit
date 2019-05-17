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
    return view('auth/login');
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
//delete product
Route::get('/produtos/apagar/{id}', 'ControllerProduto@destroy');
//edit product
Route::get('/produtos/editar/{id}', 'ControllerProduto@edit');
//update
Route::post('/produtos/{id}','ControllerProduto@update');

//index
Route::get('/pedidos', 'ControllerPedido@index');
//create pedido
Route::get('/pedidos/novopedido','ControllerPedido@create');
//store pedido
Route::post('/pedidos','ControllerPedido@store');
//delete pedido
Route::get('/pedidos/apagar/{id}', 'ControllerPedido@destroy');
//edit pedido
Route::get('/pedidos/editar/{id}', 'ControllerPedido@edit');
//update
Route::post('/pedidos/{id}','ControllerPedido@update');
