<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {
    //llamo a la vista index y le mando la info
    return view('index',[
        'posts'=>Post::latest()->paginate()

    ]);
   }
}
