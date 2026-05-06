<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;

Route::get('/', fn() => redirect('/tamu'));

Route::resource('tamu', TamuController::class);