@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Edit Resep Baru</h1>
      <form method="POST" action="{{ route('update.resep',$data->id_resep) }}">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{$data->name}}">
          <label for="name">Nama Resep</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Author"   value="{{$data->author}}">
          <label for="deskripsi">Pemilik Resep</label>
          @error('author')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="">
          <textarea type="text" name="deskripsi" class="" rows="10" cols="59" id="deskripsi" placeholder="Username" >{{$data->deskripsi}}</textarea>
          <label for="deskripsi">Deskripsi Resep</label>
          @error('deskripsi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
    
        <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Selesai</button>
      </form>
      <!-- <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small> -->
    </main>
  </div>
</div>

@endsection