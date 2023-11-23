<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SLTest1Controlller extends Controller
{
    function hello($name='')
    {
        return view('sltest1view',['name'=>$name]);
    }

    function managePostRequest(Request $request){

        $name = $request->input('name');
        $roll= $request->input('roll');

        return response("Post request output {$name} - {$roll} ",200);
    }

    function shopGetRequest(Request $request){

        $shop = $request->user();
        $shop = $shop->api()->rest('GET','/admin/shop.json');
        echo "<pre>";
        print_r($shop['body']);
    }
}