<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\AdminHr;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);

    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request)
{
    // Validate the form inputs
    $validatedData = $request->validate([
        'First_name' => 'required|string',
        'Last_name' => 'required|string',
        'Department' => 'required|string',
        'Position' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
    ]);

    // Handle file upload
    if ($request->hasFile('image')) {
        // Store the image in the 'public' disk (storage/app/public) and get the path
        $imagePath = $request->file('image')->store('images', 'public');
        $validatedData['image'] = $imagePath; // Store the image path in the DB
    }

    // Save the employee record
    Product::create($validatedData);

    return redirect()->route('product.index')->with('success', 'New Employee created successfully.');
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

        return redirect(route('product.index'))->with('success', 'Updated Succesffully');

    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Deleted Succesffully');
    }

    public function search(Request $request)
{
    $query = $request->input('query');


}



}
