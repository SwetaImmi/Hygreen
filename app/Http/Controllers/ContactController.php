<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contact_view()
    {
        $category = Category::all();
        $subCategory = SubCategory::all();
        return view('home.contact-us',compact('category','subCategory'));
    }
    public function contact_create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'customergroup' => 'required',
            'message' => 'required',

        ]);
        $contact = Contact::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'country'           => $request->country,
            'customergroup'     => $request->customergroup,
            'message'           => $request->message,
        ]);
        return redirect()->intended('/')->with('success', 'Message Send successfully!');
    }
}
