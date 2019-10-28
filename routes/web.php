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

Route::get('/', function () {
	return view('welcome');
});

Route::get('/dashboard', function () {
	return view('dashboard');
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/packages', function () {
	return view('packages');
});

Route::get('/blog', function () {
	return view('blog');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::get('/login', function () {
	return view('login');
});


Route::get('/register', function () {
	return view('register');
});

Route::get('/hotelSearch', function () {
	return view('hotelSearch');
});

Route::get('/blogContent', function () {
	return view('blogContent');
});