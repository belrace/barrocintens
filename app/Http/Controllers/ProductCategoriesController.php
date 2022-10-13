<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCategoriesController extends Controller
{
    //
    public function index(){
        return view('dashboards.products.show');
    }
    public function store(){
        return view('dashboards.products.show');
    }
}
