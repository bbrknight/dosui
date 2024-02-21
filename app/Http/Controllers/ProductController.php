<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    //
    public function index() {
        // $products = Products::all();
        $products = Products::with('category')->get();
        return response()->json($products, 200);
    }

    public function show($id) {
        // $product = Products::find($id);
        $product = Products::with('category')->find($id);
        return response()->json($product, 200);
    }

    public function store(Request $request) {
        $product = new Products();
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->cost_price = $request->cost_price;
        $product->sell_price = $request->sell_price;
        $product->promotion_price = $request->promotion_price;
        $product->stock = $request->stock;
        $product->size = $request->size;
        $product->product_category_id = $request->product_category_id;
        $product->product_image = $request->product_image;
        $product->save();
        return response()->json($product, 200);
    }

    public function update(Request $request, $id) {
        $product = Products::find($id);
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->cost_price = $request->cost_price;
        $product->sell_price = $request->sell_price;
        $product->promotion_price = $request->promotion_price;
        $product->stock = $request->stock;
        $product->size = $request->size;
        $product->product_category_id = $request->product_category_id;
        $product->product_image = $request->product_image;
        $product->save();
        return response()->json($product, 200);
    }

    public function destroy($id) {
        $product = Products::find($id);
        $product->delete();
        return response()->json($product, 200);
    }
}
