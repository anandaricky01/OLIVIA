@extends('layouts/layoutMain')

@section('container')
    <!-- header -->
    <div class="header">
        <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-8 col-md-6 col-12 mt-5">
              <a class="text-center" style="text-decoration: none;"><i class="fas fa-dot-circle me-2" style="color: #00b3bc;"></i>Bagaimana kami bergerak</a>
              <h2 class="display-4 mt-3">Hi <span style="color: #00b3bc;">SAGA Troops</span><br>Baca Artikel Yuk!</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, praesentium hic consequatur error culpa repellendus.</p>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-5 text-center">
                <img src="/img/artikel1/reading.png" class="img-fluid" data-aos="fade-left" alt="reading">
            </div>
        </div>
      </div>
    </div>
    <!-- akhir header -->

    

    <!-- quotes -->
    <div class="quotes">
        <!-- <h3 class="display-6 text-center">"Quotes"</h3> -->
        <h3 class="display-6 text-center">#LiterasiBersama<span style="color: #00b3bc;">SAGA</span></h3>
    </div>
<!-- akhir quotes -->

<!-- highlight -->
@if ($artikel->count() > 0)
    <div class="highlight shadow mx-auto"  data-aos="zoom-in-down">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 text-center me-0">
                    <img src="https://source.unsplash.com/random/400x300" class="img-fluid"  alt="beritaPict">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                <p class="tanggal">{{ $artikel[0]->created_at->diffForHumans() }}</p>
                <h2>{{ $artikel[0]->title }}</h2>
                <p>{!! Str::limit(strip_tags($artikel[0]->body), 350) !!}</p>
                <a href="/artikel/{{ $artikel[0]->slug }}" style="text-decoration: none;color: #00b3bc;">Baca Selengkapnya...</a>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- akhir highlight -->

<!-- kenalin -->
<div class="container">
    <div class="kenalin text-center">
      <a class="mt-sm-4 mt-md-4 text-center" style="text-decoration: none"><i class="fas fa-dot-circle me-2" style="color: #00b3bc;"></i>Bagaimana kami bergerak</a>
      <h1 class="mt-3">Ini loh! SAGA.</h1>
      <form action="/artikel">
        <div class="input-group">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">
            @endif
            <input
            type="text"
            class="form-control search-input float-left shadow-sm"
            style="border-radius: 30px 0px 0px 30px; height: 43px; border-right: none;font-family: 'Nunito', sans-serif;"
            placeholder="  Cari tahu disini..."
            aria-label="Cari tahu disini"
            aria-describedby="basic-addon1" name="search" value="{{ request('search') }}"
            />
            <button class="input-group-text shadow-sm" style="border-radius: 0px 30px 30px 0px; background-color: white; border-left: none; color: rgb(163, 162, 162)" id="basic-addon1"><i class="fas fa-search"></i></button>
        </div>
    </form>
    </div>
  </div>
  <!-- akhir kenalin -->
        

    {{-- list category --}}
    <div class="container kategori">
        <div class="row justify-content-center d-flex flex-wrap">
        @foreach ($listCategory as $art)
            <div class="col-lg-2 col-md-3 col-sm-4 col-4 flex-wrap">
                <a href="/artikel?category={{ $art->slug }}" class="btn btn2" style="width: 80%;">{{ $art->name }}</a>
            </div>
        @endforeach
        </div>
    </div>

    @if ($artikel->count() > 0)
    <section class="artikel-lain">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row justify-content-evenly">
                        @foreach ($artikel->skip(1) as $arr)
                        <div class="col-md-4 col-sm-12 col-11 mt-sm-4 mt-4 bg-white shadow card">
                            <a href="/artikel/{{ $arr->slug }}" class="content-card">
                                <img src="https://source.unsplash.com/random/500x300" class="img-fluid" alt="">
                                <div class="d-flex justify-content-between align-items-center">
                                <p class="tanggal">{{ $arr->created_at->diffForHumans() }}</p>
                                <span href="#" style="border-radius: 4px; background-color: #B7F4F1; padding: 0 10px;height: max-content; width: max-content;">{{ $arr->category->name }}</span>
                                </div>
                                <h3>{{ $arr->title }}</h3>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @else
        <div class="container ops text-center">
            <img src="/img/oops/ops.png" class="img-fluid" alt="Oops">
            <h2 class="mt-5">OOPS!</h2>
            <h5>Artikel Yang Kamu Cari Nggak Ada Nih</h5>
        </div>
    @endif

    <div class="d-flex justify-content-center">
        {{ $artikel->links() }}
    </div>
    </div>
@endsection