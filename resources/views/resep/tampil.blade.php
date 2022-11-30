@extends('layouts/main')

@section('container')

    
        <article class="mb-5">
            
            @foreach($data as $resep)
            <h1>{{ $resep->name}}</h1>
            <p>{{ $resep->deskripsi }}</p>
            @endforeach
        </article>
    

@endsection

