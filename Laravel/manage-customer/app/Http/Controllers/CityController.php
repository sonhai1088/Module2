<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('cities.list', compact('cities'));
    }
    public function create()
    {
        return view('cities.create');
    }
    public function store(Request $request)
    {
        $city = new City();
        $city->name = $request->input('name');
        $city->save();
        return redirect()->route('cities.index');
    }
    public function edit($id){
        $city = City::findOrFail($id);
        return view('cities.edit', compact('city'));
    }
    public function destroy($id){
        $city = City::findOrFail($id);

        //xoa khach hang thuoc tinh thanh nay
        $city->customers()->delete();
        $city->delete();

        //cap nhat xong quay ve trang danh sach tinh thanh
        return redirect()->route('cities.index');
    }
}
