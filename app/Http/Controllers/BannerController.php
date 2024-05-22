<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    public function banner_list()
    {
        $banner = Banner::all();
        return view('admin.banner.banner-list', compact('banner'));
    }

    public function banner_show()
    {
        $category = Category::all();
        return view('admin.banner.add-banner', compact('category'));
    }

    public function banner_add(Request $request)
    {
        $request->validate([
            'title'  => 'required',
            'description'  => 'required',
            'banner_image' => ['required','mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);
        // return $request->all();
        // return $request->sub_category_image;
        if ($request->banner_image != "") {
            $image = rand() . '.' . $request->banner_image->extension();
            $request->banner_image->move(('backend/Banner'), $image);
        } else {
            $image = "0";
        }
        // return $request->all();
        Banner::create([
            'user_id'    =>   $request->user_id,
            // 'category_id'       =>  1,
            'title'    =>   $request->title,
            'description'    =>   $request->description,
            'image'    =>    $image,

        ]);
        return redirect('/banner-list')->with('success', 'Banner added Sucessfully!');
    }

    public function banner_edit($id)
    {
        $banner = Banner::find($id);
        $category = Category::all();
        return view('admin.banner.update-banner', compact('banner', 'category'));
    }



    public function banner_update(Request $request, $id)
    {
        $request->validate([
            'title'  => 'required',
            'description'  => 'required',
            'banner_image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);
        // return $request->all();
        if ($request->banner_image != "") {
            $image = rand() . '.' . $request->banner_image->extension();
            $request->banner_image->move(('backend/Banner'), $image);
        } else {
            $image = "0";
        }


        if ($request->banner_image) {
            // return 1;
            $update = Banner::find($id);
            $update->user_id =      Auth::user()->id;
            $update->category_id      =  $request->category_id;
            $update->title = $request->title;
            $update->description = $request->description;
            $update->image = $image;
            $update->save();
        } else {
            // return 2;
            $update = Banner::find($id);
            $update->user_id                = Auth::user()->id;
            $update->category_id            =  $request->category_id;
            $update->title                  = $request->title;
            $update->description            = $request->description;
            $update->image                  = $update->image;
            $update->save();
        }
        return redirect('/banner-list')->with('success', 'Banner Updated Sucessfully!');
    }




    public function banner_delete($id)
    {
        // return $id;
        Banner::find($id)->delete();
        return redirect()->back()->with('error', 'Banner Removed Sucessfully!');
    }
}
