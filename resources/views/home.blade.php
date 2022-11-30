@extends('layouts/main')

@section('container')
    <a href="{{route('resep')}}">Input Resep Baru</a>
    <!-- <a href="{{route('resep.tampil')}}" class="nav-link">Tampil</a> -->

    <li class="nav-item">
      @if(Auth::check())
    <li><i class="fa fa-user"></i> {{Auth::user()->name}}:</li>
    <form id="logout-form" action="{{ url('logout') }}" method="POST">
      {{ csrf_field() }}
      <button type="submit">Logout</button>
    </form>
    @else
    <li><a href="{{route('login')}}"><i class="fa fa-user"></i>
        Login
      </a>
    </li>
    @endif
    </li>
@endsection