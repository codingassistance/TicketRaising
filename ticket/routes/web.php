<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\AdminProfileController;
use App\Http\Controllers\Admin\Auth\AdminLoginRequest;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// routes/web.php

Route::post('/logout', 'App\Http\Controllers\ClientController@logout')->name('logout');
Route::get('/logout', 'App\Http\Controllers\LoginController@notcheck');

Route::get('/clientTickets/create', 'App\Http\Controllers\ClientController@create');

Route::post('/clientTickets/create', 'App\Http\Controllers\ClientController@store');

Route::get('update/{id}', 'App\Http\Controllers\AdminController@update');
Route::get('deletee/{id}', 'App\Http\Controllers\AdminController@deletee');
Route::get('/profile', 'App\Http\Controllers\ProfileController@getUserInfo')->name('profile.info');
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/reg', 'App\Http\Controllers\RegisterControllernew@create')->name('reg.create');
Route::get('/password1', 'App\Http\Controllers\LoginController@password1')->name('login.password1');
Route::get('/password2', 'App\Http\Controllers\LoginController@notcheck');
Route::get('/register', 'App\Http\Controllers\LoginController@notcheck')->name('register');
Route::get('/change', 'App\Http\Controllers\LoginController@notcheck');
Route::post('/change', 'App\Http\Controllers\RegisterControllernew@change')->name('change');
Route::post('/register', 'App\Http\Controllers\RegisterControllernew@store');
Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/check', 'App\Http\Controllers\LoginController@check')->name('check');
Route::get('/check', 'App\Http\Controllers\LoginController@notcheck');
Route::post('/password1', 'App\Http\Controllers\LoginController@password1')->name('login.password1');
Route::post('/password2', 'App\Http\Controllers\LoginController@password2')->name('login.password2');
Route::get('/client', 'App\Http\Controllers\ClientController@index')->name('client.page');
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin.page');
Route::get('/newclient', 'App\Http\Controllers\ClientController@ticclients')->name('new.client');
Route::get('/newadmin', 'App\Http\Controllers\AdminController@ticadmins')->name('new.admin');

Route::put('/profile', 'App\Http\Controllers\ProfileController@update')->name('profile.update');
Route::delete('/profile', 'App\Http\Controllers\ProfileController@destroy')->name('profile.destroy');

Route::post('/updateAdmin/{id}', 'App\Http\Controllers\AdminController@updateTicket')->name('admin.update');
Route::post('/adminDelete/{id}', 'App\Http\Controllers\AdminController@deleteTicket')->name('admin.delete');
Route::get('/adminNotifications', 'App\Http\Controllers\AdminController@adminNotifications');

Route::get('/addp', 'App\Http\Controllers\ProjectController@addp');
Route::post('/projectstore', 'App\Http\Controllers\ProjectController@projectstore');
Route::get('/scholarships', 'App\Http\Controllers\ScholarshipController@index')->name('scholarships.index');
Route::post('/makeAdmin', 'App\Http\Controllers\AdminController@makeAdmin')->name('makeAdmin');
Route::get('/makeAdmin', 'App\Http\Controllers\LoginController@notcheck')->name('makeAdmin');
Route::post('/adminNotifications', 'App\Http\Controllers\AdminController@clearall');