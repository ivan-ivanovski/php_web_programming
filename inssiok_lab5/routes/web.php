<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TransactionController::class,'index']);

Route::resource('transaction',TransactionController::class);