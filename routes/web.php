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

Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
Route::get('/faq', function() {
    return view('faq');
})->name('faq');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/profile/{user?}', ['as' => 'profile', 'uses' => 'UserController@index'])->where('user', '[0-9]+');
    Route::get('/profile/edit', ['as' => 'profile.edit', 'uses' => 'UserController@edit']);
    Route::patch('/profile/edit', 'UserController@update');
    Route::post('/profile/picture', ['as' => 'profile.picture', 'uses' => 'UserController@uploadProfilePicture']);
    Route::get('/profile/picture/delete', ['as' => 'profile.picture.delete', 'uses' => 'UserController@deleteProfilePicture']);
    Route::get('/profile/password/edit', ['as' => 'profile.password.edit', 'uses' => 'UserController@editPassword']);
    Route::patch('/profile/password/edit', 'UserController@updatePassword');
});