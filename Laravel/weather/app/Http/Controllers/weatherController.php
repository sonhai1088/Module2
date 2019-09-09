<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class weatherController extends Controller
{
    public function index ()
    {
        $cityID = 1581130;
        $cityName = 'Ha Noi';
        $cityJson = file_get_contents('cityvn.json');
        $cities = (object)json_decode($cityJson);

        $client = new Client();
        $response = $client->request('GET', "api.openweathermap.org/data/2.5/weather?id=". $cityID ."&appid=".env("WEATHER_KEY"));
        $dataJson = $response->getBody();
        $data = json_decode($dataJson);
        $main = $data->main;
//        var_dump($main);
        return view('index', compact('main', 'cities', 'cityName'));
    }

    public function search(Request $request){
        $cityJson = file_get_contents('cityvn.json');
        $cities = (object)json_decode($cityJson);
        $cityID = $request->cityID;
        $cityName = '';
        foreach ($cities as $key => $city)
        {
            if($cityID == $city->id){
                $cityName = $city->name;
                break;
            }
        }

        $client = new Client();
        $response = $client->request('GET', "api.openweathermap.org/data/2.5/weather?id=". $cityID ."&appid=".env("WEATHER_KEY"));
        $dataJson = $response->getBody();
        $data = json_decode($dataJson);
        $main = $data->main;
        return view('index', compact('main', 'cities', 'cityName'));
    }
}
