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

 Route::get('/','ProduitController@getAll');
 Route::post('/{ProdCategorie}','ProduitController@find');
 Route::post('/{ProdCategorie}/{trie}','ProduitController@OrderBy');
 Route::get('/Panier',function(){return view('Panier');});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
