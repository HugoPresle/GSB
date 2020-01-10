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
Route::get('/{ProdCategorie}','ProduitController@find');
Route::get('/{ProdCategorie}/{trie}','ProduitController@OrderBy');
Route::post('/Connexion',function(){return view('Connexion');});
Route::post('/Inscription',function(){return view('Inscription');});
Route::post('/Panier',function(){return view('Panier');});




