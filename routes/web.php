<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;

 // Route::get('/', function ()) {
 //     return view('welcome');
 // });
 
Route::get('/', [KatalogController::class, 'index']);
Route::get('/contact', [KatalogController::class, 'contact']);

