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
    public function store(Request $request){
        $newcategory = new product_categories();
        $newcategory->name = $request->get('catname');
        $checkonlyemployee = $request->get('employeeonly');
        if ($checkonlyemployee == null){
            $newcategory->is_employee_only = 0;
        }
        else{
            $newcategory->is_employee_only = 1;
        }
        $newcategory->save();
        return view('dashboards.categories.show');
    }

}
