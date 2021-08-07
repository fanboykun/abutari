<?php

namespace App\Actions\Product;
use App\Models\Product;


class DeletesProduct 
{
    public function destroy($product)
    {
        $product = Product::findOrFail($product->id);
        $product->delete();

        return null;
    }
}
