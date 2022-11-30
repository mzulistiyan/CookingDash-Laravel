@extends('layouts/main')

@section('container')

    @foreach ($post as $tampil)
        <article class="mb-5">
            <h2>
                <a href="/recipes/{{ $tampil["slug"] }}">{{  $tampil['nama']  }}</a>
            </h2>
            <h5>By: {{ $tampil['oleh'] }}</h5>
            <p>{{ $tampil['body'] }}</p>
        </article>
    @endforeach

@endsection