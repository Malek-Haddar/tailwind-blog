<?php

use App\Http\Controllers\PostsController;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;


Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/', function () {
    return view('welcome');
});
