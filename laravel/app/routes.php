<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });
Route::group(array('before' => 'auth'), function() {

	Route::get('/', array(
		'uses'  =>  'QuestionsController@index',
		'as'    =>  'user.home'
	));

	Route::get('user/questions', array(
		'uses'	=>	'QuestionsController@show',
		'as'	=>	'user.questions.show'
	));

	Route::post('user/questions', array(
		'uses'	=>	'AnswersController@store',
		'as'	=>	'user.answers.store'
	));

	Route::get('logout', array(
		'uses'	=>	'UserController@logout',
		'as'	=>	'logout'
	));


	Route::group(array('before' => 'admin'), function() {

		Route::get('admin', array(
			'uses'	=>	'AdminController@index',
			'as'	=>	'home'
		));

		Route::get('admin/user', array(
				'uses'	=>	'AdminController@showUser',
				'as'	=>	'admin.show_user'
		));

		Route::get('admin/user/questions', array(
				'uses'	=>	'AdminController@showUserAnswers',
				'as'	=>	'admin.user_answers'
		));

		Route::get('questions/create', array(
			'uses'	=>	'QuestionsController@create',
			'as'	=>	'questions.create'
		));

		Route::post('questions/store', array(
			'uses' 	=>	'QuestionsController@store',
			'as'	=>	'questions.store'
		));

		Route::get('questions/delete/{title}', array(
			'uses'	=>	'QuestionsController@destroy',
			'as'	=>	'questions.destroy'
		));

		Route::get('questions/create/delete/{id}', array(
			'uses' 	=>	'QuestionsController@destroyOneQuestion',
			'as'	=>	'questions.destroy.question'
		));

	});

});

Route::group(array('before' => 'guest'), function() {

	Route::get('login', array(
			'uses'  =>  'UserController@login',
			'as'    =>  'login'
	));

	Route::post('login', array(
			'uses'	=>	'UserController@doLogin',
			'as'	=>	'login'
	));

});
