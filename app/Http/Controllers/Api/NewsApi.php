<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Validator;

use App\Http\Resources\NewsResource;

class NewsApi extends Controller
{
    public function show()
    {
        $news = News::all();

        return NewsResource::collection($news);
    }

    public function find($id)
    {
        $news = News::findOrFail($id);

        return new NewsResource($news);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            // 'foto_category' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:2048'
            'slug' => 'string',
            'excerpt' => 'required',
            'body' => 'required|string',
            'published' => 'required|boolean'
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $news = News::create($validator->validated());
        return (new NewsResource($news))->response()->setStatusCode(201);
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            // 'foto_category' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:2048'
            'slug' => 'string',
            'excerpt' => 'required|string',
            'body' => 'required|string',
            'published' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $news->update($validator->validated());
        return (new NewsResource($news))->response()->setStatusCode(200);
    }
}
