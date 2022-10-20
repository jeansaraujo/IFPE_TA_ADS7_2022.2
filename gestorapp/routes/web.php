<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin/fornecedor', [App\Http\Controllers\ProviderController::class, 'index'])->name('provider_index');
Route::get('/admin/fornecedor/novo', [App\Http\Controllers\ProviderController::class, 'create'])->name('provider_create');

Route::get('/admin/produto/novo', [App\Http\Controllers\ProdutoController::class, 'product_new'])->name('admin_produto_new');
Route::post('/admin/produto/novo', [App\Http\Controllers\ProdutoController::class, 'product_store'])->name('product_store');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
