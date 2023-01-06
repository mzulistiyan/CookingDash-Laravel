@extends('layouts/main')

@section('container')

    @foreach ($post as $tampil)
        <article class="mb-5 border-bottom">
            <h2>
                <a href="/recipes/{{ $tampil->slug }}" class="text-decoration-none">{{  $tampil->nama  }}</a>
            </h2>
            <h5>By: <a href="#">{{ $tampil->user->name }}</a> $tampil->oleh  }}</h5>
            <p>{{ $tampil['body'] }}</p>
        </article>
    @endforeach

@endsection