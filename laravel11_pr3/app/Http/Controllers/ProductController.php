<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::all();
        return view('backend.product.index',['items' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $cats = Category::all();
        return view('backend.product.create', ['items'=>$cats]);
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'status' => 'required',
        'category' => 'required',
        'image' => 'required',
    ]);

    $rand_number = rand(1,20);
    $ext_lower = strtolower($request->image->extension());
    $filename = $rand_number . time() . "." . $ext_lower;

    $request->image->move(public_path('images'), $filename);

    $product = new Product;

    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->status = $request->status;
    $product->category = $request->category;
    $product->image = 'images/' . $filename;

    $product->save();

    return redirect()->route('product.index')
        ->with('success', 'Successfully Product Created');
}

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
