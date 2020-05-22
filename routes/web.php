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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::middleware(['dashboard-access'])->group(function() {
    Route::get('/dashboard', 'Dashboard\HomeController@index')->name('dashboard.home');
    Route::get('/dashboard/pages', 'Dashboard\PageController@index')->name('dashboard.pages.index');
    Route::delete('/dashboard/pages/{page}/destroy', 'Dashboard\PageController@destroy')->name('dashboard.pages.destroy');
});
Route::resource('pages', 'PageController');
