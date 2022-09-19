<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MyAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = trans('My Account');
        $user = auth()->user();
        return view('my_account', compact('title','user'));
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

        $user = auth()->user();
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->street = $request->street;
        $user->number = $request->number;
        $user->zip = $request->zip_code;
        $user->document = $request->document;
        $user->save();

        $notification = trans('Your data has been successfully updated.');
        return back()->with(compact('notification'));
    }
}
