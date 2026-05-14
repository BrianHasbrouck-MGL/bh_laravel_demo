<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site', [
        'title' => 'Home',
        'heading' => 'Welcome to the Demo Laravel Website',
        'content' => 'This is a small but workable Laravel website built with simple routes and Blade views.',
    ]);
});

Route::get('/about', function () {
    return view('site', [
        'title' => 'About',
        'heading' => 'About This Project',
        'content' => 'This demo shows a minimal Laravel site structure with reusable layout elements.',
    ]);
});

Route::get('/contact', function () {
    return view('site', [
        'title' => 'Contact',
        'heading' => 'Contact',
        'content' => 'Email us at hello@example.com for demo inquiries.',
    ]);
});
