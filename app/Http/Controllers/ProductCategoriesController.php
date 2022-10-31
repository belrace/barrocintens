<?php

namespace App\Http\Controllers;

use App\Models\product_categories;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductCategoriesController extends Controller
{
    //
    public function index(){
        $categories = product_categories::all();
        return view('dashboards.inkoop.categories.show')->with('categories', $categories);
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
        return redirect(route('dashboard.categorys.index'));
    }
    public function edit($id){
        $editcategory = product_categories::find($id);
        return view('dashboards.inkoop.categories.edit')->with('editcategory', $editcategory);
    }
    public function update( $id, Request $request){
        $updatecategory = product_categories::find($id);
        $updatecategory->name = $request->get('catname');
        if ($request->get('employeeonly') == null){
            $updatecategory->is_employee_only = 0;
        }
        else{
            $updatecategory->is_employee_only = 1;
        }
        $updatecategory->save();
        return redirect(route('dashboard.categorys.index'));
    }
    public function destroy($id)
    {
        product_categories::find($id)->delete();
        return redirect(route('dashboard.categorys.index'));
    }

}
