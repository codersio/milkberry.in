<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Media;
use App\Models\Product;
use App\Models\SliderBanner;
use App\Models\Social;
use App\Models\ProductType;
use App\Models\Subsubcategory;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $media = SliderBanner::all();
        $social = Social::all();
        $cate=Category::with('subcategories.subsubcategories')->get();
        $about=AboutUs::all();
        $products=Product::all();

//        dd($cate);

        return view('frontend/Home', compact('category', 'media', 'social','cate','about','products'));
    }

    public function ProductWithcategory($slug)
    {
        $category = Category::all();
        $categories = ProductType::where('sub_slug', $slug)->firstOrFail();
        $products = Product::where('product_type_id', $categories->id)->get();
        $social = Social::all();
        $cate=Category::with('subcategories')->get();
        $mcates=Category::where('cat_slug',$slug)->get();

        $mcate=Product::where('category_id',$mcates->id)->get();
        dd($mcate);
        return view('frontend/Product', compact('products', 'category', 'social','cate'));
    }

    public function Contact()
    {
        $category = Category::all();
        $contact = Contact::all();
        $social = Social::all();
        $cate=Category::with('subcategories')->get();

        return view('frontend/Contact', compact('category', 'contact', 'social','cate'));
    }

    public function gallery()
    {
        $category = Category::all();
        $media = Media::all();
        $social = Social::all();
        $cate=Category::with('subcategories')->get();
        return view('frontend/Media', compact('category', 'media', 'social','cate'));
    }

    public function about()
    {
        $category = Category::all();
        $about = AboutUs::all();
        $social = Social::all();
        $cate=Category::with('subcategories')->get();
        return view('frontend.About', compact('category', 'about', 'social','cate'));
    }

    public function Slider()
    {
        $images = Media::all();

        return response()->json($images);
    }

    public function subcateSlug($slug){
        $category = ProductType::where('sub_slug', $slug)->firstOrFail();
        // dd($category);
        $products = Product::where('product_type_id', $category->id)->get();
        $social = Social::all();
        $cate=Category::with('subcategories')->get();
        $mcates=Category::where('cat_slug',$slug)->get();

        $mcate=Product::where('category_id',$mcates)->get();
//        dd($mcate);
        return view('frontend/Product', compact('products', 'category', 'social','cate'));

}

public function subcategoryall($slug){
    $catesl=Category::where('cat_slug',$slug)->first();
    // dd($catesl);
    $sub=ProductType::where('category_id',$catesl->id)->get();
//    dd($sub);
//    $category = ProductType::where('sub_slug', $slug)->firstOrFail();
//    $products = Product::where('product_type_id', $category->id)->get();
    $social = Social::all();
    $cate=Category::with('subcategories')->get();


    return view('frontend/subcategory', compact('sub', 'social','cate','catesl'));
}

public function subsubcategoryall($id,$slug){
    // $cate=Category::find($id);
   $subsubQuery = ProductType::where('sub_slug', $slug)
    ->join('categories', 'product_types.category_id', '=', 'categories.id')
    ->select('product_types.*', 'categories.cat_title') // Select fields from both tables
    ->firstOrFail();
//   dd($subsubQuery)
                           ;

// dd($subsubQuery);





        $products=Product::where('product_type_id',$subsubQuery->id)->where('category_id',$subsubQuery->category_id)->get();
        // dd($products);
    $cate=Category::with('subcategories')->get();
    $social = Social::all();

//        dd($products);
        return view('frontend/Product',compact('products','cate','social','subsubQuery'));
}

public function subsubsubcategory($slug){
 $subsubQuery = Subsubcategory::where('slug', $slug)
    ->join('categories', 'subsubcategories.category_id', '=', 'categories.id')
    ->join('product_types', 'subsubcategories.product_type_id', '=', 'product_types.id')
    ->select('subsubcategories.*', 'categories.cat_title', 'product_types.type_title') // Select necessary fields
    ->firstOrFail();


        $products=Product::where('subsub_cate_id',$subsubQuery->id)->get();
    $social = Social::all();
    $cate=Category::with('subcategories')->get();
    return view('frontend/Product',compact('products','cate','social','subsubQuery'));


}

public function categoryProduct($slug){
     $subsubsub=Category::where('cat_slug',$slug)->first();
        $products=Product::where('category_id',$subsubsub->id)->get();
    $social = Social::all();
    $cate=Category::with('subcategories')->get();
    return view('frontend/Product',compact('products','cate','social'));
}


}
