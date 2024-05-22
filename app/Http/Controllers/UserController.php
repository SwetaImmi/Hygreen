<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Mail\PasswordMail;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Enquiry;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;


class UserController extends Controller
{
    private function cart_login(Request $request)
    {
        $cartData = $request->cookie('carts');

        if ($cartData) {
            $cartItems = json_decode($cartData, true);
            $productIds = array_column($cartItems, 'product_id');
            // $quantity = array_column($cartItems, 'product_quantity');
            foreach ($productIds as $productId) {

                $cart = new Cart();
                $cart->user_id = Auth::user()->id; // Assuming you have a user_id column in your carts table
                // $cart->email = Auth::user()->email;
                $cart->product_id  = $productId;
                $cart->product_quantity = 1;
                $cart->save();
            }
        }
        /* Remove All window Cookie data  */
        Cookie::queue(Cookie::forget('carts'));
    }

    public function admin()
    {
        $order = Order::all();
        $users = User::all();
        $product = Product::all();
        return view('admin.index', compact('order', 'users', 'product'));
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.user_list');
    }

    public function register_show()
    {
        $category = Category::all();
        $subCategory  = SubCategory::all();
        return view('auth.register', compact('category', 'subCategory'));
    }

    public function register_create(Request $request)
    {
        // return $request->all();
        $test = $request->validate([
            'email' => 'required|email|unique:users',
            'firstname' => 'required',
            'lastname'  =>  'required',
            'phone'   =>   'required',
            'title'   =>   'required',
            'company'   =>   'required',
            'address2'   =>   'required',

            'country'   =>   'required',
            'customergroup'   =>   'required',
            'pobox'   =>   'required',
            // 'sec_user_name'   =>   'required',
            'sec_user_email'   =>   'required',
            'officephone'   =>   'required',

        ]);
        $password = 'hygreen' . rand();

        $register = User::create([
            'name'                      =>          $request->firstname . $request->lastname,
            'email'                     =>          $request->email,
            'password'                  =>          Hash::make($password),
            'contact'                   =>          $request->phone,
            'title'                     =>          $request->title,
            'company_name'              =>          $request->company,
            'city'                      =>          $request->address2,
            'country'                   =>          $request->country,
            'delivery_address'          =>          $request->delivery,
            'customer_type'             =>          $request->customergroup,
            'website'                   =>          $request->businesstype,
            'post_office'               =>          $request->pobox,
            'account_user_name'         =>          $request->sec_user_name,
            'account_user_email'        =>          $request->sec_user_email,
            'account_user_contact'      =>          $request->officephone,
            'computer_card'             =>          $request->cardid,
            'commercial_registration_no' =>         $request->customergroup,
            'role'                      =>          $request->cardid,
            'customer_id'               =>         1, //$request->customergroup,
        ]);

        Mail::to($request->email)->send(new PasswordMail($password));
        return redirect()->intended('/')->with('success', 'customor registered successfully!');
    }

    public function login_view()
    {
        return view('auth.login');
    }


    public function authenticate(Request $request)
    {

        // return $request->all();
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $remember_me = $request->has('remember_me') ? true : false;
        $check = $request->only('email', 'password');

        if (Auth::attempt($credentials, $check, $remember_me)) {
            $data = $request->session()->regenerate();
            $cart =  $this->cart_login($request);
            // return $request->all();
            if (Auth()->user()->role == 'Admin') {
                return response()->json([
                    'message' => 'You have logged In successfully!',
                    'code' => 201,
                    'redirect' => 'http://127.0.0.1:8000/admin',

                ]);
            } else {
                return response()->json([
                    'message' => 'You have logged In successfully!',
                    'code' => 200,
                    'redirect' => 'http://127.0.0.1:8000/',

                ]);
            }
        } else {
            return response()->json([
                'error' => 'Invalid Email address or Password',
                'code' => 500,

            ]);
        }
    }


    public function order_quotation(Request $request)
    {
        $category = Category::all();
        $subCategory = SubCategory::all();
        $products = Product::all();
        return view('home.order_qutation', compact('category', 'subCategory', 'products'));
    }

    public function quotation_send(Request $request)
    {

        if ($request->quotation) {
            $register = User::create([
                'name'                      =>         [
                    '1' => $request->firstname,
                    '2' => $request->lastname,
                ],
                'email'                     =>          $request->email,
                'password'                  =>          "HyGreen" . rand(1000, 9999),
                'contact'                   =>          $request->phone,
                'title'                     =>          $request->title,
                'company_name'              =>          $request->company,
                'city'                      =>          $request->address2,
                'country'                   =>          $request->country,
                'delivery_address'          =>          $request->delivery,
                'customer_type'             =>          $request->customergroup,
                'website'                   =>          $request->businesstype,
                'post_office'               =>          $request->pobox,
                'account_user_name'         =>          $request->sec_user_name,
                'account_user_email'        =>          $request->sec_user_email,
                'account_user_contact'      =>          $request->officephone,
                'computer_card'             =>          $request->cardid,
                'commercial_registration_no' =>         $request->customergroup,
                'role'                      =>          $request->cardid,
                'customer_id'               =>         $request->customergroup,
            ]);
        }
        // Enquiry sendrequest
        Enquiry::create([
            'firstname'         =>          $request->firstname,
            'lastname'          =>          $request->lastname,
            'email'             =>          $request->email,
            'phone'             =>          $request->phone,
            'country'           =>          $request->country,
        ]);
        return redirect()->intended('/')->with('success', 'customor registered successfully!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->intended('/')
            ->with('error', 'You Logout successfully!');
        return redirect()->route('login')
            ->with('error', 'You Logout successfully!');
    }
}
