<?php

namespace App\Http\Controllers;

use App\Actions\Product\CreatesNewProduct;
use App\Actions\Product\DeletesProduct;
use App\Actions\Product\GetsAllProduct;
use App\Actions\Product\ShowsProduct;
use App\Actions\Product\UpdatesProduct;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    // use MediaUploadingTrait;

    public function index(GetsAllProduct $action)
    {
        // abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $products = $action->getall();
        return new ProductResource($products);
    }

    public function store(StoreProductRequest $request, CreatesNewProduct $action)
    {
        $product = $action->store($request->all());

        return (new ProductResource($product))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Product $product, ShowsProduct $action)
    {
        // abort_if(Gate::denies('product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $product = $action->show($product);

        return new ProductResource($product);
    }

    public function update(UpdateProductRequest $request, Product $product, UpdatesProduct $action)
    {
        $data = $request->all();
        $product = $action->update($product, $data);

        return (new ProductResource($product))
        ->response()
        ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Product $product, DeletesProduct $action)
    {
        // abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $action->destroy($product);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
