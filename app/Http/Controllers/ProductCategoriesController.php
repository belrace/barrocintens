<?php

namespace App\Http\Controllers;

use App\Models\product_categories;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductCategoriesController extends Controller
{
    //
    public function index(){
        $catgory = product_categories::all();
        return view('dashboards.categories.show');
    }
    public function store(){
        $newcategory = new product_categories();
        $newcategory->name = Input::get();
        $newcategory->save();
        return view('dashboards.categories.show');
    }

}
