<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Detail;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Stripe;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Customer;

class StripePaymentController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }


    public function stripePost(Request $request)
    {
        // return $request->all();
        $orderDetailsArray = [];
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $token = $request->stripeToken;


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
        }



        $order = new Order();
        $order->user_id  = Auth::user()->id;
        $order->products_id   = $request->product_id;
        $order->addresses_id  = $request->address_id;
        $order->paymentmode =  "card";
        $order->product_quantity =  $request->total_quantity;
        $order->product_price =  $request->total_amount;
        $order->order_name = Auth::user()->email;
        $order->card_name  = "card";
        $order->card_number  = "card";
        $order->card_cvv = "card";
        $order->card_month = "card";
        $order->card_year  = "card";
        $order->order_address = 0;
        $order->order_status = 0;
        $order->save();
        foreach ($request->order_details as $orderDetail) {
            // return $orderDetail['pid'];
            $shipping = Address::where('id',  $orderDetail['aid'])->first();
            $orderDetails = new Detail();
            $orderDetails->user_id  = Auth::user()->id;
            $orderDetails->product_id  = $orderDetail['pid'];
            $orderDetails->paymentMode =  "Card";
            $orderDetails->product_name  =  $orderDetail['order_name'];
            $orderDetails->product_quantity =  $orderDetail['product_quantity'];
            $orderDetails->product_price =  $orderDetail['product_price'] * $orderDetail['product_quantity'];
            $orderDetails->order_id = $order->id;
            $orderDetails->save();
            $orderDetailsArray[] = $orderDetails;
        }
        $productNames = array_map(function ($orderDetail) {
            return $orderDetail->product_name;
        }, $orderDetailsArray);

        // Create a customer
        if (Auth::user()->stripe_customer_id == NULL) {
            // return 1;
            $customer = Customer::create([
                'name' => Auth::user()->name,
                'source' => $token,
                'email' => Auth::user()->email,

            ]);
            $user = User::find(Auth::user()->id);
            $user->stripe_customer_id = $customer->id;
            $user->save();
            // Charge Create
            $charge = Charge::create([
                'customer' => $customer->id,
                // "source" => $token,
                'amount' => $request->total_amount * 100,
                'currency' => 'usd',
                'description' => 'Purchase of Your Product ID :-' . json_encode($productNames),
                'metadata' => [
                    'order_id' => $order->id,
                    'product_name' => json_encode($productNames),
                    "city" => $shipping->billing_city,
                    "line1" => $shipping->billing_address,
                    "postal_code" => $shipping->billing_zip,
                    "state" => $shipping->billing_state,
                    "email" => Auth::user()->email,
                    "name" => $shipping->billing_name,
                    "phone" => $shipping->billing_mobile,
                ],


            ]);
        } else {
            // return $token;
            // Charge the customer
            $charge = Charge::create([
                "source" => $token,
                'amount' => $request->total_amount * 100,
                'currency' => 'usd',
                'description' => 'Purchase of Your ' . json_encode($productNames),
                'metadata' => [
                    'order_id' => $order->id,
                    'product_name' => json_encode($productNames),
                    "city" => $shipping->billing_city,
                    "line1" => $shipping->billing_address,
                    "postal_code" => $shipping->billing_zip,
                    "state" => $shipping->billing_state,
                    "email" => Auth::user()->email,
                    "name" => $shipping->billing_name,
                    "phone" => $shipping->billing_mobile,
                ],


            ]);
            Charge::update(
                $charge->id,
                [
                    'customer' => Auth::user()->stripe_customer_id,
                ]
            );
        }

        // $order = Order::find($order->id);
        // $order->card_name  = $charge->payment_method_details->card->brand;
        // $order->card_number  = $charge->payment_method_details->card->last4;
        // $order->card_cvv = $charge->payment_method_details->card->checks->cvc_check;
        // $order->card_month = $charge->payment_method_details->card->exp_month;
        // $order->card_year  = $charge->payment_method_details->card->exp_year;
        // $order->save();
        // $user = User::find(Auth::user()->id);
        // $user->pm_type  = $charge->payment_method_details->card->brand;
        // $user->pm_last_four   = $charge->payment_method_details->card->last4;
        // $user->save();
        // Clear the cart items for the authenticated user
        // if (Auth::check()) {
        //     Cart::where('user_id', Auth::id())->delete();
        // }
        //  Trigger the event  order_email
        // Mail::to(Auth::user()->email)->send(new OrderConfirmaionMail($orderDetailsArray));
        // event(new OrderPlaced($orderDetailsArray));
        return view("home.payment-success", ['order' => $orderDetailsArray, 'address' => $shipping]);
    }
}
