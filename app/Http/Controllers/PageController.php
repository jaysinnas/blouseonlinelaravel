<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{

    // Basic Marketing pages
    public function index(){
        return view('index');
    }

    public function aariblouse(){
        return view('aariblouse'); // resources/views/boutique.blade.php
    }

    public function boutique() {
        return view('boutique'); // resources/views/boutique.blade.php
    }

    public function contact() {
        return view('contact'); // resources/views/contact.blade.php
    }

    public function login(){
        return view('login'); //resources/views/login.blade.php
    }

    public function mumchild(){
        return view('mumchild'); //resources/views/login.blade.php
    }

     public function register(){
        return view('register'); //resources/views/register.blade.php
    }

     public function reset(){
        return view('reset'); //resources/views/reset.blade.php
    }

     public function success(){
        return view('success'); //resources/views/success.blade.php
    }

      public function tailoringboutique(){
        return view('tailoringboutique'); //resources/views/tailoringboutique.blade.php
    }

    public function materials() {
        return view('materials'); // resources/views/materials.blade.php
    }

    public function search(){
        return view('search'); 
        //resources/views/search.blade.php
    }

    // Tailors pages
    public function tailorswomen() {
        return view('tailors_women'); // resources/views/tailors_women.blade.php
    }

    public function tailorsmen() {
        return view('tailors_men'); // resources/views/tailorsmen.blade.php
    }

    
    // Community Pages
      public function aboutcommunity(){
        return view('pages.community.about');
    }

    // Company pages
    public function aboutCompany(){
        return view('pages.company.about');
    }
    public function contactCompany(){
        return view('pages.company.contact');
    }
    public function jobscompany(){
        return view('pages.company.jobs');
    }
    public function presscompany(){
        return view('pages.company.press');
    }


     // Legal Pages
    public function disclaimerLegal(){
        return view('pages.legal.disclaimer'); //reources/view/disclaimer.blade.php
    }
    public function privacyLegal() {
        return view('pages.legal.privacy'); // resources/views/privacy.blade.php
    }
    public function refundLegal(){
        return view('pages.legal.refund'); //resources/views/refund.blade.php
    }
    public function termsLegal(){
        return view('pages.legal.terms'); //resources/view/terms.blade.php
    }



//     /**
//      * Shows a specific product category page.
//      * @param string $name The category slug (e.g., 'babies')
//      */

    // --- NEW DYNAMIC CATEGORY METHOD ---
    public function showCategory($name)
    {
        // 1. Map the route slug to the category name used in the database/model.
        // For simplicity now, we assume the Product Model has a 'category' attribute
        // or that the name matches the product description/name logic.
        
        // Example Mapping (you might need to refine how products are categorized)
        $categoryMap = [
            'babies' => 'Babies',
            'kids' => 'Kids',
            'aari-blouse' => 'Aari Work Blouse', // Assuming this matches part of the product name/desc
            'mother-daughter' => 'Mother and Daughter',
        ];

        // Determine the actual search term based on the slug
        $searchTerm = $categoryMap[$name] ?? ucwords(str_replace('-', ' ', $name));

        // 2. Query Products: Fetch products where the name or description contains the search term.
        $products = Product::where('name', 'like', "%{$searchTerm}%")
                           ->orWhere('description', 'like', "%{$searchTerm}%")
                           ->get();

        // 3. Render the dynamic view (use `categories.show` view file)
        return view('category.show', [
            'categoryName' => $searchTerm,
            'products' => $products,
        ]);
    }
//     public function babies()
// {
//     $products = Product::where('category', 'babies')->get();

//     return view('products.babies', compact('products'));
//     }


      /**
     * Search for products by name or description.
     * @param Request $request
     */
    public function searchResults(Request $request)
    {
        $query = $request->input('q', '');
        $products = collect(); // Start with empty collection instead of array

        
        if ($query) {
            //Query the database Only if a search term is present
            //use %...% with LIKE for partial matching(e.g., finding "hello" in "say hello")
            $products = Product::where('name', 'like', "%{$query}%")
                               ->orWhere('description', 'like', "%{$query}%")
                               ->orderBy('name')
                               ->get();
            
            // Log for debugging
            Log::info('Search query: ' . $query . ' | Results: ' . $products->count());
        }

        // 1. Get the current wishlist items from the session
        $wishlist = session()->get('wishlist', []);
        
        // 2. Extract only the keys (which are the Product IDs)
        $wishlistIds = array_keys($wishlist);

        // 3. Render the search view, passing products AND wishlistIds
        return view('search', [
            'products' => $products,
            'wishlistIds' => $wishlistIds, // <-- PASS THIS TO THE VIEW
        ]);
        // return view('search', [
        //     'products' => $products,
        // ]);
    }
 
}

 