<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Kept in case we re-add storage logic later



class ProductController extends Controller
{
    // Display a listing of the resource.
    // public function index()
    // {
    //     $products = Product::all(); //recover all products
    //     return view('products.index', compact('products')); //send for 
        
    // }

    // public function index()
    // {
    //     // 1. Get products for the "New Products" section
    //     $newProducts = Product::latest()->take(4)->get();

    //     // 2. Get products specifically marked as 'Trendy'
    //     $trendyProducts = Product::where('is_trendy', true)->latest()->get();

    //     return view('index', compact('newProducts', 'trendyProducts'));
    // }

//     public function index()
// {
//     // 1. Fetch the data from the database
//     $newProducts = Product::latest()->take(4)->get();
    
//     // This is the line you are likely missing!
//     $trendyProducts = Product::where('is_trendy', true)->get(); 

//     // 2. Pass BOTH variables to the view using compact()
//     // If you don't put 'trendyProducts' here, the Blade file will crash.
//     return view('index', compact('newProducts', 'trendyProducts'));
// }

//     public function index() {
//         $newProducts = Product::latest()->take(4)->get();
//         $trendyProducts = Product::where('is_trendy', true)->get(); // Fetching the data
    
//     return view('index', compact('newProducts', 'trendyProducts')); // Sending the data
//  }

public function index()
{
    // Fetch products for the 'New Products' section
    $newProducts = Product::latest()->take(8)->get();
    
    // Fetch products specifically for the 'Trendy' section
    // If you don't have this line, the section will be empty!
    $trendyProducts = Product::where('is_trendy', true)->get(); 

    // Return the index view and pass BOTH variables
    return view('index', compact('newProducts', 'trendyProducts'));
}


    
    // Show the form for creating a new resource.
    public function create() { 
        return view('products.create');
    } 
    
    // Store a newly created resource in storage.
    public function store(Request $request) 
    { 
        //   $data = $request->all();
        $data =$request->validate([
            'name' => 'required|string|255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }
        Product::create($data);
        // Validation updated: 'image' is now a string (filename), not a file upload
       
        // Since we are not uploading files, we just use the validated data directly.
       
        return redirect()->route('products.index')->with('success', 'Product added successfully!'); 
    } 
    
    // Show the form for editing the specified resource.
    // Using Route Model Binding for cleaner code
    public function edit(Product $product) 
    {
        return view('products.edit', compact('product'));
    }
    
    // Update the specified resource in storage.
    // Using Route Model Binding for cleaner code
    public function update(Request $request, Product $product) 
    {
        // $data = $request->validated(); // If using Request->validate()
        //  $data = $request->all();
            $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]);

                if ($request->hasFile('image')) {
                // 1. Delete the old image if it exists
                if ($product->image) {
                    Storage::disk('public')->delete($product->image);
                }
                
            // 2. Store the new image
            $data['image'] = $request->file('image')->store('products', 'public');
        }
        // Validation updated: 'image' is now a string (filename), not a file upload
     
   
        // No image deletion or upload logic needed, just update the database record.
        
        $product->update($data);
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    } 
    
    // Remove the specified resource from storage.
    // Using Route Model Binding for cleaner code
    public function destroy(Product $product) {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
}
        // No file deletion logic needed since images are public assets.
        $product->delete(); 
        
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!'); 
    }

    public function show(Product $product)
    {
        // This loads the product AND only its specific comments in one go
    $product->load(['comments' => function ($query) {
        $query->orderBy('created_at', 'desc');
    }]);

    // We pass only $product. In Blade, you will use $product->comments
    return view('products.show', compact('product'));
      
    }

        public function showCategory($slug)
    {
        // Find category by slug
        $category = Category::where('slug', $slug)->firstOrFail();

        // Fetch products under this category
        $products = Product::where('category_id', $category->id)->get();

        // Send to your category view
        // return view('category.show', [
        //     'categoryName' => $category->name,
        //     'products' => $products
        // ]);
        return view('category.show', compact('category', 'products'));
    }

}