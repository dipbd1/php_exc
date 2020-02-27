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

<<<<<<< HEAD
Route::get('/hello', function () {
    return "Hello world";
});
Route::get('/football', function () {
    return "I love football";
});

Route::get('users/{id}', function ($id) {
    return "Hello Mr ".$id;
})-> where('id', '[0-9]+');

Route::get('users/{id}/{name?}', function ($id, $name = Ariyan) {
    return "Your id is ".$id." and your name is ".$name;
})-> where('id', '[0-9]+');

Route::get('/world', 'HelloController@hello');
Route::get('/add', 'AddController@index');
Route::get('/about', ['uses' => 'AboutController@about', 'as' => 'about' ]);
Route::view('/contact', 'contact');

=======
>>>>>>> 1dc216316c08b8f57c3d65c2164f60cad41175fc

