<?php

use App\Http\Controllers\Ex1Controller;
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
// Route::get('/create', [ScientificController::class,'create']);
Route::controller(Ex1Controller::class)->group(function(){
  Route::get('/', 'index')->name('exIndex');
  Route::get('/create','create')->name('exCreate');
  Route::get('/example/{id}','getById')->name('exGetById');
  Route::get('/update/{id}','update')->name('exUpdate');
});








