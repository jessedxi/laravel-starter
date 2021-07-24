<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index() {
        $title = 'Welcome to my Laravel 8 practice';
        return view('products.index', compact('title'));
    }

    public function about() {
        return 'about us page';
    }
}
