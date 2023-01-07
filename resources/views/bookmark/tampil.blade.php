@extends('layouts/main')


@section('container')

    @foreach ($reseps as $tampil)
        <article class="mb-5 border-bottom">
       <div class="row"></div>
       <h1>BOOKMARK RESEP</h1>
            <h5>By: {{$tampil->resep->author}}</h5>
            <h5>By: {{$tampil->resep->deskripsi}}</h5>
            <h2>
        </h2>
        </article>
    @endforeach

@endsection