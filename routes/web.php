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

Route::get('/{locale}', 'HomeController@index')->name('home');
Route::resource('/learn/lang/sentence', 'LearnLangSentenceController');
Route::resource('/learn/lang/phrase', 'LearnLangPhraseController');
Route::resource('/blog/category', 'PostCategoryController');
Route::resource('/blog', 'PostController');