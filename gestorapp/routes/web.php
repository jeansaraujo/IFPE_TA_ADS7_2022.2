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


Route::get('/', [App\Http\Controllers\AdminController::class, 'login']);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin_index']);
Route::get('/admin/cliente/novo', [App\Http\Controllers\AdminController::class, 'admin_cliente_novo']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
