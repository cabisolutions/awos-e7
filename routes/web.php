<?php
use Illuminate\Support\Facades\Route;
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

Route::get('/home', function() {
    return view('dashboard');
})->name('home');

Route::get('/register', function() {
    return view('dashboard');
})->name('register');

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/profile', function() {
    return view('users.index');
})->name('profile');

Route::get('/profilee', function() {
    return view('profile.edit');
})->name('profile.edit');

Route::get('/logout', function() {
    return view('profile.edit');
})->name('logout');

Route::get('/user', function() {
    return view('user.index');
})->name('user.index');

Route::get('/icons', function() {
    return view('pages.icons');
})->name('icons');

Route::get('/map', function() {
    return view('pages.maps');
})->name('map');

Route::get('/table', function() {
    return view('pages.tables');
})->name('table');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

