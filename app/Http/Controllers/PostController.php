<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\models\PostFactory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        $data = Post::cursorPaginate(5); 
        $title = "All Posts";
        return view('posts.index', ['posts' => $data] + ['title' => $title]); //pass the data to the view with title
    }


    function show($id)
    {
        $post = Post::findOrFail($id); //fetch a single record by id or fail if not found
        return view('posts.show', ['posts' => $post]); //pass the post to the view
    }



    function create()
    {
        // $posts = Post::create([
        //     'title' => 'New Post1111',
        //     'body' => 'This is the content of the new post11111.',
        //     'published' => true,
        //     'author' => 'Youssef',
        // ]);

        Post::factory(100)->create(); //use the factory to create a new post with random data

        return response(content: "successful creation"); //redirect to the posts index page after creating a new post
    }


    function update($id)
    {
        $post = Post::findOrFail($id); //fetch the post by id or fail if not found
        $post->update([
            'title' => 'Updated Post Title',
            'body' => 'This is the updated content of the post.',
            'published' => false,
            'author' => 'Youssef Updated',
        ]); //update the post with new data

        return redirect('/posts'); //redirect to the posts index page after updating the post
    }


    function destroy($id)
    {
        
        Post::destroy($id); //delete the post by id
    }
}



