<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with(['flavor','category'])->get();
        return $products;
    }

     public function store(Request $request)
    {
        $data = $request->all();
        $data = str_replace(",", ".", $data);
        return Product::create($data);
    }

    public function show($product)
    {
        $data = Product::where('id', $product)->with(['category','flavor'])->firstOrFail();
        return $data;
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->all();
        $data = str_replace(",", ".", $data);

        $product->update($data);
        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();
    }
}
