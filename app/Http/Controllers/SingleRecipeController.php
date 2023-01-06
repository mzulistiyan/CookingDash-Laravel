<?php

namespace App\Http\Controllers;

use App\Models\SingleRecipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleRecipeController extends Controller
{
    public function index(){
        return view('recipes', [
            "judulPage" => "resep",
            "post" => Post::all()
        ]);
    }

    public function show($slug){
        $resep = reseps::where('slug', $slug)->firstOrFail();
        return view('singleRecipe', ['resep' => $resep]);
    }

}
