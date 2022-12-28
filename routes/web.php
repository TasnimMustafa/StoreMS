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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users',\App\Http\Controllers\UserController::class);
Route::resource('spends',\App\Http\Controllers\SpendController::class);
Route::resource('store',\App\Http\Controllers\StoreController::class);
Route::resource('invoice',\App\Http\Controllers\InvoiceController::class);
Route::resource('sales',\App\Http\Controllers\SaleController::class);
Route::resource('items',\App\Http\Controllers\ItemController::class);
Route::resource('editInvoice',\App\Http\Controllers\EditinvoiceController::class);



