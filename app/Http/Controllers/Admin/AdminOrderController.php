<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $title = trans('Orders');
        return view('admin.orders.index',['title' => $title]);
    }
}
