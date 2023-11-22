<?php

namespace App\Http\Controllers;

use App\Models\Product_type;
use Illuminate\Http\Request;

class Product_typeController extends Controller
{
    public function index()
    {
        return Product_type::all();
    }

    public function show($id)
    {
        $product_type = response()->json(Product_type::find($id));
        return $product_type;
    }

    public function store(Request $request)
    {
        $product_type = new Product_type();
        $product_type->name = $request->name;
        $product_type->description = $request->description;
        $product_type->cost = $request->cost;
        $product_type->save();
    }

    public function update(Request $request, $id)
    {
        $product_type = Product_type::find($id);
        $product_type->name = $request->name;
        $product_type->description = $request->description;
        $product_type->cost = $request->cost;
        $product_type->save();
    }

    public function destroy($id)
    {
        Product_type::find($id)->delete();
    }
}
