<?php

use App\Http\Controllers\TesteController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teste', [TesteController::class, 'teste'])->name('teste');

Route::resource('note', NoteController::class);

