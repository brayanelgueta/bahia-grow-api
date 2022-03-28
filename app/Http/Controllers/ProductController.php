<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showProducts(){
        
        $products = Product::all();

        return $products;
    }

    public function createProduct(Request $request){

        $newProduct = new Product;

        $newProduct->name = $request->name;
        $newProduct->description = $request->description;
        $newProduct->sell_price = $request->sell_price;
        $newProduct->buy_price = $request->buy_price;
        $newProduct->quantity = $request->quantity;
        $newProduct->delivery_price = $request->delivery_price;

        $newProduct->save();
    }

    public function editProduct($id){

        $editProduct = Product::findOrFail($id);

        return $editProduct;
    }

    public function updateProduct(Request $request, $id){

        $updateProduct = Product::findOrFail($id);

        $updateProduct->name = $request->name;
        $updateProduct->description = $request->description;
        $updateProduct->sell_price = $request->sell_price;
        $updateProduct->buy_price = $request->buy_price;
        $updateProduct->quantity = $request->quantity;
        $updateProduct->delivery_price = $request->delivery_price;

        $updateProduct->save();
    }

    public function deleteProduct($id){

        $deleteProduct = Product::findOrFail($id);

        $deleteProduct->delete();
    }
}
