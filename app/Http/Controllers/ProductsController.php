<?php

namespace App\Http\Controllers;

use App\Models\product_categories;
use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $categories = product_categories::with('products')->get();
        $products = products::with('category')->get();
        return view('dashboards.inkoop.products.show')->with(array(
            'categories'=> $categories,
            'products' => $products

        ));
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
            $newproduct->brand = $request->get('productbrand');
            $newproduct->price = $request->get('price');
            $newproduct->product_category_id = $request->get('categorieid');
        $newproduct->save();
        return redirect()->back();
    }
    public function edit($id){
        $editproduct = products::with('category')->find($id);
        $categories = product_categories::all();
        return view('dashboards.inkoop.products.edit')->with(array(
            'editproduct' => $editproduct,
            'categories' => $categories
        ));
    }
    public function update(Request $request, $id){
        $updateproduct = products::find($id);
        $updateproduct->name = $request->get('productname');
        $updateproduct->description = $request->get('productdescription');
        // opslaan productimg
        if($request->file('productimage') !== null) {
            $productimg = $request->file('productimage')->getClientOriginalName();
            $opslaanproductimg = str_replace(' ', '_', $productimg);
            $request->productimage->move(public_path('img'), $opslaanproductimg);
            $updateproduct->image_path = $opslaanproductimg;
        }
        $updateproduct->brand = $request->get('productbrand');
        $updateproduct->price = $request->get('price');
        $updateproduct->product_category_id = $request->get('categorieid');
        $updateproduct->save();

        return redirect()->route('dashboard.products.index');
    }
    public function destroy($id){
        products::find($id)->delete();

        return redirect(route('dashboard.products.index'));
    }
}
