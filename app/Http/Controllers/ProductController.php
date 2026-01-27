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
     */
    public function index()
    {
        $newProducts = Product::latest()->take(8)->get();
        
        $trendyItems = Product::with('category')
            ->where('is_trendy', true)
            ->latest()
            ->take(6)
            ->get();

        return view('index', compact('newProducts', 'trendyItems'));
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
    // Show 5 trendy products in the section
    public function trendySection()
    {
        $products = Product::where('is_trendy', true)
            ->take(5)
            ->get();

        return view('trendy', compact('products'));
    }

    // Show product detail page
    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('product-details', compact('product'));
    }


}