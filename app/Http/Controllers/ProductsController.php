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

        return view('products.index', [
            'data' => $data
        ]);
    }

    public function about()
    {
        return 'about us page';
    }

    public function show($name)
    {
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];
        return view('products.index', [
            'products' => $data[$name]
        ]);
    }
}
