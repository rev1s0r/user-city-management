<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Http\Requests\StoreCityRequest;


use Illuminate\Http\Request;

class CityController extends Controller
{
    public function citiesIndex()
    {
        $cities = City::all();

        return view(('/cities'),compact('cities'));
    }

    public function createCity(StoreCityRequest $request)
    {
        City::create([
            'city_name' => $request->input('city_name'),

        ]);

        return redirect('/cities')->with('message' ,'City created');
    }

    public function editCity($id)
    {
        $city = City::findOrFail($id);

        return view(('/editcities'),compact('city'));
    }

    public function updateCity(StoreCityRequest $request,$id)
    {
        City::where('id', $id)->update([
            'city_name' => $request->input('city_name'),
        ]);

        return redirect('/cities')->with('message' ,'City updated');
    }
}
