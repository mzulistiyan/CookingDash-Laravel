@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Masukkan Resep Baru</h1>
      <form action="/resep/create" method="post"> 
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name">Nama Resep</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Author" required value="{{ old('author') }}">
          <label for="deskripsi">Pemilik Resep</label>
          @error('author')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Username" required value="{{ old('deskripsi') }}">
          <label for="deskripsi">Deskripsi Resep</label>
          @error('deskripsi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="tipe_makanan" class="form-control @error('deskripsi') is-invalid @enderror" id="tipe_makanan" placeholder="Username" required value="{{ old('tipe_makanan') }}">
          <label for="deskripsi">Tipe Menu Resep</label>
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