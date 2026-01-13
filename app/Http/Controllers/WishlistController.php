<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Kept in case we re-add storage logic later
use App\Models\Category;


class WishlistController extends Controller
{

    /**
         * Adds or removes a product from the session wishlist.
         * @param Product $product - Auto-injected by Route Model Binding
         * @return \Illuminate\Http\RedirectResponse
         */
        public function add(Product $product)
        {
            // 1. Get the current wishlist from the session (default to empty array)
            // We use product ID as the key for uniqueness in the wishlist
            $wishlist = session()->get('wishlist', []);
            $productId = $product->id;
            $message = '';

            // 2. Check if the item is already in the wishlist
            if (isset($wishlist[$productId])) {
                // Item IS in wishlist: Remove it (Toggle functionality)
                unset($wishlist[$productId]);
                $message = $product->name . ' removed from Wishlist.';
            } else {
                // Item IS NOT in wishlist: Add it
                $wishlistItem = [
                    'id'    => $product->id,
                    'name'  => $product->name,
                    'price' => $product->price,
                    'image' => $product->image_url ?? $product->image, // Use either property
                ];
                $wishlist[$productId] = $wishlistItem;
                $message = $product->name . ' added to Wishlist!';
            }

            // 3. Store the updated wishlist back into the session
            session()->put('wishlist', $wishlist);

            // 4. Redirect back to the page the user came from (or the product page)
            return back()->with('success', $message);
        }
        
        /**
         * Shows the contents of the wishlist.
         */
        public function index()
        {
            $wishlist = session()->get('wishlist', []);
            
            return view('wishlist.index', compact('wishlist'));
        }
    }

