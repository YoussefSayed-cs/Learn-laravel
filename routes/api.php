<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\PostRequest;
use App\Http\Controllers\API\v1\CommentRequest;
use App\Http\Controllers\API\v1\TagRequest; 


/*|--------------------------------------------------------------------------
| Restful API Routes
| Request => get, post, put, delete
| Response => json, status code
|--------------------------------------------------------------------------
*/


Route::prefix('v1')->group(function () { //group the API routes under the prefix 'v1' for versioning
    // Post API
    Route::apiResource('/posts', PostRequest::class); //use apiResource to generate only the API routes for the posts controller

    // Comment API
    Route::apiResource('/comments', CommentRequest::class); //use apiResource to generate only the API routes for the comments controller

    // Tag API
    Route::apiResource('/tags', TagRequest::class); //use apiResource to generate only the API routes for the tags controller
});



