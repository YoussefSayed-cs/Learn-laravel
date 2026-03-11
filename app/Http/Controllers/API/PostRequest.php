<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use App\models\PostFactory; 
use Illuminate\Http\Request;

class PostRequest
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //@ToDO: Implement pagination and filtering
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //@TODO: validate the request data before creating a new post and then create a new post with the validated data
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //@TODO: fetch the post by id and return it as a JSON response
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //@TODO: validate the request data before updating the post and then update the post by id with the validated data
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //@TODO: delete the post by id and return a JSON response with a success message
    }
}
