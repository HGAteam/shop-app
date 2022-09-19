<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use GuzzleHttp\Client;
use Carbon\Carbon;
use App\Mail\NewOrder;
use App\Mail\RefundEmail;
use App\Mail\OrderEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function index()
    {
        $client = new Client();

        $carts = Cart::where('user_id', auth()->user()->id)
            ->where('status', '!=', 'Active')
            ->get();

        $title = trans('Orders');
        return view('orders', compact('carts', 'title'));
    }

    public function update(Request $request)
    {
        $rules = Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:3', 'max:190'],
            'last_name' => ['required', 'string', 'min:3', 'max:190'],
            'country' => ['required', 'string', 'min:1', 'max:5'],
            'city' => ['required', 'string', 'min:3', 'max:190'],
            'street' => ['required', 'string', 'min:3', 'max:190'],
            'zip_code' => ['required', 'string', 'min:3', 'max:9'],
            'phone' => ['required', 'min:10', 'max:20', 'string'],
            'number' => ['required', 'min:1', 'max:5', 'string'],
            'document' => ['required', 'min:8', 'max:15', 'string'],
        ]);

        $user_update = User::where('id', auth()->user()->id)->update([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'country' => $request->country,
            'city' => $request->city,
            'street' => $request->street,
            'number' => $request->number,
            'zip' => $request->zip_code,
            'document' => $request->document,
        ]);

        $user = User::findOrFail(auth()->user()->id);

        $RequestBody = [
            'amount' => $request->amount,
            'currency' => 'USD',
            'payment_method_flow' => 'REDIRECT',
            'country' => $request->country,
            'payer' => [
                'name' => $request->name . ', ' . $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'document' => $request->document,
                'address' => [
                    'city' => $request->city,
                    'street' => $request->street,
                    'number' => $request->number,
                ],
            ],
            'order_id' => Str::padLeft(auth()->user()->cart->id, 8, '0'),
            'notification_url' => 'http://liftingother.com/home/orders',
        ];

        $xdate = Carbon::now()->format('c');
        $xlogin = config('dlocal.x_login');
        $transKey = config('dlocal.x_transkey');
        $reqBody = json_encode($RequestBody);

        if (!$rules->fails()) {
            if (config('dlocal.mode') == false) {
                $secretKey = config('dlocal.sandbox.secret_key');

                $signature = hash_hmac(
                    'sha256',
                    "$xlogin$xdate$reqBody",
                    $secretKey
                );

                $headers = [
                    'Accept' => 'application/json',
                    'Authorization' =>
                        'V2-HMAC-SHA256, Signature: ' . $signature,
                    'Content-Type' => 'application/json',
                    'User-Agent' => 'MerchantTest / 1.0',
                    'X-Date' => $xdate,
                    'X-Login' => $xlogin,
                    'X-Trans-Key' => $transKey,
                    'X-Version' => '2.1',
                ];

                $client = new Client();

                $response = $client->request(
                    'POST',
                    'https://sandbox.dlocal.com/payments',
                    [
                        'body' => $reqBody,
                        'headers' => $headers,
                    ]
                );

                $resp = json_decode($response->getBody());

                try {
                    if ($resp->status_code == 100) {
                        $cart = auth()->user()->cart;
                        $cart->status = 'Pending';
                        $cart->order_date = Carbon::now();
                        $cart->signature = $signature;
                        $cart->amount = $request->amount;
                        $cart->save();

                        Mail::to([auth()->user()->email])->send(new NewOrder($user, $cart));
                        Mail::to(['orders@liftingother.com'])->send(new OrderEmail($user, $cart));

                        return redirect()->away($resp->redirect_url);
                    }
                } catch (\Throwable $th) {
                    $error = trans(
                        'We cannot redirect you to the payment server. Please try again later.'
                    );
                    return back()->with(compact('error'));
                }
            } else {
                $secretKey = config('dlocal.production.secret_key');

                $signature = hash_hmac(
                    'sha256',
                    "$xlogin$xdate$reqBody",
                    $secretKey
                );

                $headers = [
                    'Accept' => 'application/json',
                    'Authorization' =>
                        'V2-HMAC-SHA256, Signature: ' . $signature,
                    'Content-Type' => 'application/json',
                    'User-Agent' => 'MerchantTest / 1.0',
                    'X-Date' => $xdate,
                    'X-Login' => $xlogin,
                    'X-Trans-Key' => $transKey,
                    'X-Version' => '2.1',
                ];

                $client = new Client();

                $response = $client->request(
                    'POST',
                    'https://api.dlocal.com/payments',
                    [
                        'body' => $reqBody,
                        'headers' => $headers,
                    ]
                );

                $resp = json_decode($response->getBody());

                try {
                    if ($resp->status_code == 100) {
                        $cart = auth()->user()->cart;
                        $cart->status = 'Pending';
                        $cart->order_date = Carbon::now();
                        $cart->signature = $signature;
                        $cart->amount = $request->amount;
                        $cart->save();

                        Mail::to([auth()->user()->email])->send(new NewOrder($user, $cart));
                        Mail::to(['orders@liftingother.com'])->send(new OrderEmail($user, $cart));
                        return redirect()->away($resp->redirect_url);
                    }
                } catch (\Throwable $th) {
                    $error = trans(
                        'We cannot redirect you to the payment server. Please try again later.'
                    );
                    return back()->with(compact('error'));
                }
            }
        }
    }

    // public function test(Request $request)
    // {
    //     $user = auth()->user();
    //     $cart = auth()->user()->cart;
    //     $cart->status = 'Pending';
    //     $cart->order_date = Carbon::now();
    //     $cart->amount = $request->amount;
    //     $cart->save();

    //     return back();
    // }

    public function refund($id)
    {
        $user = auth()->user();
        // $cart = auth()->user()->cart;
        $cart = Cart::findOrFail($id);
        $cart->status = 'Refund';
        $cart->save();

        Mail::to([auth()->user()->email,'refunds@liftingother.com'])->send(new RefundEmail($user, $cart));
        $message = trans('An agent will contact you to confirm your reimbursement.');
        return back()->with(compact('message'));
    }
}
