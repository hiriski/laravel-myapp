<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/**
 * Bungkus route name di prefix name 'api'.
 */
Route::name('api.')->group(function() {
	/** Name : api.learn. */
	Route::name('learn.')->group(function() {
		/** Name : api.learn.lang. */
		Route::name('lang.')->group(function() {
			/** Route : learn/  */
			Route::prefix('learn')->group(function() {
				/** Route : learn/lang/  */
				Route::prefix('lang')->group(function() {
					/** Route : api/learn/lang/sentence */
					Route::resource('/sentence', 'Api\Learn\Lang\SentenceController', array(
						'except' => array('create', 'edit', 'show')
					));
					/** Route : api/learn/lang/phrase */
					Route::resource('/phrase', 'Api\Learn\Lang\PhraseController', array(
						'except' => array('create', 'edit', 'show')
					));
				});
			});
		});
	});

	/** Route : api/profile */
	Route::resource('/profile', 'Api\ProfileController', array(
		'except' => array('create', 'edit', 'show')
	));
	
});