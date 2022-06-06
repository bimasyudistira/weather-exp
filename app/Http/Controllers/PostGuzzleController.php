<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostGuzzleController extends Controller
{
    //
    public function index(){
        // $response = Http::get('https://api.openweathermap.org/data/2.5/weather?lat=-6.2&lon=106.8166&units=metric&appid=69d68c6cc093feeb8b2e5857a114e362');
        // $jsonData = $response->json($key= 'main');
        // return $jsonData;
        return Http::get('https://api.openweathermap.org/data/2.5/weather?lat=-6.2&lon=106.8166&units=metric&appid=69d68c6cc093feeb8b2e5857a114e362')['main'];
    }

    // public function store(){
    //     $response = Http::post('http://jsonplaceholder.typicode.com/posts',[
    //         'title' => 'This is test from tutsmake.com',
    //         'body' => 'This is test from tutsmake.com as body',
    //     ]);

    //     dd($response->successful());
    // }
}
