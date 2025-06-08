<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Resources\SubscribersResource;

use App\Models\Subscribers;


class SubscribersApi extends Controller
{
    //
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $subscribers = Subscribers::create($validator->validated());
        return (new SubscribersResource($subscribers))->response()->setStatusCode(201);
    }
}
