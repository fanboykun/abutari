<?php

namespace App\Actions\Product;


use App\Models\Product;

class GetsAllProduct
{

    public function getAll()
    {
        $products = Product::all();

        return $products;
    }


}
