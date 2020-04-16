<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Product;
use App\Image;
use Validator;
use App\Http\Resources\Product as ProductResource;
use App\Http\Controllers\API\BaseController as BaseController;


class ProductController extends BaseController
{
    public function index()
    {
        $products = Product::all();     

        return $this->sendResponse(ProductResource::collection($products), 'Products retrieved successfully.');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'product_name' => 'required',
            'product_description' => 'required',
            'product_quantity' => 'required',
            'product_price' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $product = Product::create($input);
        $product->image()->create($input);

        return $this->sendResponse(new ProductResource($product), 'Product created successfully.');
    }


    public function show($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return $this->sendError('Product not found');
        }

        return $this->sendResponse(new ProductResource($product), 'Product retrieved successfully.');
    }

    public function edit(Product $product)
    {
    }

    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return $this->sendResponse('Product deleted.', 'ok');
    }
}
