<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ResepController extends Controller
{
    public function index()
    {
        return view('resep.index', [
            'judulPage' => 'Register',
            'active' => 'register'
        ]);
    }

    public function indexLabel()
    {
        $reseps = DB::table('reseps')->get();
        return view('resep.tampil', compact('reseps'), [
            'judulPage' => 'Register',
            'active' => 'register'
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
            'deskripsi' => $request->deskripsi
        ];

        Resep::create($reseps);

        return redirect('/resep/tampil');

    }
}
