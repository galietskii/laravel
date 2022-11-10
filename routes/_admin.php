<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexAdminController;

Route::group([
    //'middleware' => ['auth'],//,'isAdmin'
    'prefix' => 'adminex',
    'as' => 'admin.'
], function () {
    Route::get('/',[IndexAdminController::class, 'home'])->name('home');
    Route::get('/mail',[IndexController::class, 'mail'])->name('mail');
    Route::post('/send_mail',[IndexController::class, 'send_mail'])->name('send_mail');
    Route::resource('events',EventController::class);

});
