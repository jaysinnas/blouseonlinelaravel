<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Use a closure-based composer to bind data to the navbar partial
        View::composer('partials.navbar', function ($view) {
            
            // Get the current cart array from the session, default to empty array
            // $cart = session()->get('cart', []);

            // Calculate the total quantity in the cart.
            // Support multiple cart shapes:
            // - array of item arrays: [['id'=>1,'quantity'=>2], ...]
            // - associative map of id => quantity: ['5' => 2, '9' => 1]
            // - array of item arrays without 'quantity' (fallback to count)
            // $cartItemCount = 0;
            // if (!empty($cart) && is_array($cart)) {
            //     foreach ($cart as $item) {
            //         if (is_array($item) && isset($item['quantity'])) {
            //             $cartItemCount += (int) $item['quantity'];
            //         } elseif (is_numeric($item)) {
            //             // case: ['productId' => quantity]
            //             $cartItemCount += (int) $item;
            //         } else {
            //             // unknown shape: count as one per entry
            //             $cartItemCount += 1;
            //         }
            //     }
            // }

            // Cart Logic
            $cart = session()->get('cart', []);
            // $cartItemCount = count($cart);
            $cartItemCount = 0;
            
               foreach ($cart as $item) {
                if (isset($item['quantity'])) {
                    $cartItemCount += (int) $item['quantity'];
                }
            }


            // Wishlist Logic <-- ADD THIS
            $wishlist = session()->get('wishlist', []);
            $wishlistItemCount = count($wishlist); // Count of unique items in wishlist
            // Share the computed total quantity with the view
            // Share the data
            $view->with('cartItemCount', $cartItemCount);
            $view->with('wishlistItemCount', $wishlistItemCount);
        });
    }
}
