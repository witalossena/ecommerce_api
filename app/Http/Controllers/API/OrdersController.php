<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;

use App\Orders;
use Illuminate\Http\Request;
use Validator;
use App\Http\Resources\Orders as OrdersResource;


class OrdersController extends BaseController
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'status' => 'required',     
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $product = Orders::create($input);

        return $this->sendResponse(new OrdersResource($product), 'Product created successfully.');
    }

    public function show(Orders $orders)
    {
        //
    }

    public function edit(Orders $orders)
    {
        //
    }

    public function update(Request $request, Orders $orders)
    {
        //
    }


    public function destroy(Orders $orders)
    {
        //
    }
}
