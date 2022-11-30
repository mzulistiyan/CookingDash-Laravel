<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data = DB::table('reseps')->get();
        return view('resep.tampil', compact('data'), [
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

        $data = [
            'name' => $request->name,
            'deskripsi' => $request->deskripsi
        ];

        Resep::create($data);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        // $validatedData['password'] = Hash::make($validatedData['password']);

        // $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/home')->with('success', 'Registration successfull! Please login');
    }
}
