<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/policy', function () {
    return view('policy');
});

Route::get('/legal', function () {
    return view('legal');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('pages.back.admin.dashboard');
});

Route::get('/courses', function () {
    return view('pages.back.admin.courses');
});

Route::get('/students', function () {
    return view('pages.back.admin.students');
});

Route::get('/formations', function () {
    return view('pages.back.admin.formations');
});

Route::get('/stats', function () {
    return view('pages.back.admin.stats');
});

Route::get('/settings', function () {
    return view('pages.back.admin.settings');
});

Route::resource('etudiants', EtudiantController::class);
Route::resource('enseignants', EnseignantController::class);
Route::resource('cours', CoursController::class);
Route::resource('paiements', PaiementController::class);
