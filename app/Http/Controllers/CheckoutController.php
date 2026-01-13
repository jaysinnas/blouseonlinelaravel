<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // Show checkout page
    public function index()
    {
        // Get cart from session
        $cart = session('cart', []);

        // Calculate total
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return view('checkout.index', compact('total'));
    }

    //   Dummy paimet section
    public function payment()
    {
        $cart = session('cart', []);
        if(empty($cart)){
            return redirect()
            ->route('checkout.index')
            ->with('error','Your cart is empty!');
        }
        $total =0;
        foreach ($cart as $item) {
           $total += $item['price'] * $item['quantity'];
        }
        return view('checkout.payment', compact('total'));
        // return view('checkout.payment');
    }


        public function store(Request $request)
    {
        $request->validate([
            // 'payment_method' => 'required|in:credit_card,debit_card,cod'
            'payment_method' => 'required',
            'card_number'    => 'required',
            'card_name'      => 'required',
            'expiry'         => 'required',
            'cvv'            => 'required',
        ]);

        // Fake success
        session()->forget('cart');

        return redirect()
            ->route('checkout.success')
            ->with('success', 'Payment successful using ' . ucfirst(str_replace('_',' ', $request->payment_method)));
    }
    public function success()
    {
        return view('checkout.success');
    }
}
