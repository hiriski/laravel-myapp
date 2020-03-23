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
			/** Route : api/learn/  */
			Route::prefix('learn')->group(function() {
				/** Route : api/learn/lang/  */
				Route::prefix('lang')->group(function() {

					/** Route : api/learn/lang/sentence */
					Route::apiResource('/sentence', 'Api\Learn\Lang\SentenceController');

					/** Route : api/learn/lang/phrase */
					Route::apiResource('/phrase', 'Api\Learn\Lang\PhraseController');

				});
			});
		});
	});

	/** Route : api/user */
	Route::apiResource('/user', 'Api\UserController');

	/** Route : api/profile */
	Route::apiResource('/profile', 'Api\ProfileController');

	/** Route : api/blog/ */
	Route::resource('/blog', 'Api\BlogController', array(
		'except' => array('index', 'show')
	));
	
});