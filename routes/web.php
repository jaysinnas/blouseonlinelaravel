<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controller\commentController;
use App\Http\Controllers\ProductController;

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


// Company 
Route::get('/company/about.company', [PageController::class, 'aboutCompany'])->name('company.about');
Route::get('/company/jobs', [PageController::class, 'jobscompany'])->name('company.jobs');
Route::get('/company/press', [PageController::class, 'presscompany'])->name('company.press');
Route::get('/company/contact', [PageController::class, 'contactCompany'])->name('company.contact');

//  Community
Route::get('/community/about', [PageController::class, 'aboutcommunity'])->name('community.about');

// Legal pages
Route::get('/privacy-policy', [PageController::class, 'privacylegal'])->name('legal.privacy');
Route::get('/refund-policy', [PageController::class, 'refundlegal'])->name('legal.refund');
Route::get('/terms-and-conditions', [PageController::class, 'termsLegal'])->name('legal.terms');
Route::get('/disclaimer', [PageController::class, 'disclaimerlegal'])->name('legal.disclaimer');
Route::post('/comments',[CommentController::class, 'store'])->name('comments.store');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');