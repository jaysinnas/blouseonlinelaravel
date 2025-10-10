<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

// Route::get('/index', function(){
//     return view('index'); //reference for index.blade.php
// });

//another pages
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/boutique', [PageController::class, 'boutique'])->name('boutique');
Route::get('/aariblouse', [PageController::class, 'aariblouse'])->name('aariblouse');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/mumchild', [PageController::class, 'mumchild'])->name('mumchild');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/reset', [PageController::class, 'reset'])->name('reset');
Route::get('/success', [PageController::class, 'success'])->name('success');
Route::get('/tailors-women', [PageController::class, 'tailorsWomen'])->name('tailors.women');
Route::get('/tailors-men', [PageController::class, 'tailorsMen'])->name('tailors.men');
Route::get('/tailoringboutique', [PageController::class, 'tailoringboutique'])->name('tailoringboutique');
Route::get('/materials', [PageController::class, 'materials'])->name('materials');
Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('/login', [PageController::class, 'login'])->name('login');
