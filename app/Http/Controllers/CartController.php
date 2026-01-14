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
    // 1. Validate the input
    $request->validate([
        'size' => 'required|string',
        'quantity' => 'required|integer|min:1',
        'measurements' => 'nullable|string|max:1000', // Allow measurements to be saved
    ]);

    $size = $request->input('size');
    $quantity = $request->input('quantity');
    $measurements = $request->input('measurements');

    // 2. Unique ID: include measurements in the key!
    // This allows a user to add the same product with different custom sizes
    $cartItemId = $product->id . '-' . $size . '-' . md5($measurements);

    $cart = session()->get('cart', []);

    // 3. Add or Update
    if (isset($cart[$cartItemId])) {
        $cart[$cartItemId]['quantity'] += $quantity;
    } else {
        $cart[$cartItemId] = [
            'id'           => $product->id,
            'name'         => $product->name,
            'price'        => $product->price,
            'image'        => $product->image_url ?? $product->image, 
            'size'         => $size,
            'quantity'     => $quantity,
            'measurements' => $measurements, // The magic happens here!
        ];
    }

    session()->put('cart', $cart);

    return redirect()->route('products.show', $product)
                     ->with('success', "Added to cart with measurements!");
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


