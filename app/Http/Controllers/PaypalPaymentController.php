<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Detail;
use App\Models\Order;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\ExpressCheckout;


class PaypalPaymentController extends Controller
{
    public function index()
    {
        return view('paypal');
    }

    public function payment(Request $request)
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
        }



        $order = new Order();
        $order->user_id  = Auth::user()->id;
        $order->products_id   = $request->product_id;
        $order->addresses_id  = $request->address_id;
        $order->paymentmode =  "Upi";
        $order->product_quantity =  $request->total_quantity;
        $order->product_price =  $request->total_amount;
        $order->order_name = Auth::user()->email;
        $order->card_name  = "Upi";
        $order->card_number  = "Upi";
        $order->card_cvv = "Upi";
        $order->card_month = "Upi";
        $order->card_year  = "Upi";
        $order->order_address = 0;
        $order->order_status = 0;
        $order->save();
        foreach ($request->order_details as $orderDetail) {
            // return $orderDetail['pid'];
            $shipping = Address::where('id',  $orderDetail['aid'])->first();
            $orderDetails = new Detail();
            $orderDetails->user_id  = Auth::user()->id;
            $orderDetails->product_id  = $orderDetail['pid'];
            $orderDetails->paymentMode =  "Upi";
            $orderDetails->product_name  =  $orderDetail['order_name'];
            $orderDetails->product_quantity =  $orderDetail['product_quantity'];
            $orderDetails->product_price =  $orderDetail['product_price'] * $orderDetail['product_quantity'];
            $orderDetails->order_id = $order->id;
            $orderDetails->save();
            // $orderDetailsArray[] = $orderDetails;
        }
        // $productNames = array_map(function ($orderDetail) {
        //     return $orderDetail->product_name;
        // }, $orderDetailsArray);






        $total = $request->total_amount;
        // return $request->all();
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.payment.success'),
                "cancel_url" => route('paypal.payment/cancel'),
            ],
            "purchase_units" => [
                0 => [
                    "reference_id" => $order->id,
                    "description" => "Test",
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $total
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('cancel.payment')
                ->with('error', 'Something went wrong.');
        } else {
            return redirect()
                ->route('paypal.payment.success')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }



    public function paymentCancel()
    {
        dd('Your payment has been declend. The payment cancelation page goes here!');
    }

    public function paymentSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return view("home.paypal_success", ['order' => $response]);
            return redirect()
                ->intended('/')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('login')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
}
