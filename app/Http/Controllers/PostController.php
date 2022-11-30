<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('recipes', [
            "judulPage" => "resep",
            "post" => Post::all()
        ]);
    }

    public function show($slug){
        return view('post',[
            "judulPage" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }
}
