<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'SQLController@main');

Route::get('/tugas3/spesifikasi.wsdl', function() {
	return File::get(public_path() . '/spesifikasi.wsdl');
});

Route::get('/tugas3/klien', function() {
	return view('client');
});
