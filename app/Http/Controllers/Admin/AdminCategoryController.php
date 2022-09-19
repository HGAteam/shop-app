<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DataTables;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = trans('Categories');
        return view('admin.categories.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategories()
    {
        return DataTables::of(Category::query())->make(true);
    }

    public function store(Request $request)
    {
        $new_category = new Category();
        $new_category->name = $request->name;
        $new_category->slug = Str::slug($request->name);
        $new_category->description = $request->description;
        $new_category->save();

        return response()->json(['success'=>'Form is successfully submitted!']);
    }

    public function update(Request $request, $id)
    {
        $update_category = Category::findOrFail($id);
        $update_category->name = $request->edit_name;
        $update_category->slug = Str::slug($request->edit_name);
        $update_category->description = $request->edit_description;
        $update_category->save();
        return response()->json(['success'=>'Form is successfully submitted!']);
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
    }
}
