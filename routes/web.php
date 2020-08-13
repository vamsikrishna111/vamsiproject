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
Route::get('register','usercontroller@register');
Route::post('insert','usercontroller@insert');
Route::get('login','usercontroller@login');
Route::post('dashboard','usercontroller@dashboard');
Route::get('forgetpassword','usercontroller@forgetpassword');
Route::post('conformpassword','usercontroller@conformpassword');
Route::get('addbook','usercontroller@addbook');
Route::get('insertpopup','usercontroller@insertpopup');
Route::post('insertbook','usercontroller@insertbook');
Route::get('selectbooklist','usercontroller@selectbooklist');
Route::get('bookedit/{id}','usercontroller@bookedit');
Route::post('bookedit/{id}','usercontroller@booklistedit');
Route::get('delete/{id}','usercontroller@delete');
