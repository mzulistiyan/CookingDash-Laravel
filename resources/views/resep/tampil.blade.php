@extends('layouts/main')


@section('container')

    @foreach ($reseps as $tampil)
        <article class="mb-5 border-bottom">
       <div class="row"></div>
            <h5>By: {{$tampil->author}}</h5>
            <p>{{ $tampil->deskripsi }}</p>
            <h2>
            <a href="{{ route('delete.resep',$tampil->id_resep) }}"type="button" class="btn btn-danger">Delete</a>
            <a type="button" class="btn btn-info" href="{{ route('detail.resep',$tampil->id_resep) }}">Edit Resep</a>
            
            <form id="form" action="{{ route('bookmark.store', $tampil->id_resep) }}" method="POST" >
                @csrf

                <input type="hidden" name="getid" value="{{ $tampil->id_resep }}">
                <input type="submit" name="submit" value="Bookmark">

            </form>
        </h2>
       

        </article>
    @endforeach

@endsection