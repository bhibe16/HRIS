<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
        
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'First_name' => 'required',
            'Last_name' => 'required',
            'Department' => 'required',
            'Position' => 'nullable',
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));

    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'First_name' => 'required',
            'Last_name' => 'required',
            'Department' => 'required',
            'Position' => 'nullable',
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Succesffully');

    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product deleted Succesffully');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    
}


}