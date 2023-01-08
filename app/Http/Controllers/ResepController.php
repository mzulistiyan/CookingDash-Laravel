<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Bookmark;

class ResepController extends Controller
{
    public function index()
    {
        return view('resep.index', [
            'judulPage' => 'Register',
            'active' => 'register'
        ]);
    }

    public function getDataResep()
    {
        $reseps = Resep::with(['komentar'])->get();
        
        return view('resep.tampil', compact('reseps'), [
            'judulPage' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'deskripsi' => ['required', 'min:3', 'max:255'],
        ]);

        $reseps = [
            'user_id'=> auth()->user()->id,
            'name' => $request->name,
            'author' => $request->author,
            'deskripsi' => $request->deskripsi,
            'tipe_makanan' => $request->tipe_makanan,
        ];

        Resep::create($reseps);

        return redirect('/resep/tampil');

    }

    public function deleteResep($id)
    {
        $data = Resep::find($id);
        $bokmark = Bookmark::where('id_resep','=',$id)->first();
        $bokmark->delete();
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
        $resep->tipe_makanan = $request->tipe_makanan; 


        $resep->save(); 
        return redirect('/resep/tampil');
    }
}
