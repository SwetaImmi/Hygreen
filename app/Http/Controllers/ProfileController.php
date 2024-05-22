<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\SubCategory;
// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function my_account()
    {
        $category = Category::all();
        $subCategory = SubCategory::all();
        $address = Address::where('id', Auth::user()->id)->first();
        return view('home.profile.profile-account',compact('address','subCategory', 'category'));
    }
    public function   my_order()
    {
        $category = Category::all();
        $subCategory = SubCategory::all();
        return view('home.profile.my-orders',compact('subCategory', 'category'));
    }
}
