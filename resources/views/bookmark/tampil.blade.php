@extends('layouts/main')


@section('container')
@foreach ($reseps as $tampil)

<div class="card mb-3">
    <div class="card-header">
        By: {{$tampil->resep->author}}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$tampil->resep->name}}</h5>
        <p class="card-text">{{$tampil->resep->deskripsi}}</p>
        <a href="{{ route('bookmark.delete',$tampil->id_bookmark) }}" class="btn btn-danger">Delete Bookmark</a>
    </div>
</div>

@endforeach

@endsection