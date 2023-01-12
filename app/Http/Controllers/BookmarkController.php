<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function getDataBookmark()
    {
        $reseps = Bookmark::with(['resep','users'])
        ->where('id_user', '=', auth()->user()->id)
        ->get();
        
        return view('bookmark.tampil', compact('reseps'),["judulPage" => "resep"]);
    }

    public function store(Request $request,$id)
    {
        
        if (Bookmark::where('id_user','=',auth()->user()->id)->where('id_resep','=',$id)->exists()) {
            session()->flash('warning', 'Already in system.');
            return redirect()->back();
        } else{
            $bookmark = [
                'id_user'=> auth()->user()->id,
                'id_resep' => $id,
            ];
    
            Bookmark::create($bookmark);
    
            return redirect('/bookmark/tampil');
        }
    }

    public function deleteBookmark($id)
    {
        $data = Bookmark::find($id);
        $data->delete();
        
        return redirect('/bookmark/tampil');
    }
}
