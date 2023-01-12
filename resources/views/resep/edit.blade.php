@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
        <h1 class="h3 mb-3 fw-normal text-center">Edit Resep Makanan {{$data->name}}</h1>

            <form class="row g-3" method="POST" action="{{ route('update.resep',$data->id_resep) }}">
            @csrf

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Nama Resep</label>
                    <input type="text" class="form-control"   name="name" id="name" value="{{$data->name}}">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control"  name="author" id="inputAddress2"
                       value="{{$data->author}}">
                </div>
                <div class="col-12">
                <label for="inputAddress" class="form-label">Tipe Makanan</label>

                <select class="form-control" name="tipe_makanan" id="category">
                            <option hidden>{{$data->tipe_makanan}}</option>
                           
                            <option value="Dessert">Dessert</option>
                            <option value="Makanan Basah">Makanan Basah</option>
                            <option value="Makanan Basah">Makanan Kucing</option>
                            <option value="Makanan Basah">Makanan Hewan</option>
                        </select>
                </div>
               
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Deskripsi Makanan</label>
                    <textarea type="text" name="deskripsi" class="" rows="10" cols="59" id="deskripsi"
                        placeholder="Username">{{$data->deskripsi}}</textarea>
                </div>
               
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
            <!-- <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small> -->
        </main>
    </div>
</div>

@endsection