<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function about_us(Request $request)
    {
        // return $request->all();
        $about = Setting::where('type', 'about-us')->first();
        return view('home.about-us', compact('about'));
    }
    public function resources()
    {
        $banner = Banner::latest()->paginate(10);
        return view('home.resources', compact('banner'));
    }
    public function partners()
    {

        $banner = Banner::latest()->paginate(10);
        return view('home.partners', compact('banner'));
    }

    public function index(Request $request)
    {
        $banner = Banner::latest()->paginate(10);
        return view('home.index', compact('banner'));
    }

    public function single_product($id)
    {
        $product = Product::find($id);
        return view('home.single-product', compact('product'));
    }

    public function categories_show(Request $request, $category_name, $id)
    {
        $subactegory = '';
        $product = Product::where('category_id', $id)->get();
        return view('home.categories', compact('product', 'category_name', 'id','subactegory'));
    }

    public function sub_categories_show(Request $request, $id, $category_name, $subactegory)
    {
        // return $subactegory;
        $product = Product::where('sub_category_id', $id)->get();
        // return response()->json($products);
        return view('home.categories', compact('product', 'category_name', 'subactegory', 'id'));
    }


    public function view(Request $request, $id)
    {

        $image = Product::find($id);
        $products = Product::find($id);
        $products->product_image = url('/') . '/products/' . $products->product_image;
        // $products = Product::where('category_id', $id)->first();
        return response()->json([
            'products' => $products,
            'image'  => $image
        ]);
    }

    public function category(Request $request)
    {
        // return 1;
        $products = Product::where('category_id', $request->value)->get();
        foreach ($products as $product) {
            $product->product_image = url('/') . '/products/' . $product->product_image;
        }
        // return response()->json($request->id);
        // $products = Product::where('category_id', $request->value)->first();
        // $products->product_image = url('/').'/products/'.$products->product_image;
        return response()->json($products);
    }
}
