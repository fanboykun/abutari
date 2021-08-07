<?php

namespace App\Actions\Product;
use App\Models\Product;
// use App\Contracts\ProductInterface;


class ShowsProduct 
{

    public function show($product)
    {
        $product = Product::findOrFail($product->id);
        // $product->load('categories');

        return $product;
    }


}
