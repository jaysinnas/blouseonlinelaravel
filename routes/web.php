<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;


// Route::get('/index', function(){
//     return view('index'); //reference for index.blade.php
// });

//  Standard pages 
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/boutique', [PageController::class, 'boutique'])->name('boutique');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/tailors-women', [PageController::class, 'tailorsWomen'])->name('tailors.women');
Route::get('/tailors-men', [PageController::class, 'tailorsMen'])->name('tailors.men');
Route::get('/tailoringboutique', [PageController::class, 'tailoringboutique'])->name('tailoringboutique');
Route::get('/materials', [PageController::class, 'materials'])->name('materials');



Route::get('/aariblouse', [PageController::class, 'aariblouse'])->name('aariblouse');
Route::get('/mumchild', [PageController::class, 'mumchild'])->name('mumchild');

//Authentification / User Management Pages  (Will likely be handled by Breeze/JetStream later)
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/reset', [PageController::class, 'reset'])->name('reset');
Route::get('/success', [PageController::class, 'success'])->name('success');

// Company pages
Route::prefix('company')->name('company.')->group(function () {
Route::get('about', [PageController::class, 'aboutCompany'])->name('about');
Route::get('jobs', [PageController::class, 'jobscompany'])->name('jobs');
Route::get('press', [PageController::class, 'presscompany'])->name('press');
Route::get('contact', [PageController::class, 'contactCompany'])->name('contact');
});


//  Community pages
Route::get('/community/about', [PageController::class, 'aboutcommunity'])->name('community.about');

// Legal pages
Route::get('/privacy-policy', [PageController::class, 'privacylegal'])->name('legal.privacy');
Route::get('/refund-policy', [PageController::class, 'refundlegal'])->name('legal.refund');
Route::get('/terms-and-conditions', [PageController::class, 'termsLegal'])->name('legal.terms');
Route::get('/disclaimer', [PageController::class, 'disclaimerlegal'])->name('legal.disclaimer');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');


Route::get('/categories/{name}', [PageController::class, 'showCategory'])->name('category.show');
// routes/web.php
Route::get('/category/{slug}', [ProductController::class, 'showCategory'])->name('category.show');

Route::get('/collections/{slug}', function($slug) {
    return redirect()->route('category.show', $slug);
});

// Search Routes

Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('/search-results', [PageController::class, 'searchResults'])->name('search.results');


// The {product} parameter is used by Laravel to fetch the model instance
// Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

//cart Controller
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Route to update the quantity of an item
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');

// Route to remove an item from the cart
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

// Cart routes
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');



// wishlist Controller
// GET route to add/remove a product from the wishlist (using GET for simplicity)

Route::get('/wishlist/add/{product}', [WishlistController::class, 'add'])->name('wishlist.add');

// Route to view the wishlist page
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');


// ... other Company and Legal pages ...
Route::prefix('company')->name('company.')->group(function () {
// ...
});



Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/checkout/success', function () {
    return view('checkout.success');
})->name('checkout.success');


Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/checkout/payment', [CheckoutController::class, 'payment'])->name('checkout.payment'); // New page
Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');



