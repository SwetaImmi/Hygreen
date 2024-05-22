<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $category = Category::all();
        $subCategory = SubCategory::all();
        return view('admin.products.create', compact('category', 'subCategory'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id'  => 'required',
            'product_name'  => 'required',
            'product_price'  => 'required',
            'product_details'  => 'required',
            'product_code'  => 'required',
            'product_brand'  => 'required',
            'product_origin_country'  => 'required',
            'product_packging_quantity'  => 'required',
            'sub_category_id'  => 'required',
            'product_image'  => 'required',

        ]);
        // return $request->all();
        if ($request->product_image != "") {
            $image = rand() . '.' . $request->product_image->extension();
            $request->product_image->move(('products'), $image);
        } else {
            $image = "0";
        }




        Product::create([
            'user_id'                       =>              1,
            'category_id'                   =>              $request->category_id,
            'product_name'                  =>              $request->product_name,
            'product_price'                 =>              $request->product_price,
            'product_details'               =>              $request->product_details,
            'product_image'                 =>              $image,
            'product_quantity'              =>              0,
            'product_code'                  =>              $request->product_code,
            'product_brand'                 =>              $request->product_brand,
            'product_origin_country'        =>              $request->product_origin_country,
            'product_packging_quantity'     =>              $request->product_packging_quantity,
            'sub_category_id'               =>               $request->sub_category_id,
        ]);
        return redirect()->back();
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    public function edit(Request $request, $id)
    {
        // return $id;
        $product = Product::with('category')->with('subcategory')->first();          // ->where('product_id', $request->product_id)->where('user_id', Auth::id())

        $category = Category::all();

        $subCategory = SubCategory::all();
        return view('admin.products.update', compact('product', 'category', 'subCategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id'  => 'required',
            'product_name'  => 'required',
            'product_price'  => 'required',
            'product_details'  => 'required',
            'product_code'  => 'required',
            'product_brand'  => 'required',
            'product_origin_country'  => 'required',
            'product_packging_quantity'  => 'required',
            'sub_category_id'  => 'required',
            // 'product_image'  => 'required',

        ]);

        $product = Product::findOrFail($id);
        if ($request->product_image != "") {
            $image = rand() . '.' . $request->product_image->extension();
            $request->product_image->move(('products'), $image);
        } else {
            $image = "0";
        }
        // return $request->all();
        if (!$request->product_image) {
            $product->update([
                // $request->all()
                'user_id'                       =>              1,
                'category_id'                   =>              $request->category_id,
                'product_name'                  =>              $request->product_name,
                'product_price'                 =>              $request->product_name,
                'product_details'               =>              $request->product_details,
                'product_image'                 =>              $product->product_image,
                'product_quantity'              =>              $request->product_quantity,
                'product_code'                  =>              $request->product_code,
                'product_brand'                 =>              $request->product_brand,
                'product_origin_country'        =>              $request->product_origin_country,
                'product_packging_quantity'     =>              $request->product_packging_quantity,
            ]);
        } else {
            // return 1;  
            $product->update([
                // $request->all()
                'user_id'                       =>              1,
                'category_id'                   =>              $request->category_id,
                'product_name'                  =>              $request->product_name,
                'product_price'                 =>              $request->product_name,
                'product_details'               =>              $request->product_details,
                'product_image'                 =>              $image,
                'product_quantity'              =>              $request->product_quantity,
                'product_code'                  =>              $request->product_code,
                'product_brand'                 =>              $request->product_brand,
                'product_origin_country'        =>              $request->product_origin_country,
                'product_packging_quantity'     =>              $request->product_packging_quantity,
            ]);
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        $user = Product::find($id);
        $user->Cart()->delete();
        $user->order()->delete();
        $user->details()->delete();
        // $user->banner()->delete();
        $user->delete();
        // return 1;
        // $product = Product::findOrFail($id);
        // $product->delete();
        return redirect()->back()->with('success', "Product record Deleted successfully!");
    }



    //get subcategory
    public function get_subcategory(Request $request)
    {
        //    return $request->category_id;
        $subcategories = SubCategory::where('category_id', $request->category)->get();
        // return $subcategories;
        return response()->json([
            'status' => 'success',
            'subcategories' => $subcategories,
        ]);
    }
}
