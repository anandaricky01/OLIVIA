@extends('layouts/layoutMain')

@section('container')
    <!-- header -->
    <div class="header">
    <div class="container text-center">
        <h1 class="mt-3">Toko Kolega</h1>
        <p>Kunjungi toko kolega untuk....</p>
        <form action="/layanan/kolega">
            <div class="input-group">
                @if (request('jenis_sampah'))
                    <input type="hidden" name="jenis_sampah" value="{{ request('jenis_sampah') }}">
                @endif
                @if (request('nama_kolega'))
                    <input type="hidden" name="nama_kolega" value="{{ request('nama_kolega') }}">
                @endif
                <input
                    type="text"
                    class="form-control search-input float-left shadow-sm"
                    style="border-radius: 30px 0px 0px 30px; height: 43px; border-right: none;font-family: 'Nunito', sans-serif;"
                    placeholder="  Cari tahu disini..."
                    aria-label="Cari tahu disini"
                    aria-describedby="basic-addon1"
                    name="search"
                />
                <button type="submit" class="input-group-text shadow-sm" style="border-radius: 0px 30px 30px 0px; background-color: white; border-left: none; color: rgb(163, 162, 162)" id="basic-addon1"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
    </div>
    <!-- akhir header -->

    <!-- kategori -->
    <div class="container kategori">
    <div class="row justify-content-around text-center flex-wrap">
        @foreach ($jenis as $jen)
            <a href="/layanan/kolega?jenis_sampah={{ $jen->slug }}" class="col-2 btn btn2 shadow text-center">
                <img src="/img/kolega/{{ $jen->gambar }}" style="height: 60%; margin-bottom: 6px" class="img-fluid" alt="kardus">
                <p style="font-size: 12px;">{{ $jen->jenis_sampah }}</p>
            </a>
        @endforeach
    </div>
    </div>
    <!-- akhir kategori -->

    <!-- toko -->
    <section class="toko">
    <div class="container">
        <div class="row d-flex justify-content-evenly">
        @foreach ($kolega as $kol)
            <button class="col-lg-3 col-md-5 col-sm-12 col-11 mt-sm-4 mt-4 bg-white shadow ms-lg-2 ms-md-1 ms-sm-1 card">
                <a href="#" class="content-card">
                    <img src="{{ $kol->gambar }}" class="img-fluid mb-4" alt="">
                    <div class="d-flex justify-content-between align-items-center">
                    <h4>Tajinan Shop</h4>
                    <span href="#" style="border-radius: 4px; background-color: #B7F4F1; padding: 0 10px;height: max-content; width: max-content;">{{ $kol->jenis_sampah->jenis_sampah }}</span>
                    </div>
                    <p>{{ Str::limit(strip_tags($kol->alamat), 30, '...') }}</p>
                    <p class="keterangan-toko" style="font-size: 13px;">{{ Str::limit(strip_tags($kol->deskripsi), 40, '...') }}</p>
                    <h6><i class="fab fa-instagram" style="margin-right: 6px;"></i>{{ $kol->sosial_media }}</h6>
                </a>
            </button>
        @endforeach
    </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $kolega->links() }}
        </div>
    </section>
    <!-- akhit toko -->

    <!-- yuk setor -->
    <section class="yuk">
    <div class="container">
        <div class="row align-content-md-center justify-content-center">
        <div class="col-md-5 mt-md-5">
            <h3>Dapatkan voucher spesial untuk diskon belanja</h3>
            <p>Kumpulkan poinmu dan klaim vouchernya!</p>
            <button class="btn text-white mt-md-5"><a href="setor.html" style="text-decoration: none; color: #fff;">Setor Sekarang</a></button>
        </div>
        <div class="col-md-5">
            <img src="/img/kolega/yuk-setor.png" alt="vektor-kolega" class="img-fluid">
        </div>
        </div>
    </div>
    </section>
    <!-- akhir yuk setor -->
    
@endsection

