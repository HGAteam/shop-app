<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Carbon\Carbon;
use App\Mail\NewOrder;
use Mail;
use Illuminate\Support\Facades\Hash;

class CartController extends Controller
{
	public function index()
	{

		$title = trans('Orders');
		return view('orders', compact('title'));
	}

	public function update(Request $request)
	{
		$RequestBody = [
			"amount" => $request->amount,
			"currency" => "USD",
			"country" => $request->country,
			"payment_method_flow" => "REDIRECT",
			"payer" => [
				"name" => $request->name,
				"email" => $request->email,
				"document" => $request->document,
				"address" =>  [
					"city" => $request->city,
					"street" => $request->street,
					"number" => $request->number
				]
			],
			"order_id" => auth()->user()->cart->id,
			"notification_url" => "http://www.liftitfy.com/home/orders"
		];


		$xdate = Carbon::now()->format('c');
		$xlogin = config('dlocal.x_login');
		$transKey = config('dlocal.x_transkey');
		$reqBody = json_encode($RequestBody);

		if (config('dlocal.mode') == false) {
			$secretKey = config('dlocal.sandbox.secret_key');
			$signature = hash_hmac("sha256", "$xlogin$xdate$reqBody", $secretKey);

			$headers = [
				'Accept' => 'application/json',
				'Authorization' => 'V2-HMAC-SHA256, Signature: ' . $signature,
				'Content-Type' => 'application/json',
				'User-Agent' => 'MerchantTest / 1.0',
				'X-Date' => $xdate,
				'X-Login' => $xlogin,
				'X-Trans-Key' => $transKey,
				'X-Version' => '2.1',
			];

			$user = User::where('id', auth()->user()->id)->update([
				'name' => $request->name,
				'last_name' => $request->last_name,
				'phone' => $request->phone,
				'country' => $request->country,
				'city' => $request->city,
				'address' => $request->street . ', ' . $request->number,
				'zip' => $request->zip_code,
			]);

			$client = new Client();

			$response = $client->request('POST', 'https://sandbox.dlocal.com/payments', [
				'body' => $reqBody,
				'headers' => $headers
			]);
			
			dd($response->getBody());
			 
		} else {
			$secretKey = config('dlocal.production.secret_key');
			$signature = hash_hmac("sha256", "$xlogin$xdate$reqBody", $secretKey);
		}

		// $cart = $client->cart;
		// $cart->status = 'Pending';
		// $cart->order_date = Carbon::now();
		// $cart->save(); // UPDATE



		// $admins = User::where('admin', true)->get();
		// Mail::to($admins)->send(new NewOrder($client, $cart));

		// $notification = 'Tu pedido se ha registrado correctamente. Te contactaremos pronto vía mail!';
		// return back()->with(compact('notification'));
	}
}
