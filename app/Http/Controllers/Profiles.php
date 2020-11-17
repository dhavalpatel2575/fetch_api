<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Profiles extends Controller
{
    //
    function list()
    {
        $data= Http::get('http://api.openweathermap.org/data/2.5/weather?q=London&appid=7527a116751a014472f4cf9c7073cef3')->json();
   //     return "Hello";
        return view('profile', ['data'=>$data]);
    }
}
