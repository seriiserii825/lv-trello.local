<?php

use App\Http\Controllers\ProjectController;
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
})->name('home');

Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('user.logout');

Route::group(['prefix' => 'admin', "middleware" => "admin"], function () {
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');
    Route::resource('/projects', '\App\Http\Controllers\ProjectController');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->name('user.create');
    Route::post('/register', [\App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginForm'])->name('user.login');
    Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('user.auth');
});

Route::fallback(function () {
    return redirect()->route('home');
});
