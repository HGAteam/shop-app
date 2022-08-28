<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function store(Request $request, $product_id)
    {
        if ($request->ip()) {
            $cart = Cart::where('ip', $request->ip())->where('status', 'Active')->first();
            if ($cart) {
                $cart_detail = CartDetail::create([
                    'cart_id' => $cart->id,
                    'product_id' => $product_id
                ]);

                return redirect()->back()->with(['success' => true, 'success' => trans('You have added a new product to your cart')]);
            } else {
                $new_cart = Cart::create([
                    'order_date' => now(),
                    'status' => 'Active',
                    'ip' => $request->ip()
                ]);
                $cart_detail = CartDetail::create([
                    'cart_id' => $new_cart->id,
                    'product_id' => $product_id
                ]);

                return redirect()->back()->with(['success' => true, 'success' => trans('You have added a new product to your cart')]);
            }
        }
        return redirect()->back()->with(['error' => true, trans('Something went wrong, try again or contact support')]);
    }

    public function cart(Request $request)
    {
        $cart = Cart::where('ip',$request->ip())->first();
        try {
            // if($cart){
            //     $cart_products = null;
            //     return view('cart', compact('cart_products'));
            // }else{
            //     if ($id > 0) {
            //         $cart = Cart::find($id);
            //         $cart_products = CartDetail::where('cart_id', $cart->id)->get();
            //         return view('cart',compact('cart_products'));
            //     }
            // }
            if($cart){
                $cart_products = CartDetail::where('cart_id', $cart->id)->get();
                return view('cart',compact('cart_products'));
            }else{
                $cart_products = null;
                return view('cart', compact('cart_products'));
            }
          
        } catch (\Throwable $th) {
        }
           
    }

    public function destroy(Request $request, $product_id)
    {
        $cart = Cart::where('ip', $request->ip())->where('status', 'Active')->where('deleted_at',null)->first();
        $cart_detail = CartDetail::where('cart_id', $cart->id)->where('product_id', $product_id)->delete();
        $products_in_cart = CartDetail::where('cart_id', $cart->id)->count();
        if ($products_in_cart < 1) {
            $cart->delete();
            $cart->update(['status' => 'Disabled']);
        }
    }

    public function checkout(Request $request)
    {
        return view('checkout');
    }
}
