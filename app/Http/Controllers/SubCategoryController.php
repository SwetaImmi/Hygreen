<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->cat) {
            $subCategory = SubCategory::where('category_id', $request->cat)->get();
            $category = Category::all();
            return view('admin.category.subCategory.list', compact('subCategory', 'category'));
        } else {
            $subCategory = SubCategory::all();
            $category = Category::all();
            return view('admin.category.subCategory.list', compact('subCategory', 'category'));
        }
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.category.subCategory.add', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id'    =>  'required',
            'sub_category_name'    =>  'required',
            'sub_category_desc'    =>  'required',

        ]);
        if ($request->sub_category_image != "") {
            $image = rand() . '.' . $request->sub_category_image->extension();
            $request->sub_category_image->move(('backend/subCategory'), $image);
        } else {
            $image = "0";
        }
        // return $request->all();
        SubCategory::create([
            'user_id'    =>   Auth::user()->id,
            'category_id'       =>  $request->category_id,
            'sub_category_name'    =>   $request->sub_category_name,
            'sub_category_desc'    =>   $request->sub_category_desc,
            'sub_category_icon'    =>    $image,

        ]);
        // return redirect()->back();
        return redirect('sub-category-list')->with('success', 'Sub Categories added Sucessfully!');
    }

    public function edit($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategories = SubCategory::all();
        return view('admin.category.subCategory.update', compact('subCategory','subCategories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id'    =>  'required',
            'sub_category_name'    =>  'required',
            'sub_category_desc'    =>  'required',

        ]);
        // return $request->all();
        if ($request->sub_category_image != "") {
            $image = rand() . '.' . $request->sub_category_image->extension();
            $request->sub_category_image->move(('backend/subcategory'), $image);
        } else {
            $image = "0";
        }
        if ($request->sub_category_image) {
            $update = SubCategory::find($id);
            $update->user_id = 1;
            $update->category_id      =  $request->category_id;
            $update->sub_category_name = $request->sub_category_name;
            $update->sub_category_desc = $request->sub_category_desc;
            $update->sub_category_icon = $image;
            $update->save();
        } else {
            $update = SubCategory::find($id);
            $update->user_id = 1;
            $update->category_id      =  $request->category_id;
            $update->sub_category_name = $request->sub_category_name;
            $update->sub_category_desc = $request->sub_category_desc;
            $update->sub_category_icon = $update->sub_category_icon;
            $update->save();
        }
        return redirect('sub-category-list')->with('success', 'Sub Categories Updated Sucessfully!');
    }


    public function destroy($id)
    {
        // return $id;
        $user = SubCategory::find($id);
        $user->product()->delete();
        $user->delete();
        return redirect()->back()->with('error', "Sub Categories record Deleted successfully!");
    }
}
