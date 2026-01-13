<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Kept in case we re-add storage logic later
use App\Models\Category;

class PostController extends Controller
{
       /**
     * Search for products by name or description.
     * @param Request $request
     */
    public function searchResults(Request $request)
    {
         // Validate search input
        $request->validate([
            'q' => 'nullable|string|max:255',
        ]);
        
        $query = $request->input('q', '');
        $products = collect(); // Start with empty collection instead of array

          if (!empty($query)) {

            $products = Product::where(function ($qBuilder) use ($query) {
                $qBuilder->where('name', 'like', "%{$query}%")
                         ->orWhere('description', 'like', "%{$query}%");
            })
            ->orderBy('name')
            ->get();
        }

        // if ($query) {
        //     $products = Product::where('name', 'like', "%{$query}%")
        //                        ->orWhere('description', 'like', "%{$query}%")
        //                        ->get();
        // }


        return view('search', [
            'products' => $products,
            'query' => $query
        ]);
    }
}
