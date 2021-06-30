<?php

use Illuminate\Support\Facades\Route;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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

// Route::get('/abc', function () {
//     return view('welcome');
// });

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'Auth\HomeController@index')->name('home');

// Route::get('/role1', function () {
//     $users = User::whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10])->get();

//     foreach ($users as $user) {
//         $user->assignRole('customer');
//     }
//     dd(23422);
// });

Route::get('/index', 'Admin\UserController@index')->name('user.index');
Route::get('/user/create', 'Admin\UserController@create')->name('user.create');
Route::post('/user/create', 'Admin\UserController@store')->name('user.store');
Route::put('/user/edit/{id}', 'Admin\UserController@update')->name('user.update');
Route::get('/user/edit/{id}', 'Admin\UserController@edit')->name('user.edit');
Route::get('/user/{id}', 'Admin\UserController@show')->name('user.show');
Route::get('/search', 'Admin\UserController@show')->name('user.search');


