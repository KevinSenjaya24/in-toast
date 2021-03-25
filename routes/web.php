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
Route::get('/welcomedetails', function () {
    return view('welcomedetails');
});
Route::post('/', 'ContactController@create')->name('admin.contact.create');

Auth::routes();

Route::get('/admin', 'DashboardController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/testimoni', 'TestimoniController@index')->name('admin.testimoni');
    Route::get('/testimoni/{id}', 'TestimoniController@details')->name('admin.testimoni.detail');
    Route::post('/testimoni', 'TestimoniController@update')->name('admin.testimoni.update');
    Route::delete('/testimoni/delete/{id}','TestimoniController@delete')->name('admin.testimoni.delete');
});

Route::prefix('admin')->group(function () {
    Route::get('/contact', 'ContactController@index')->name('admin.contact');
    Route::get('/contact/{id}', 'ContactController@details')->name('admin.contact.detail');
    
    Route::delete('/contact/delete/{id}','ContactController@delete')->name('admin.contact.delete');
});
