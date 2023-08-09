<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;

//Route::apiResource('v1/posts',App\Http\Controllers\Api\V1\PostController::class)->only('show');
/*Route::apiResource('v1/posts',App\Http\Controllers\Api\V1\PostController::class)
    ->only(['index','show','destroy']);*/

//v1
Route::apiResource('v1/posts',PostV1::class)
    ->only(['index','show','destroy']);

//V2
Route::apiResource('v2/posts',PostV2::class)
    ->only(['index','show']);

