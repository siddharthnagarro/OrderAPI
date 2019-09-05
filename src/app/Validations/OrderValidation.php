<?php

namespace App\Validations;

use Illuminate\Support\Facades\Validator;

class OrderValidation {

    public function validateGetOrders($request) {

        $cases = [
            'page' => 'required|numeric|gt:0',
            'limit' => 'required|numeric|gt:0'
        ];

        $errorMessage = config('orders.get_messages');

        $validator = Validator::make($request->all(), $cases, $errorMessage);
        
        if ($validator->fails()) {
            return Response(["error" => $validator->messages()], 406);
        } else {
            return true;
        }
        
    }

    public function validateCreateOrders($data) {

        $errorMessage = config('orders.store_messages');

        $cases = [
            'origin' => ['bail', 'required', 'array', 'min:2', 'max:2', 'validatelatlong'],
            'destination' => ['bail', 'required', 'array', 'min:2', 'max:2', 'validatelatlong']
        ];
        
        $validator = Validator::make($data, $cases, $errorMessage);
        
        if ($validator->fails()) {
            return Response(["error" => $validator->messages()], 400);
        } else {
            return true;
        }
    }

    public function validateUpdateOrders($data) {
        $errorMessage = config('orders.update_messages');
        $takenOrderStatus = config('orders.status')['taken'];

        $cases = [
            'status' => 'required|string|in:'.$takenOrderStatus
        ];

        $validator = Validator::make($data, $cases, $errorMessage);
            
        if ($validator->fails()) {
            return Response(["error" => $validator->messages()], 400);
        } else {
            return true;
        }
    }
}