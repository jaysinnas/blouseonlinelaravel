<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display the homepage with new and trendy products

     * Show:
     * - new products
     * - 5 trendy promo categories (bags, shoes, hats, scarfs, dresses)
     */
    public function index()
    {
        
        $newProducts = Product::latest()->take(8)->get();

        $trendyCategories = Category::whereHas('products', function ($q) {
            $q->where('is_trendy', true);
        })->with(['products' => function ($q) {
            $q->where('is_trendy', true)->latest();
        }])->take(5)->get();

        return view('index', compact('newProducts', 'trendyCategories'));
    }

    /**
     * Show the form for creating a new product
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created product in storage
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'is_trendy' => 'nullable|boolean',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    /**
     * Show the form for editing the specified product
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified product in storage
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'is_trendy' => 'sometimes|boolean',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified product from storage
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    /**
     * Display a single product with its comments
     */
    public function show(Product $product)
    {
        $product->load(['comments' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }]);

        return view('products.show', compact('product'));
    }

    /**
     * Display products filtered by category
     */
    public function showCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = $category->products()->paginate(12);

        return view('category.show', compact('category', 'products'));
    }
  

    // Show product detail page
     // Model-bound show: Laravel will inject Product by id
    public function showTrendy(Product $product)
    {
        $product->load(['category', 'comments']);

        return view('products.details', compact('product'));
    }


        public function trendySection()
    {
        $categories = Category::whereHas('products', function ($q) {
            $q->where('is_trendy', true);
        })->get();

        return view('trendy.index', compact('categories'));
    }

    public function trendyCategory(Category $category)
    {
        $products = $category->products()
            ->where('is_trendy', true)
            ->latest()
            ->simplepaginate(12);

        return view('trendy.category', compact('category', 'products'));
    }


}