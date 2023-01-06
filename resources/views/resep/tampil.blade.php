@extends('layouts/main')

<!-- @section('container')

    
        <article class="mb-5">
            
            @foreach($reseps as $resep)
            <h1>{{ $resep->name}}</h1>
            <p>{{ $resep->deskripsi }}</p>
            @endforeach
        </article>
    

@endsection -->

@section('container')

    @foreach ($reseps as $tampil)
        <article class="mb-5 border-bottom">
        <h2>
            <a href="/resep/{{ $tampil->slug }}" class="text-decoration-none">{{ $tampil->name }}</a>
        </h2>
            <h5>By: <a href="#">{{ $tampil->author }}</a> $tampil->author  }}</h5>
            <p>{{ $tampil->deskripsi }}</p>
        </article>
    @endforeach

@endsection