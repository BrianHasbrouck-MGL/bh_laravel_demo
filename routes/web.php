<?php

use App\Http\Controllers\SubmissionController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/submit');

Route::get('/submit', [SubmissionController::class, 'submit'])->name('submit');
Route::post('/submit', [SubmissionController::class, 'store'])->name('submit.store');
Route::get('/history', [SubmissionController::class, 'history'])->name('history');
Route::get('/about', [SubmissionController::class, 'about'])->name('about');
Route::get('/contact', [SubmissionController::class, 'contact'])->name('contact');
