@extends('layouts/layoutMain')

@section('container')
    <h1 class="my-5">Halaman {{ $title }}</h1>
    <a href="/artikel" class="btn btn-outline-primary mb-3 me-3">kembali</a>
    
    @if ($artikel->count() > 0)
        
        {{-- artikel --}}
        <div class="border border-1 rounded-2 mb-3">
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-3 p-4">
                @foreach ($artikel as $artikel)
                    <div class="col">
                        <div class="card">
                            <a href="/artikel/{{ $artikel->slug }}"><img src="https://source.unsplash.com/500x400?{{ $artikel->category->name }}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $artikel->title }}</h5>
                                <a href="/user/{{ $artikel->user->username }}" class="text-decoration-none"><p class="card-text">post by : {{ $artikel->user->name }}</p></a>
                                <p class="text-muted"> dibuat pada {{ $artikel->created_at }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    @else 
        <h1 class="display-1 text-center mt-5">Tidak ada artikel terkait</h1>
    @endif
 

@endsection