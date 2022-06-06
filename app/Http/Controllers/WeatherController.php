<?php

namespace App\Http\Controllers;

use App\Models\weather;
use Illuminate\Http\Request;
// use GuzzleHttp\Client;

class WeatherController extends Controller
{
    //
    // public function saveApiData(){

    //     $client = new Client();
    //     $res = $client->request('POST','https://api.openweathermap.org/data/2.5/weather?lat=-6.2&lon=106.8166&units=metric&appid=69d68c6cc093feeb8b2e5857a114e362',[
    //         'coord'=>[
    //             'lon'=>'test_lon',
    //             'lat'=>'test_lat',
    //         ]
    //         ]);
    //         $result= $res->getBody();
    //         dd($result);
    // }
    public function index(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.openweathermap.org/data/2.5/weather?lat=-6.2&lon=106.8166&units=metric&appid=69d68c6cc093feeb8b2e5857a114e362",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 3000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        }else{
            print_r(json_decode($response));
        }
    }
}