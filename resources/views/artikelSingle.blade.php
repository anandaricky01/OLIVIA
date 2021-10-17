@extends('layouts/layoutMain')

@section('container')
<section class="konten">
    <div class="container">
        <div class="row">
            <div class="col">
              <div class="header justify-content-center">
                  <div class="kategori justify-content-center">
                      <p class="text-center kategori">{{ $artikel->category->name }}</p>
                  </div>
                  <h3 class="display-4  text-center" style="font-weight: 400;">{{ $artikel->title }}</h3>
                  <div class="gambar">
                      <img src="https://source.unsplash.com/random/1280x720" class="img-fluid" alt="gambar-artikel">
                  </div>
              </div>
              <div class="isi">
                    <p class="sumber">Sumber</p>
                    <p class="tanggal">{{ $artikel->created_at->diffForHumans() }}</p>
                    <p style="text-align: justify; line-height: 30px;">
                        {!! $artikel->body !!}
                    </p>
                    <p>Terima Kasih sudah Membaca</p>
                    <p>Yuk, bagikan artikel dengan klik tombol di bawah ini</p>
                    <div class="bagikan d-flex">
                      <p>Bagikan: </p>
                      <button class="icon text-center shadow"><a href="#"><i class="fab fa-twitter"></i></a></button>
                      <button class="icon text-center shadow"><a href="https://www.instagram.com/sagavokasiub"><i class="fab fa-instagram"></i></a></button>
                    </div>
                  <!-- <div class="unduh">
                      <a class="btn text-white" href="#" tabindex="-1" aria-disabled="true">Download Sekarang<i class="fas fa-download icon"></i></a>
                  </div> -->
              </div>
            </div>
        </div>
    </div>
  </section>
    <!-- akhir konten isi -->

    <!-- artikel lain -->
  <section class="artikel-lain">
      <div class="container">
          <div class="row">
              <div class="col">
                  <h2>Baca Artikel yang lain yuk!</h2>
                  <div class="row justify-content-evenly">
                      <div class="col-md-3 col-sm-12 col-11 mt-sm-4 mt-4 bg-white shadow card">
                          <button class="text-start">
                          <img src="https://source.unsplash.com/random/500x300" class="img-fluid" alt="">
                          <p class="tanggal">{{ $artikelLain[0]->created_at->diffForHumans() }}</p>
                          <a href="/artikel/{{ $artikelLain[0]->slug }}" class="text-decoration-none"><h3>{{ $artikelLain[0]->title }}</h3></a>
                      </button>
                      </div>
                      <div class="col-md-3 col-sm-12 col-11 mt-sm-4 mt-4 bg-white shadow card">
                          <button class="text-start">
                              <img src="https://source.unsplash.com/random/500x300" class="img-fluid" alt="">
                              <p class="tanggal">{{ $artikelLain[1]->created_at->diffForHumans() }}</p>
                            <a href="/artikel/{{ $artikelLain[1]->slug }}" class="text-decoration-none"><h3>{{ $artikelLain[1]->title }}</h3></a>
                          </button>
                      </div>
                      <div class="col-md-3 col-sm-12 col-11 mt-sm-4 mt-4 bg-white shadow card">
                          <button class="text-start"><img src="https://source.unsplash.com/random/500x300" class="img-fluid" alt="">
                            <p class="tanggal">{{ $artikelLain[2]->created_at->diffForHumans() }}</p>
                            <a href="/artikel/{{ $artikelLain[2]->slug }}" class="text-decoration-none"><h3>{{ $artikelLain[2]->title }}</h3></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- akhir artikel lain -->
@endsection