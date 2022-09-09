<?php

use App\Http\Controllers\Ex1Controller;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
/* SIMPLE ROUTE */
// Route::get('/create', [Ex1Controller::class,'create'])->name('exCreate);

/* GROUPING ROUTES BY A CLASS AND CUSTOM NAMES */
// Route::controller(Ex1Controller::class)->group(function(){
//   Route::get('/', 'index')->name('exIndex');
//   Route::get('/create','create')->name('exCreate');
//   Route::post('/ex','store')->name('exStore');
//   Route::get('/example/{id}','getById')->name('exGetById');
//   Route::get('/update/{id}','edit')->name('exEdit');
//   Route::put('/ex/{id}','update')->name('exUpdate');
//   Route::delete('/ex/{id}','destroy')->name('exDelete');
// });

/* GROUPING BY CLASS AND CONVETIONS */
// To modify the url of the routes, is necessary to change the App service providers in the boot method
Route::resource('ex', Ex1Controller::class)->names([
  'index' => 'exIndex',
  'create' => 'exCreate',
  'store' => 'exStore',
  'edit' => 'exEdit',
  'update' => 'exUpdate',
  'show' => 'exShow',
  'destroy' => 'exDelete'
]);
Route::resource('contact',MailController::class)
->names([
  'create' => 'mailCreate',
  'store' => 'mailStore'
])
->only(['create','store']);
// ->missing(fn (Request $request) => redirect()->route('exIndex'));