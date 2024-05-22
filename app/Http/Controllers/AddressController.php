<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function order_address(Request  $request, $totalAmount)
    {
        $address =  Address::where('user_id', Auth()->user()->id)->first();
        if (!$address) {
            // $cart = Cart::with('product')->get();
            //   return  $cart = Cart::where('user_id', Auth::id())->first();
            $cart = Cart::with('product')->where('user_id', Auth::id())->get();
            $category = Category::all();
            $subCategory = SubCategory::all();
            return view('order.order-address', compact('category', 'subCategory', 'cart', 'totalAmount'));
        } else {
            // return 1;
            // $cart = Cart::where('user_id', Auth::id())->first();
            $cart = Cart::with('product')->where('user_id', Auth::id())->get();
            $category = Category::all();
            $subCategory = SubCategory::all();
            $address = Address::where('id', Auth::user()->id)->first();
            return view('order.order-place', compact('category', 'subCategory', 'cart', 'address', 'totalAmount'));
        }
        // return 1;

    }

    public function order_address_create(Request $request)
    {
        $request->validate([
            'firstname'         =>      'required',
            'lastname'          =>      'required',
            'email'         =>      'required',
            'phone'         =>      'required',
            'postcode'          =>      'required',
            'delivery_address1'         =>      'required',
            'city_town'         =>      'required',
            'state'         =>      'required',
            'country_delivery'          =>      'required',
            // 'billing_firstname'         =>      'required',
            // 'billing_lastname'          =>      'required',
            // 'billing_email'         =>      'required',
            // 'billing_phone'         =>      'required',
            // 'billing_postcode'          =>      'required',
            // 'billing_delivery_address1'         =>      'required',
            // 'billing_city_town'         =>      'required',
            // 'billing_state'         =>      'required',
            // 'billing_country_delivery'          =>      'required',
        ]);

        $TotalAmount =  $request->totalAmount;

        if ($request->sameadr) {
            Address::create([


                'user_id'               =>      Auth::user()->id,
                'firstname'       =>      $request->firstname,
                'lastname'              =>      $request->lastname,
                'email'             =>      $request->email,
                'phone'             =>      $request->phone,
                'postcode'       =>      $request->postcode,
                'delivery_address1'       =>      $request->delivery_address1,
                'address2'       =>      $request->address2,
                'city_town'       =>      $request->city_town,
                'state'       =>      $request->state,
                'country_delivery'       =>      $request->country_delivery,
                'billing_firstname'       =>      $request->firstname,
                'billing_lastname'       =>      $request->lastname,
                'billing_email'       =>      $request->email,
                'billing_phone'       =>      $request->phone,
                'billing_postcode'       =>      $request->postcode,
                'billing_delivery_address1'       =>      $request->delivery_address1,
                'billing_address2'       =>      $request->address2,
                'billing_city_town'       =>      $request->city_town,
                'billing_state'       =>      $request->state,
                'billing_country_delivery'       =>      $request->country_delivery,
            ]);
        } else {
            Address::create([


                'user_id'               =>      Auth::user()->id,
                'firstname'       =>      $request->firstname,
                'lastname'              =>      $request->lastname,
                'email'             =>      $request->email,
                'phone'             =>      $request->phone,
                'postcode'       =>      $request->postcode,
                'delivery_address1'       =>      $request->delivery_address1,
                'address2'       =>      $request->address2,
                'city_town'       =>      $request->city_town,
                'state'       =>      $request->state,
                'country_delivery'       =>      $request->country_delivery,
                'billing_firstname'       =>      $request->billing_firstname,
                'billing_lastname'       =>      $request->billing_lastname,
                'billing_email'       =>      $request->billing_email,
                'billing_phone'       =>      $request->billing_phone,
                'billing_postcode'       =>      $request->billing_postcode,
                'billing_delivery_address1'       =>      $request->billing_delivery_address1,
                'billing_address2'       =>      $request->billing_address2,
                'billing_city_town'       =>      $request->billing_city_town,
                'billing_state'       =>      $request->billing_state,
                'billing_country_delivery'       =>      $request->billing_country_delivery,
            ]);
        }
        // return $request->all();
        return redirect()->route('order.placed', ['totalAmount' => $TotalAmount]);
    }
}
