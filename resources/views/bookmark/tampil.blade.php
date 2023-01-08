@extends('layouts/main')


@section('container')

    @foreach ($reseps as $tampil)
        <article class="mb-5 border-bottom">
       <div class="row"></div>
       <h1>BOOKMARK RESEP</h1>
            <h5>By: {{$tampil->resep->author}}</h5>
            <h5>{{$tampil->resep->deskripsi}}</h5>
            <h2>
            <a href="{{ route('bookmark.delete',$tampil->id_bookmark) }}"type="button" class="btn btn-danger">Delete</a>

        </h2>
        </article>
    @endforeach

@endsection