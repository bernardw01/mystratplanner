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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myprofile', function() {
    $user =  Auth::user();
    return view('myprofile', compact('user'));
})->name('myprofile');


//User routes
Route::get('/users', 'UsersController@index');
Route::get('/users/{user}', 'UsersController@show');
Route::get('/users/{user}/edit', 'UsersController@show');
Route::post('/users/{user}', 'UsersController@update');


//Goal Routes
Route::get('/goals', 'GoalController@index');
Route::get('/goals/create', 'GoalController@create');
Route::get('/goals/{goal}/delete', 'GoalController@destroy');
Route::get('/goals/{goal}/edit', 'GoalController@edit');
Route::post('/goals/{goal}', 'GoalController@update');
Route::post('/goals', 'GoalController@store');

//Goal Routes
Route::get('/reviews', 'ReviewController@index');
Route::get('/reviews/create', 'ReviewController@create');
Route::get('/reviews/{review}/delete', 'ReviewController@destroy');
Route::get('/reviews/{review}/edit', 'ReviewController@edit');
Route::post('/reviews/{review}', 'ReviewController@update');
Route::post('/reviews', 'ReviewController@store');


//Comment Routes
Route::resource('comments', 'CommentController');


//  resoure/create for a new entity
// /resource to view all records for a resource
// GET resource/{id}/edit to edit a post
// GET resource/{id} to retrieve a resource
// PATCH resource/{id} to edit an existing resource
// DELETE resource/{id} to delete an existing resource