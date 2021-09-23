@extends('layouts/layoutMain')

@section('container')
    <div class="container mt-5 pt-5">
        <h1 class="mb-4 mt-3 text-center">{{ $title }}</h1>
    </div>

    <div class="container mb-2">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/artikel">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('user'))
                        <input type="hidden" name="user" value="{{ request('user') }}">
                    @endif
                    {{-- method default nya get --}}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." aria-label="Recipient's username" aria-describedby="button-addon2" name="search" value="{{ request('search') }}">
                        <button class="btn text-white" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- list category --}}
    <div class="d-flex justify-content-center">
    @foreach ($listCategory as $art)
        <div class="row">
            <div class="col">
                <a href="/artikel?category={{ $art->slug }}" class="btn mb-1 me-3 text-white">+ {{ $art->name }}</a>
            </div>
        </div>
    @endforeach
    </div>

    @if ($artikel->count() > 0)
        <div class="container">
        {{-- artikel terbaru terakhir --}}
        <div class="card mb-3 shadow p-3 mb-5 bg-body rounded mt-3">
            <a href="/artikel/{{ $artikel[0]->slug }}">
                <img src="https://source.unsplash.com/1200x400?{{ $artikel[0]->category->name }}" class="card-img-top" alt="{{ $artikel[0]->category->name }}">
            </a>
            <div class="card-body">
                <h3 class="card-title">{{ $artikel[0]->title }}</h3>
                <p>
                    <small class="text-muted">
                        By : <a href="/artikel?user={{ $artikel[0]->user->username }}" class="text-decoration-none">{{ $artikel[0]->user->name }}</a> in <a href="/artikel?category={{ $artikel[0]->category->slug }}" class="text-decoration-none">{{ $artikel[0]->category->name }}</a> {{ $artikel[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <a href="/artikel?category={{ $artikel[0]->category->slug }}" class="btn mb-1 text-white">+ {{ $artikel[0]->category->name }}</a>
                <p class="card-text">{{ $artikel[0]->excerpt }}</p>
                <a class="btn text-white" href="/artikel/{{ $artikel[0]->slug }}">read more</a>
            </div>
        </div>

        

        {{-- artikel --}}
        <div class="border border-1 rounded-2 mb-3 mt-3">
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-3 p-4">
                @foreach ($artikel->skip(1) as $arr)
                    <div class="col">
                        <div class="card">
                            <a href="/artikel/{{ $arr->slug }}"><img src="https://source.unsplash.com/500x400?{{ $arr->category->name }}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $arr->title }}</h5>
                                <p class="card-text text-muted">post by : <a href="/artikel?user={{ $arr->user->username }}" class="text-decoration-none">{{ $arr->user->name }}</a></p>
                                <p class="text-muted"> created {{ $arr->created_at->diffForHumans() }}</p>
                                <a href="/artikel?category={{ $arr->category->slug }}" class="btn text-white mb-1">+ {{ $arr->category->name }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    @else
        <h1 class="display-1 text-center mt-5 p-5">Tidak ada Artikel!!!!11!</h1>
    @endif

    <div class="d-flex justify-content-center">
        {{ $artikel->links() }}
    </div>
    </div>
@endsection