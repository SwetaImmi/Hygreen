<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function edit_register_show(){
        $category = Category::all();
        $subCategory = SubCategory::all();
        $user = User::where('id', Auth::user()->id)->first();
        return view('auth.edit-register',compact('user','subCategory', 'category'));
    }
}
