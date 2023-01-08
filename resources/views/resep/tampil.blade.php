@extends('layouts/main')


@section('container')

    @foreach ($reseps as $tampil)
        <article class="mb-5 border-bottom">
       <div class="col"></div>
            <h5>By: {{$tampil->author}}</h5>
            <p>{{ $tampil->deskripsi }}</p>
            <a href="{{ route('delete.resep',$tampil->id_resep) }}"type="button" class="btn btn-danger">Delete</a>
            <a type="button" class="btn btn-info" href="{{ route('detail.resep',$tampil->id_resep) }}">Edit Resep</a>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal-{{ $tampil->id_resep }}" data-target="#myModal-{{ $tampil->id_resep }}">Tambah Komentar +</button>
            
            <form id="form" action="{{ route('bookmark.store', $tampil->id_resep) }}" method="POST" >
                @csrf

                <input type="hidden" name="getid" value="{{ $tampil->id_resep }}">
                <input type="submit" class="btn btn-info"  name="submit" value="Bookmark">

            </form>
            <h2>Komentar</h2>
            @foreach ($tampil->komentar as $tampilKomentar)
            <div class="rows"></div>

            <div class="container">
            <div class="row">
                <div class="col-sm">
                <p>{{ $tampilKomentar->komentar }}</p>
                            </div>
                <div class="col-sm">
                <a href="{{ route('komentar.delete',$tampilKomentar->id_komentar) }}"type="button" class="btn btn-danger">Delete</a>
                </div>
                
            </div>
            </div>
           
            @endforeach
       
            <div class="modal" id="myModal-{{ $tampil->id_resep }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tambahkan Komentar</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form action="/komentar/create" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Komentar</label>
                                                        <input class="form-control" name="komentar" id="komentar" rows="4"></input>
                                                        <input name="id_resep" type="hidden" value="{{$tampil->id_resep}}" disp>
                                                    </div>
                                                    <button type="submit" id="btnSave" class="btn btn-primary ">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        </article>

        <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script> 
    @endforeach

@endsection