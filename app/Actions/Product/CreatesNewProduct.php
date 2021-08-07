<?php

namespace App\Actions\Product;
use App\Models\Product;


class CreatesNewProduct implements Product
{


    public function store($data)
    {
        $product = Product::create($data);
        // $product->categories()->sync($data->input('categories', []));
        // $product->tags()->sync($data->input('tags', []));

        return $product;
    }


}
