<?php

use App\Http\Controllers\PaginaPrincipalController;
use Illuminate\Support\Facades\Route;

// Antes:
// Route::get('/', function () { return view('welcome'); });

// Después:
Route::get('/', [PaginaPrincipalController::class, 'mostrar']);
