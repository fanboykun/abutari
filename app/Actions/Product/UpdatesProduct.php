<?php

namespace App\Actions\Product;
use App\Models\Product;


class UpdatesProduct 
{


    public function update($product, $data)
    {
        $product = Product::findOrFail($product->id);
        $product->update($data);
        // $product->categories()->sync($data->input('categories', []));
        // $product->tags()->sync($data->input('tags', []));
                // $product->update($request->all());
        // $product->categories()->sync($request->input('categories', []));
        // $product->tags()->sync($request->input('tags', []));
        // if ($request->input('photo', false)) {
        //     if (!$product->photo || $request->input('photo') !== $product->photo->file_name) {
        //         if ($product->photo) {
        //             $product->photo->delete();
        //         }
        //         $product->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        //     }
        // } elseif ($product->photo) {
        //     $product->photo->delete();
        // }

        return $product;
    }


}
