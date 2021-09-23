@extends('layouts.main')

@section('container')
    <h1>about</h1>
    <h3>{{ $nama }}</h3>
    <p>{{ $group }}</p>
    <img src="img/{{ $image }}" alt="{{ $nama }}">
@endsection
