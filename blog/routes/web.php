<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/catalog', [KatalogController::class, 'index'])->name('catalog.index');
