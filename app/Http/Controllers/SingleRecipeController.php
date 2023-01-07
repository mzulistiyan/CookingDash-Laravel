<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleRecipeController extends Controller
{
    public function index(){
        return view('recipes', [
            "judulPage" => "resep",
            "post" => Post::all(),
        ]);
    }

    public function show($slug){
        $resep = Resep::where('slug', $slug)->firstOrFail();
        return view('singleRecipe', ['resep' => $resep]);
    }

    public function deleteResep($id)
    {
        $data = Resep::find($id);
        $data->delete();
        return redirect('/resep/tampil');
    }

    public function detailResep($id)
    {
        $data = Resep::find($id);
       
        return view('resep.edit', compact('data'),["judulPage" => "resep"]);
    }

    public function updateResep(Request $request,$id)
    {
        $resep = Resep::find($id); 
        $resep->name = $request->name; 
        $resep->author = $request->author; 
        $resep->deskripsi = $request->deskripsi; 

        $resep->save(); 
        return redirect('/resep/tampil');
    }
    

}
