<?php

use App\Http\Controllers\CellphoneController;
use Illuminate\Support\Facades\Route;


Route::view('/','welcome');

Route::get('/cellphones',[CellphoneController::class,'index']);
Route::get('/cellphones/create',[CellphoneController::class,'create']);
Route::post('/cellphones/store',[CellphoneController::class,'store'])->name('cellphones.store');

