<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category_list()
    {
        $category = Category::all();
        return view('admin.category.list', compact('category'));
    }

    public function category_show()
    {
        return view('admin.category.add');
    }

    public function category_add(Request $request)
    {
        $request->validate([
            'category_name'  => 'required',
            'category_desc'  => 'required',
        ]);
        if ($request->category_image != "") {
            $image = rand() . '.' . $request->category_image->extension();
            $request->category_image->move(('backend/category'), $image);
        } else {
            $image = "0";
        }
        Category::create([
            'user_id'    =>   "1",
            'category_name'    =>   $request->category_name,
            'category_desc'    =>   $request->category_desc,
            'category_image'     => $image,
        ]);
        return redirect('category-list')->with('success', 'Categories added Sucessfully!');
    }
    public function category_edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.update', compact('category'));
    }

    public function category_update(Request $request, $id)
    {
        $request->validate([
            'category_name'  => 'required',
            'category_desc'  => 'required',
        ]);
        if ($request->category_image != "") {
            $image = rand() . '.' . $request->category_image->extension();
            $request->category_image->move(('backend/category'), $image);
        } else {
            $image = "0";
        }
        if (!$request->category_image) {
            $update = Category::find($id);
            $update->user_id = 1;
            $update->category_name = $request->category_name;
            $update->category_desc = $request->category_desc;
            $update->category_image = $update->category_image;
            $update->save();
        } else {
            $update = Category::find($id);
            $update->user_id = 1;
            $update->category_name = $request->category_name;
            $update->category_desc = $request->category_desc;
            $update->category_image = $image;
            $update->save();
        }

        return redirect('category-list')->with('success', 'Categories Updated Sucessfully!');
    }


    public function destroy($id)
    {

        $user = Category::find($id);
        $user->subcategory()->delete();
        $user->product()->delete();
        $user->banner()->delete();
        $user->delete();
        
        return redirect()->back()->with('error', "Categories record Deleted successfully!");
    }
}
