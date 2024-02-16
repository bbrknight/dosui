<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    //
    public function index() {
        $productCategories = ProductCategory::all();
        return response()->json($productCategories, 200);
    }

    public function show($id) {
        $productCategory = ProductCategory::find($id);
        return response()->json($productCategory, 200);
    }

    public function store(Request $request) {
        $productCategory = new ProductCategory();
        $productCategory->category_name = $request->category_name;
        $productCategory->category_description = $request->category_description;
        $productCategory->category_image = $request->category_image;
        $productCategory->save();
        return response()->json($productCategory, 201);
    }

    public function update(Request $request, $id) {
        $productCategory = ProductCategory::find($id);
        $productCategory->category_name = $request->category_name;
        $productCategory->category_description = $request->category_description;
        $productCategory->category_image = $request->category_image;
        $productCategory->save();
        return response()->json($productCategory, 200);
    }

    public function destroy($id) {
        $productCategory = ProductCategory::find($id);
        $productCategory->delete();
        return response()->json(null, 204);
    }
}
