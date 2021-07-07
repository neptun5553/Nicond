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

Route::get('/','App\Http\Controllers\MainController@home');
Route::get('/blog','App\Http\Controllers\MainController@blog')->name('blog');
Route::post('/blog/add','App\Http\Controllers\MainController@blog_add');
Route::get('/category','App\Http\Controllers\MainController@category');
Route::get('/auth','App\Http\Controllers\MainController@auth');
/*
 * Route::get('/blog', function () {
    return view('blog');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/auth', function () {
    return view('auth');
});
Route::get('/about', function () {
    return view('about');
});
*/
