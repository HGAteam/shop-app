<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Str;
use DataTables;
use App\Mail\OrderStatusEmail;
use App\Mail\OrderStatusChangeEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class AdminOrderController extends Controller
{
    public function index()
    {
        $title = trans('Manage Orders');
        return view('admin.orders.index',['title' => $title]);
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $user = User::find($cart->user_id);
        try {
                $cart->status = $request->status;
                $cart->save();
                $success = trans('The order was successfully updated.');
                Mail::to([$user->email])->send(new OrderStatusEmail($user, $cart));
                Mail::to(['orders@liftingother.com'])->send(new OrderStatusChangeEmail($user, $cart));
    } catch (\Throwable $th) {
            $error = trans('Something went wrong, try it again');
        }
    }

    public function getOrders()
    {
        $carts = Cart::where('status', '!=', 'Active')->get();
        
        $carts_data = array();

        foreach ($carts as $key => $cart) {
            $data['cart_id'] = Str::padLeft($cart->id, 8, '0');
            $data['customer'] = $cart->user->name.', '.$cart->user->last_name;
            $data['status'] = $cart->status; 
            $data['order_date'] = $cart->order_date;
            $data['total'] = $cart->total;
            $data['order_id'] = $cart->id;
            $carts_data[] = $data; 
        }

        return DataTables::of($carts_data)->make(true);
    }

    public function destroy($id){
        Cart::findOrFail($id)->delete();
    }
}
