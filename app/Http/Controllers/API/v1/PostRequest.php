<?php

namespace App\Http\Controllers\API\v1;

use App\Models\Post;
use Illuminate\Http\Request;

class PostRequest
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::paginate(5); //fetch all posts from the database    
        return response()->json($data, 200); //return a JSON response with the data    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $data = Post::create($request->all()); //create a new post with the request data
        if (!$data) {
            return response()->json(['data'=>$data ,'message' => 'Post creation failed'], 500); //return a JSON response with an error message if the post creation failed
        }
        return response()->json(['data'=>$data ,'message' => 'Post created successfully'], 201 , [] , JSON_PRETTY_PRINT); //return a JSON response with the created
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //@TODO: fetch the post by id and return it as a JSON response
        $data = Post::find($id); //fetch the post by id
        if (!$data) {
            return response()->json(['message' => 'Post not found'], 404); //return a JSON response with a not found message if the post does not exist
        }
        else {
            return response()->json(['data'=>$data ,'message' => 'Post found successfully'], 200 , [] , JSON_PRETTY_PRINT); //return a JSON response with the post if it exists
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Post::find($id); //fetch the post by id
            if (!$data) {
                return response()->json(['message' => 'Post not found'], 404); //return a JSON response with a not found message if the post does not exist
            }
        $data->update($request->all()); //update the post with the request data 
        return response()->json(['data'=>$data ,'message' => 'Post updated successfully'], 200 , [] , JSON_PRETTY_PRINT); //return a JSON response with the updated post
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //@TODO: delete the post by id and return a JSON response with a success message
        $data = Post::find($id); //fetch the post by id
        if (!$data) {
            return response()->json(['message' => 'Post not found'], 404); //return a JSON response with a not found message if the post does not exist
        }
        $data->delete(); //delete the post
        return response()->json(['data'=>$data ,'message' => 'Post deleted successfully'], 200); //return
    }
}
