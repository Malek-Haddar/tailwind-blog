<?php

use App\Http\Controllers\PostsController;
use Doctrine\DBAL\Schema\Index;
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



/* Route::get('/', [PostsController::class, 'index']);
Route::get('/posts/{post}', [PostsController::class, 'show']);
 */

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::resource('/blog', PostsController::class);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home'); */



Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
