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

Route::get('/', 'IndexController@index');
Route::get('/welcome','WelcomeController@index')->name('welcome');

/** Route : blog/ */
Route::resource('/blog', 'PostController', array(
	'only' => array('index', 'show')
));

/** /blog */
Route::resource('/blog', 'BlogController', array(
	'only' => array('index', 'show')
));

/** Route : blog/ */
Route::prefix('/blog')->group(function() {
	/** Name : blog. */
	Route::name('blog.')->group(function() {
		/** Route /blog/category */
		Route::resource('/category', 'BlogCategoryController', array(
			'only' => array('index', 'show')
		));
	});
});


/** Name : learn. */
Route::name('learn.')->group(function() {
	/** Name : learn.lang */
	Route::name('lang.')->group(function() {
		/** Route : /learn */
		Route::prefix('/learn')->group(function() {
			/** Route : /learn/lang */
			Route::prefix('/lang')->group(function() {

				/** Route : /learn/lang/sentence */
				Route::get('sentence', 'Learn\Lang\SentenceController@index')
					->name('sentence');

				/** Route : /learn/lang/phrase */
				Route::get('phrase', 'Learn\Lang\PhraseController@index')
					->name('phrase');

			});
		});
	});
});

Route::get('/mytask', 'TaskController@mytask')->name('mytask');
Route::apiResource('/task', 'TaskController');