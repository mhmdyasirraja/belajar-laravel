@extends('layout.app')

@section('content')

<h1>Tentang Saya</h1>

<div class="card">
    <p><b>Nama:</b> {{$nama}}</p>
    <p><b>Kampus:</b> {{$kampus}}</p>
    <p><b>Jurusan:</b> {{$jurusan}}</p>
</div>

@endsection