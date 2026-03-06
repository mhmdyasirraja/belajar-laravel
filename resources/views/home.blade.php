@extends('layout.app')

@section('content')

<h1>Selamat Datang di Website Saya</h1>

<p>Nama saya {{$nama}}</p>
<p>Saya seorang {{$pekerjaan}}</p>

<a class="btn" href="/contact">Hubungi Saya</a>

@endsection