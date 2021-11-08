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
