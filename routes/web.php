<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurpriseController;

Route::get('/', [SurpriseController::class, 'quiz'])->name('quiz');
Route::get('/home', [SurpriseController::class, 'index'])->name('birthday');
Route::post('/unlock', [SurpriseController::class, 'unlock'])->name('unlock');
Route::get('/special', function () { return view('special'); })->name('special');
Route::get('/mywish', [SurpriseController::class, 'wish'])->name('wish');

