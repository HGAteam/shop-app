<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use DataTables;

class UserController extends Controller
{
    public function index()
    {
        $title = trans('Manage Users');
        return view('admin.users.index', compact('title'));
    }

    public function getUsers()
    {
        $users = User::all();
        
        $users_data = array();

        foreach ($users as $key => $user) {

            $data['id'] = $user->id;
            $data['name'] = $user->name.', '.$user->last_name;
            $data['email'] = $user->email;
            $data['created_at'] = $user->created_at->format('m/d/Y h:m');
            $data['terms'] = $user->terms;

            foreach (\App\Http\Controllers\FrontController::getCountriesList() as $key => $value) {
                if($key == $user->country){
                    $data['country'] = $value['name'];
                }else{
                    $data['country'] = 'Country empty';
                } 
            }
          
            $data['city'] = $user->city;
            $data['street'] = $user->street;
            $data['phone'] = $user->phone;

            $users_data[] = $data; 
        }

        return DataTables::of($users_data)->make(true);
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
