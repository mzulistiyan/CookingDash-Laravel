<?php

namespace App\Http\Controllers;
use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{

    public function createKomentar(Request $request)
    {
        $komentar = [
            'id_user'=> auth()->user()->id,
            'id_resep' => $request->id_resep,
            'komentar' => $request->komentar,
        ];
        

        Komentar::create($komentar);

        return redirect('/resep/tampil');

    }

    public function deleteKomentar($id)
    {
        $data = Komentar::find($id);
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
