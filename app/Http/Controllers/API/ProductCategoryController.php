<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\ProductCategory;
use Illuminate\Http\Request;
use Validator;
use App\Http\Resources\productCategory as CategoryResource;



class ProductCategoryController extends BaseController
{

    public function index()
    {
        $productCategory = ProductCategory::all();
        return $this->sendResponse(CategoryResource::collection($productCategory), 'categories retrieved successfully.');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'category_name' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $products = ProductCategory::create($input);

        return $this->sendResponse(new CategoryResource($products), 'Category created successfully.');
    }


    public function show($id)
    {
        $product_category = ProductCategory::find($id);
        if (is_null($product_category)) {
            return $this->sendError('Product not found');
        }

        return $this->sendResponse(new CategoryResource($product_category), 'Product retrieved successfully.');
    }


    public function edit(ProductCategory $productCategory)
    {
        //
    }

    public function update(Request $request, ProductCategory $productCategory)
    {
        //
    }

    public function destroy(ProductCategory $productCategory)
    {
        //
    }
}
