<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    private function findItemIndex($cart, $pid)
    {
        foreach ($cart as $index => $item) {
            if ($item['product_id'] === $pid) {
                return $index;
            }
        }
        return false;
    }


   


    public function cart_list()
    {
        // return 1;
        $category = Category::all();
        $subCategory = SubCategory::all();
        if (Auth::user()) {
            $cart = Cart::with('product')->get();

            return view('cart.cart', compact('category', 'cart', 'subCategory'));
        }
        $cart = json_decode(request()->cookie('carts'), true) ?? [];
        return view('cart.cart', compact('category', 'cart', 'subCategory'));
    }


    public function add_cart(Request $request, $pid)
    {
        // return $request->all();
        if (Auth::user() == NULL) {
            $cart = json_decode(request()->cookie('carts'), true) ?? [];
            $existingItemIndex = $this->findItemIndex($cart, $pid);
            if ($existingItemIndex !== false) {

                $cart[$existingItemIndex]['product_quantity'] += 1;
            } else {
                // return 2;
                $cart[] = [
                    'product_id' => $pid,
                    'product_quantity' => $request->quantity,
                    'product_name' => $request->product_name,
                    'product_price' =>  $request->product_price,
                    'product_image' =>  $request->product_image,
                    'unitId' => $request->UnitId,
                ];
                // return $cart;
            }
            return redirect()->back()->withCookie('carts', json_encode($cart), 60 * 24 * 7)->with('success', 'Item Added successfully!');
        } else {
            $cart = Cart::with('product')->where('product_id', $request->product_id)
                ->where('user_id', Auth::id())
                ->first();
            if ($cart) {
                $product_quantity = $cart->product_quantity;
                $quantity = $request->quantity;
                $cart = DB::table('carts')
                    ->where('product_id', $request->product_id)
                    ->update(['product_quantity' => $product_quantity + $quantity, 'unitId' => $request->UnitId]);
                return redirect()->back()->with('success', 'Item Added successfully!');
            } else {
                $cart = new Cart();
                $cart->product_id = $request->product_id;
                $cart->product_quantity = $request->quantity;
                $cart->unitId = $request->UnitId;
                $cart->user_id = Auth()->user()->id;
                $cart->save();
                return redirect()->back()->with('success', 'Item Added successfully!');
            }
        }
    }

    public function update_cookie_cart(Request $request, $pid)
    {
        // return $request->all();
        $cart = json_decode(request()->cookie('carts'), true) ?? [];
        $existingItemIndex = $this->findItemIndex($cart, $pid);
        $cart[$existingItemIndex]['product_quantity'] = $request->quantity;
        // return $update ;
        //   $newCookieValue = $update ;
        return redirect()->back()->withCookie('carts', json_encode($cart), 60 * 24 * 7)->with('success', 'Item Updated successfully!');
    }

    public function removeFromCart($pid)
    {
        // return 1;
        $cart = json_decode(request()->cookie('carts'), true) ?? [];
        $index = $this->findItemIndex($cart, $pid);
        if ($index !== false) {
            unset($cart[$index]);
            $cart = array_values($cart);
            return redirect()->back()->withCookie('carts', json_encode($cart), 60 * 24 * 7)->with('error', 'Item Removed successfully!');;
        }
        return redirect()->back();
    }

    public function removeAllFromCart()
    {
        $cookie = Cookie::forget('carts');
        return redirect('/')->withCookie($cookie);
    }

    public function cart_update(Request $request, $id)
    {
        // return $request->all();
        if ($request->id) {
            // return 1;
            $cart = Cart::find($id);
            $cart->product_quantity = $request->quantity;
            $cart->save();
            session()->flash('success', 'Item Cart is Updated Successfully !');

            return redirect()->back()->with('success', 'Item Updated successfully!');;
        }
        $cart = Cart::find($id);
        $cart->product_quantity = $request->quantity;
        $cart->save();
        session()->flash('success', 'Item Cart is Updated Successfully !');
        return redirect('/cart-list');
    }

    public function cart_delete($id)
    {
        $cart = Cart::findOrFail($id)->delete();
        return redirect()->back()->with('error', 'Item Removed successfully!');
    }

    public function all_delete()
    {
        DB::table('carts')->truncate();
        return redirect()->back()->with('error', 'All Item Removed successfully!');
    }


    public function cart_cart(Request $request)
    {
        // return $request->all();
        if (Auth::user() == NULL) {
            $cart = json_decode(request()->cookie('carts'), true) ?? [];
            $existingItemIndex = $this->findItemIndex($cart, $request->product_id);
            if ($existingItemIndex !== false) {

                $cart[$existingItemIndex]['product_quantity'] += 1;
            } else {
                // return 2;
                $cart[] = [
                    'product_id' => $request->product_id,
                    'product_quantity' => $request->quantity,
                    'product_name' => $request->product_name,
                    'product_price' =>  $request->product_price,
                    'product_image' =>  $request->product_image,
                    'unitId' => $request->UnitId,
                ];
                // return $cart;
            }
            return redirect()->back()->withCookie('carts', json_encode($cart), 60 * 24 * 7)->with('success', 'Item Added successfully!');
        } else {
            $cart = Cart::with('product')->where('product_id', $request->product_id)
                ->where('user_id', Auth::id())
                ->first();
            if ($cart) {
                $product_quantity = $cart->product_quantity;
                $quantity = $request->quantity;
                $cart = DB::table('carts')
                    ->where('product_id', $request->product_id)
                    ->update(['product_quantity' => $product_quantity + $quantity, 'unitId' => $request->UnitId]);
                return redirect()->back()->with('success', 'Item Added successfully!');
            } else {
                $cart = new Cart();
                $cart->product_id = $request->product_id;
                $cart->product_quantity = $request->quantity;
                $cart->unitId = $request->UnitId;
                $cart->user_id = Auth()->user()->id;
                $cart->save();
                return redirect()->back()->with('success', 'Item Added successfully!');
            }
        }
    }
}
