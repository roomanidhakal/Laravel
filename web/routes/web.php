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

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

/*Route::get('/', function () 
{
	// $tasks = [
	// 			'Go to the store',
	// 			'Go to the market',
	// 			'Go to the work',
	// 			'Go to the concert'
	// 		 ];
    return view('welcome',
    			[//'tasks' => $tasks,
    			'variable' => 'Test']);
    /*
		If 'variable' => request('title'), its is excuted when in url:
		127.0.0.1:800/?title=Test

    	The return statement can also be written as: 
		return view('welcome')->withTasks($tasks)->withVariable('Test');

		Also as:
		return view('welcome')->withTasks(
											'Go to the store',
											'Go to the market',
											'Go to the work',
											'Go to the concert'
										  );
		This way the tasks doesn't have to be predefined

		Or:
		view('welcome')->with([
        						'variable' =>  'Test'
        						'tasks' => ['some tasks']
							  ]);
    

});*/