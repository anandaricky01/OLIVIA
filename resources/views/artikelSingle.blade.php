@extends('layouts/layoutMain')

@section('container')
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-2">{{ $title }}</h1>
                <p class="text-muted">post by : {{ $artikel->user->name }} {{ $artikel->created_at->diffForHumans() }}</p>
                <img src="https://source.unsplash.com/1200x400?{{ $artikel->category->name }}" class="img-fluid mb-4" alt="{{ $artikel->category->name }}">
                <p>{!! $artikel->body !!}</p>
                <a href="/artikel" class="mb-5 pb-5">Kembali</a>
            </div>
        </div>
    </div>
@endsection