<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function createProduct($details){
        return Product::create($details->all());
    }

    public function updateProduct($details, $id){
        $product = Product::findOrFail($id);
        return $product->update($details->all());
    }

    public function deleteProduct($id){
        $product = Product::findOrFail($id);
        return $product->delete();
    }

    public function getAll(){
        return Product::all();
    }

}
