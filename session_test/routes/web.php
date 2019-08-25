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

use Illuminate\Http\Request;

/*
	Route::get('/', function (Request $request) 
	{
		/*
			session(['name' => 'Roomani']);
			return session('name', 'A default'); 
			if the session variable given doesnot exist, the "A default" value is returned
		*

		/*
			$request->session()->put('test', 'Testing');
			return $request->session()->get('test', 'Deafult');
		*
	    return view('welcome');
	});
*/


Route::get('/', function () 
{
	return view('welcome');
});

Route::get('projects/create', function ()
{
	return view('projects.create');
});

Route::post('projects', function ()
{
	//validate the project
	//save the project

	flash('Your project has been created.');
	return redirect('/');
	#return redirect('/')->with('message', 'Your project has been created.');
});