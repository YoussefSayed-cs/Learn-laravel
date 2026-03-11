<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostRequest;
use App\Http\Controllers\API\CommentRequest;
use App\Http\Controllers\API\TagRequest; 


/*|--------------------------------------------------------------------------
| Restful API Routes
| Request => get, post, put, delete
| Response => json, status code
|--------------------------------------------------------------------------
*/

// Post API

Route::apiResource('/posts', PostRequest::class); //use apiResource to generate only the API routes for the posts controller


// Comment API
Route::apiResource('/comments', CommentRequest::class); //use apiResource to generate only the API routes for the comments controller

// Tag API
Route::apiResource('/tags', TagRequest::class); //use apiResource to generate only the API routes for the tags controller

