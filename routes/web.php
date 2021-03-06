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


Voyager::routes();
Route::get('/pdf/{sale}', 'ExportPDF@invoice')->name('print');
Route::get('/loginspdf', 'ExportPDF@productspdf')->name('productspdf');
Route::get('/loginspdf', 'ExportPDF@loginspdf')->name('loginspdf');
Route::get('/POS','POS@show');
Route::post('/POS','POS@cart')->name('postCart');
