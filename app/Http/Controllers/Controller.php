<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\City;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request)
    {
        $users = User::all();
        $cities = City::with('users')->get();

        if($request->city_id) {
            $users = User::where('city_id',$request->city_id)->get();
        } else {
            $users = User::all();
        }
        return view(('index'),compact('users','cities'));
    }

}
