<?php

use App\Http\Controllers\CellphoneController;
use Illuminate\Support\Facades\Route;


Route::view('/','welcome');

Route::get('/cellphones',[CellphoneController::class,'index'])->name('cellphones.index');
Route::get('/cellphones/create',[CellphoneController::class,'create']);
Route::post('/cellphones/store',[CellphoneController::class,'store'])->name('cellphones.store');
Route::get('/cellphones/{data}/edit',[CellphoneController::class,'edit'])->name('cellphones.edit');

