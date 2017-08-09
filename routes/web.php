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

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/users/{id}', function ($id) {
//     return 'This is user '.$id;
// });

// Route::get('/users', function () {
//     return 'This is user';
// });

// Http/Controllers/PagesContorller with function index
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
