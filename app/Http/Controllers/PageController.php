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
    public function index()
    {
        $trendyItems = Product::with('category')
            ->where('is_trendy', true)
            ->latest()
            ->take(6)
            ->get();

        return view('index', compact('trendyItems'));
    }


    public function aariblouse()
    {
        return view('aariblouse'); // resources/views/boutique.blade.php
    }

    public function boutique() 
    {
        return view('boutique'); // resources/views/boutique.blade.php
    }

    public function contact() 
    {
        return view('contact'); // resources/views/contact.blade.php
    }

    public function login()
    {
        return view('login'); //resources/views/login.blade.php
    }

    public function mumchild()
    {
        return view('mumchild'); //resources/views/login.blade.php
    }

     public function register()
     {
        return view('register'); //resources/views/register.blade.php
    }

     public function reset(){
        return view('reset'); //resources/views/reset.blade.php
    }

     public function success()
     {
        return view('success'); //resources/views/success.blade.php
    }

      public function tailoringboutique(){
        return view('tailoringboutique'); //resources/views/tailoringboutique.blade.php
    }

    public function materials() 
    {
        return view('materials'); // resources/views/materials.blade.php
    }

    public function search()
    {
        return view('search'); 
        //resources/views/search.blade.php
    }

    // Tailors pages
    public function tailorswomen() 
    {
        return view('tailors_women'); // resources/views/tailors_women.blade.php
    }

    public function tailorsmen() 
    {
        return view('tailors_men'); // resources/views/tailorsmen.blade.php
    }

    
    // Community Pages
      public function aboutcommunity()
      {

        return view('pages.community.about');
    }

    // Company pages
    public function aboutCompany()
    {

        return view('pages.company.about');

    }

    public function contactCompany()
    {

        return view('pages.company.contact');
    }

    public function jobscompany()
    {

        return view('pages.company.jobs');

    }

    public function presscompany()
    {

        return view('pages.company.press');
        
    }


     // Legal Pages
    public function disclaimerLegal()
    {
        return view('pages.legal.disclaimer'); //reources/view/disclaimer.blade.php
    }
    public function privacyLegal()
    {
        return view('pages.legal.privacy'); // resources/views/privacy.blade.php
    }

    public function refundLegal()
    {
        return view('pages.legal.refund'); //resources/views/refund.blade.php
    }

    public function termsLegal()
    {
        return view('pages.legal.terms'); //resources/view/terms.blade.php
    }



//     /**
//      * Shows a specific product category page.
//      * @param string $name The category slug (e.g., 'babies')
//      */

   
    public function showCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $products = Product::with('category')
                        ->where('category_id', $category->id)
                        ->orderBy('name')
                        // ->get();
                        ->paginate(12);  // <-- use paginate instead of get

        return view('category.show', [
            'category' => $category,  // pass the Category model
            'products' => $products,
        ]);
    }

    public function searchResults(Request $request)
    {
        $query = $request->input('q', '');

        $products = Product::query();

        if ($query) {
            $products = $products->where(function($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                ->orWhere('description', 'like', "%{$query}%")
                ->orWhereHas('category', function($q2) use ($query) {
                    $q2->where('name', 'like', "%{$query}%");
                });
            });
        }

        $products = $products->orderBy('name')->get();

        // Wishlist
        $wishlist = session()->get('wishlist', []);
        $wishlistIds = array_keys($wishlist);

        return view('search', [
            'products' => $products,
            'wishlistIds' => $wishlistIds,
            
        ]);
    }

}  

 