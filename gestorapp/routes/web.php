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
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin_index'])->name('admin');
Route::get('/admin/cliente/novo', [App\Http\Controllers\AdminController::class, 'admin_client_new'])->name('client_new');
Route::post('/admin/cliente/salvar', [App\Http\Controllers\AdminController::class, 'admin_client_store'])->name('client_store');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
