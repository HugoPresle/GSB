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

Auth::routes();
 Route::get('/','ProduitController@getAll');
 Route::get('/Article/{ProdCategorie}','ProduitController@find');
 Route::get('/Article/{ProdCategorie}/{trie}','ProduitController@OrderBy');
 Route::get('/Panier',function(){return view('Panier');});






// Route::get('/home', 'HomeController@index')->name('home');
