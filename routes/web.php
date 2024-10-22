<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MahasiswaController::class, 'pages']) -> name('pages'); 

Route::get('/TambahData', [MahasiswaController::class, 'tambahData']) -> name('tambahData'); 
Route::post('/TambahDataSubmit', [MahasiswaController::class, 'tambahDataSubmit']) -> name('tambahDataSubmit'); 

Route::get('/UpdateData/{id}', [MahasiswaController::class, 'UpdateData']) -> name('updateData'); 
Route::post('/UpdateData/Submit/{id}', [MahasiswaController::class, 'UpdateDataSubmit']) -> name('updateDataSubmit'); 

Route::post('/DeleteData/{id}', [MahasiswaController::class, 'DeleteData']) -> name('DeleteData'); 