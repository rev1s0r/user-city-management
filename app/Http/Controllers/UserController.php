<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function userIndex()
    {
        $users = User::all();
        $cities = City::all();

        return view(('/users'),compact('users','cities'));
    }

    public function createUser(StoreUserRequest $request)
    {
        User::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'city_id' => $request->input('city_id'),
        ]);

        return redirect('/users')->with('message' ,'User created');
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        $cities = City::all();

        return view(('/editusers'),compact('user','cities' ));

    }

    public function updateUser(StoreUserRequest $request,$id)
    {
        User::where('id', $id)->update([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'city_id' => $request->input('city_id'),
        ]);

        return redirect('/users')->with('message' ,'User updated');
    }
}
