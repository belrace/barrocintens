<?php

namespace App\Http\Controllers;

use App\Models\product_categories;
use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $categories = product_categories::all();
        return view('dashboards.products.show')->with('categories', $categories);
    }
    public function store(Request $request){
        $newproduct = new products();
            $newproduct->name = $request->get('productname');
            $newproduct->description = $request->get('productdescription');
            // opslaan productimg
            $productimg = $request->file('productimage')->getClientOriginalName();
            $opslaanproductimg= str_replace(' ', '_', $productimg);
            $request->productimage->move(public_path('img'), $opslaanproductimg);
            $newproduct->image_path = $opslaanproductimg;
            $newproduct->price = $request->get('price');
            $newproduct->product_category_id = $request->get('categorieid');
        $newproduct->save();
        return redirect(route('dashboard.products.index'));
    }
}
