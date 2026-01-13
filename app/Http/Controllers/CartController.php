<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
     /**
     * Adds a product and its options (size, quantity) to the session cart.
     * @param Request $request
     * @param Product $product - Auto-injected by Route Model Binding
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request, Product $product)
    {
        // 1. Validate the user input from the Product Detail Page form
        $request->validate([
            'size' => 'required|string|in:S,M,L,XL,XXL',
            'quantity' => 'required|integer|min:1',
        ]);

        $size = $request->input('size');
        $quantity = $request->input('quantity');

        // 2. Define the unique identifier for this cart item
        // We use the product ID and size combo to differentiate items (e.g., 'Shirt-M' is different from 'Shirt-L')
        $cartItemId = $product->id . '-' . $size;

        // 3. Build the cart item data
        $cartItem = [
            'id'       => $product->id,
            'name'     => $product->name,
            'price'    => $product->price,
            'image'    => $product->image, // Assuming image exists on Product model
            'size'     => $size,
            'quantity' => $quantity,
        ];
        
        // 4. Get the current cart from the session (or an empty array if none exists)
        $cart = session()->get('cart', []);

        // 5. Add or update the item in the cart
        if (isset($cart[$cartItemId])) {
            // Item already in cart, update the quantity
            $cart[$cartItemId]['quantity'] += $quantity;
        } else {
            // New item, add it to the cart
            $cart[$cartItemId] = $cartItem;
        }

        // 6. Store the updated cart back into the session
        session()->put('cart', $cart);

        // 7. Redirect the user
        // We typically redirect back to the product page or to the cart index page
        return redirect()->route('products.show', $product)
                         ->with('success', "{$product->name} ({$size}) added to cart!");
    }
    
    /**
     * Shows the contents of the cart.
     */
  
    public function index()
    {
        $cart = session()->get('cart', []);

        // Remove invalid products (deleted from DB)
        foreach ($cart as $key => $item) {
            if (!Product::find($item['id'])) {
                unset($cart[$key]);
                session()->put('cart', $cart);
            }
        }

        $total = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        return view('cart.index', compact('cart', 'total'));
    }

    /**
     * Updates the quantity of a specific item in the session cart.
     * @param Request $request
     * @param string $id - The unique cart item ID (e.g., '12-L')
     * @return \Illuminate\Http\RedirectResponse
     */
   
     public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->input('quantity');
            session()->put('cart', $cart);
            return redirect()->route('cart.index')->with('success', 'Quantity updated successfully.');
        }

        return redirect()->route('cart.index')->with('error', 'Item not found in cart.');
    }

 
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $productName = $cart[$id]['name'];
            unset($cart[$id]);
            session()->put('cart', $cart);

            return redirect()->route('cart.index')->with('success', "{$productName} removed from cart.");
        }

        return redirect()->route('cart.index')->with('error', 'Item not found in cart.');
    }


}


