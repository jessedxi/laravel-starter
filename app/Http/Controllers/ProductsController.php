<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $title = 'Welcome to my Laravel 8 practice';
        $description = 'Created by Jesse';
        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];
//        return view('products.index',
//            compact('title', 'description'));
        //return view('products.index')->with('title', $title);
        return view('products.index')->with('data', $data);
    }

    public function about()
    {
        return 'about us page';
    }
}
