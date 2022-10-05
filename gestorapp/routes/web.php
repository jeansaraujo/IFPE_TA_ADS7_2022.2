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
Route::get('/admin/clientes', [App\Http\Controllers\AdminController::class, 'admin_client_list'])->name('client_list');
Route::get('/admin/cliente/pesquisa', [App\Http\Controllers\AdminController::class, 'admin_client_search'])->name('client_search');
Route::post('/admin/cliente/salvar', [App\Http\Controllers\AdminController::class, 'admin_client_store'])->name('client_store');
Route::get('/admin/cliente/atualizar/{id}', [App\Http\Controllers\AdminController::class, 'admin_cliente_novo'])->name('client_update');
Route::post('/admin/client/editar/{id}', [App\Http\Controllers\AdminController::class, 'admin_client_edit'])->name('client_edit');
Route::get('/admin/client/excluir/{id}', [App\Http\Controllers\AdminController::class, 'admin_client_delete'])->name('client_delete');
Route::post('/admin/client/excluidId/{id}', [App\Http\Controllers\AdminController::class, 'admin_client_softDelete'])->name('client_softDel');
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
