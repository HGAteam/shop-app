<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use DataTables;
use Illuminate\Support\Str;
class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('admin.products.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProducts()
    {
        $products = Product::with('category')->orderBy('price','ASC')->get();
        return Datatables::of($products)->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_product = new Product();
        $new_product->name = $request->name;
        $new_product->slug = Str::slug($request->name);
        $new_product->description = $request->description;
        $new_product->price = $request->price;
        $new_product->category_id = $request->category;
        $new_product->save();
        return response()->json(['success'=>'Form is successfully submitted!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit_product = Product::find($id);
        $edit_product->name = $request->edit_name;
        $edit_product->slug = Str::slug($request->edit_name);
        $edit_product->description = $request->edit_description;
        $edit_product->price = $request->edit_price;
        $edit_product->category_id = $request->edit_category;
        $edit_product->save();
        return response()->json(['success'=>'Form is successfully submitted!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
    }
}
