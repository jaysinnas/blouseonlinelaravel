<!-- <?php 

// namespace App\Http\Controllers;

// use App\Models\Product;
// use App\Models\Category;

// class HomeController extends Controller
// {
//     public function index()
//     { -->
        // $trendyItems = Product::with('category')
        //     ->where('is_trendy', true)
        //     ->with('category')
        //     ->limit(6)
        //     ->get();
        
        // return view('index', compact('trendyProducts'));
//          $trendyCategories = Category::whereIn('slug', [
//                 'bags',
//                 'hats',
//                 'scarfs',
//                 'shoes',
//                 'dresses',
//     ])
//     ->with(['products' => function ($q) {
//         $q->where('is_trendy', true)->latest();
//     }])
//     ->get();

//     return view('index', compact('trendyCategories'));
//     }
// }

