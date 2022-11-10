<?php

use App\Http\Controllers\Admin\IndexAdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServicesController;
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


Route::get('/',[IndexController::class, 'home'])->name('home');
Route::get('/mail',[IndexController::class, 'mail'])->name('mail');
Route::post('/send_mail',[IndexController::class, 'send_mail'])->name('send_mail');
Route::resource('events',EventController::class);
Route::resource('services', ServicesController::class);
require('_admin.php');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
