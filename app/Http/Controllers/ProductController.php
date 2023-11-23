<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        //return response("Hello world",200);
        

$shop = Auth::user();
$data = $shop->api()->rest('GET','/admin/products.json');


$products = $data['body']['products'];

return view('welcome',compact('products'));



    }
}
