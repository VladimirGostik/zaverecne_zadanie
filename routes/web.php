<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;


Route::get('/', function () {
    return view('welcome');
});
// routes/web.php

Route::get('/user', 'UserController@index')->name('user.home')->middleware('auth');
Route::get('/guest', 'GuestController@index')->name('guest.home');
Route::get('/admin', 'AdminController@index')->name('admin.home')->middleware(AdminMiddleware::class);
