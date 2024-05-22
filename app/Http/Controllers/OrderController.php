<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Detail;
use App\Models\Order;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function order_calculate()
    {
        $cart = Cart::with('product')->get();
        $category = Category::all();
        $subCategory = SubCategory::all();
        return view('order.order-calculate', compact('category', 'subCategory', 'cart'));
    }

    public function order_placed()
    {
        $cart = Cart::with('product')->get();
        $category = Category::all();
        $subCategory = SubCategory::all();
        $address = Address::where('id', Auth::user()->id)->first();
        return view('order.order-place', compact('category', 'subCategory', 'cart', 'address'));
    }


    public function placeOrder(Request $request)
    {
        
        if ($request->sameadr) {
            $address = Address::find($request->id);
            $address->user_id         =      Auth::user()->id;
            $address->firstname   =      $request->firstname;
            $address->lastname          =      $request->lastname;
            $address->email          =      $request->email;
            $address->phone            =      $request->phone;
            $address->postcode      =      $request->postcode;
            $address->delivery_address1     =      $request->delivery_address1;
            $address->address2      =      $request->address2;
            $address->city_town    =      $request->city_town;
            $address->state      =      $request->state;
            $address->country_delivery      =      $request->country_delivery;
            $address->billing_firstname      =      $request->firstname;
            $address->billing_lastname      =      $request->lastname;
            $address->billing_email     =      $request->email;
            $address->billing_phone     =      $request->phone;
            $address->billing_postcode     =      $request->postcode;
            $address->billing_delivery_address1     =      $request->delivery_address1;
            $address->billing_address2     =      $request->address2;
            $address->billing_city_town     =      $request->city_town;
            $address->billing_state     =      $request->state;
            $address->billing_country_delivery     =      $request->country_delivery;
            $address->save();
        }else{

            $address = Address::find($request->id);
            $address->user_id         =      Auth::user()->id;
            $address->firstname   =      $request->firstname;
            $address->lastname          =      $request->lastname;
            $address->email          =      $request->email;
            $address->phone            =      $request->phone;
            $address->postcode      =      $request->postcode;
            $address->delivery_address1     =      $request->delivery_address1;
            $address->address2      =      $request->address2;
            $address->city_town    =      $request->city_town;
            $address->state      =      $request->state;
            $address->country_delivery      =      $request->country_delivery;
            $address->billing_firstname      =      $request->billing_firstname;
            $address->billing_lastname      =      $request->billing_lastname;
            $address->billing_email     =      $request->billing_email;
            $address->billing_phone     =      $request->billing_phone;
            $address->billing_postcode     =      $request->billing_postcode;
            $address->billing_delivery_address1     =      $request->billing_delivery_address1;
            $address->billing_address2     =      $request->billing_address2;
            $address->billing_city_town     =      $request->billing_city_town;
            $address->billing_state     =      $request->billing_state;
            $address->billing_country_delivery     =      $request->billing_country_delivery;
            $address->save();
        } 
        

        // return $request->all();
        $address = Address::where('user_id', Auth()->user()->id)->first();
        $orderDetailsArray = [];
        $order = new Order();
        $order->user_id  = Auth::user()->id;
        $order->products_id   = $request->product_id;
        $order->addresses_id  = $request->id;
        $order->paymentmode =  "C.O.D";
        $order->product_quantity =  $request->total_quantity;
        $order->product_price =  $request->total_amount;
        $order->order_name = Auth::user()->email;
        $order->card_name  = "C.O.D";
        $order->card_number  = "C.O.D";
        $order->card_cvv = "C.O.D";
        $order->card_month = "C.O.D";
        $order->card_year  = "C.O.D";
        $order->order_status = 0;
        $order->save();
        foreach ($request->order_details as $orderDetail) {
            $orderDetails = new Detail();
            $orderDetails->user_id  = Auth::user()->id;
            $orderDetails->product_id  = $orderDetail['pid'];
            $orderDetails->paymentMode =  "C.O.D";
            $orderDetails->product_name  =  $orderDetail['order_name'];
            $orderDetails->product_quantity =  $orderDetail['product_quantity'];
            $orderDetails->product_price =  $orderDetail['product_price'] * $orderDetail['product_quantity'];
            $orderDetails->order_id = $order->id;
            $orderDetails->save();
            $orderDetailsArray[] = $orderDetails;
        }
        // Send Mail
        // Mail::to(Auth::user()->email)->send(new OrderConfirmaionMail($orderDetailsArray));
        // // Clear the cart items for the authenticated user
        // if (Auth::check()) {
        //     Cart::where('user_id', Auth::id())->delete();
        // }
        return view("home.payment-success", ['order' => $orderDetailsArray, 'address' => $address]);
    }
}
