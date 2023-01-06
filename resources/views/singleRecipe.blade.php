@extends('layouts/main')

@section('container')

  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <h1 class="mb-3">{{ $resep->name }}</h1>

        <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $resep->author }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->name }}</a></p>

        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
        
        <article class="my-3 fs-5">
          {!! $resep->deskripsi !!}
        </article>

        <a href="/resep" class="d-block mt-3">Back to posts</a>
      </div>
    </div>
  </div>


@endsection