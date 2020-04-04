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

Route::get('/', 'IndexController@index')->name('index');

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

/** /blog */
Route::resource('/blog', 'BlogController', array(
	'only' => array('index', 'show')
));



/** Protect under middleware auth */
Route::group(['middleware' => 'auth'], function() {
	/** index page when user login */
	Route::get('/welcome','WelcomeController@index')->name('welcome');
	/** Admin Routes */
	Route::name('admin.')->group(function() {
		/** admin/ */
		Route::prefix('/admin')->group(function() {
			Route::get('/', 'AdminController@index')->name('index');
	
			/**  Only user with role "admin" can access it */
			Route::group(['middleware' => ['role:admin']], function () {
				/** admin/role */
				Route::resource('/role', 'Admin\RoleController')
				->except(['create', 'show', 'edit', 'update']);
	
				/** admin/user */
				Route::resource('/user', 'Admin\UserController')
				->except(['show']);
	
				Route::get('/user/roles/{id}', 'Admin\UserController@roles')->name('user.roles');
				Route::put('/user/roles/{id}', 'Admin\UserController@setRole')->name('user.set_role');
				Route::post('/user/permission', 'Admin\UserController@addPermission')->name('user.add_permission');
				Route::get('/user/role-permission', 'Admin\UserController@rolePermission')->name('user.roles_permission');
				Route::put('/user/permission/{role}', 'Admin\UserController@setRolePermission')->name('user.setRolePermission');


				/** admin/blog/ */
				Route::prefix('/blog')->group(function() {
					/** Name : blog. */
					Route::name('blog.')->group(function() {
						/** Route /blog/category */
						// Route::resource('/category', 'Admin\BlogCategoryController', array(
						// 	'except' => array('show')
						// ));
					});
				});

				/** /admin/blog */
				Route::resource('/blog', 'Admin\BlogController', array(
					'except' => array('show')
				));
		
				/** /admin/blog (for vue js) */
				Route::get('/blog/vue', 'Admin\VueBlogController@vue')->name("blog.vue");
				
				Route::get('material-icons', function() {
					return view('back.material-icons');
				});

			}); /** end of middleware role:admin */

	
			/** admin/vue (admin with vuejs) */
			Route::get('/vue', 'Admin\VueAdminController@vue')->name("vue");
		
		});
	});
	

	/** role user */
	Route::group(['middleware' => 'role:user'], function() {
		/** Specific by permission */
		Route::group(['middleware' => ['permission:permission learn|permission blogs']], function() {
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
			
		});
	});
	
	
	Route::get('/mytask', 'TaskController@mytask')->name('mytask');
	Route::apiResource('/task', 'TaskController');

});
