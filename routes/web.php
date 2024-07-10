<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

Route::get('/', [MusicController::class, 'index']);
Route::get('/create', [MusicController::class, 'create']);
Route::post('/store', [MusicController::class, 'store']);
Route::delete('/delete', [MusicController::class, 'delete']);
Route::get('/{id}/edit', [MusicController::class, 'edit']);
Route::put('/update', [MusicController::class, 'update']);
