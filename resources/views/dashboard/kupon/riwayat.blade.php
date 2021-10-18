@extends('dashboard/layouts/layoutMain')

@section('container')
    
<!-- konten -->
      <section class="konten">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-11 text-center profil mx-auto">
            <div class="d-flex avatar">
              <img src="/img/beranda/avatar1.png" alt="" style="border: 5px solid #00b3bc; border-radius: 50%; margin: 0 auto;">
            </div>
            <h5 class="mt-4" style="color: #00b3bc;">{{ auth()->user()->name }}</h5>
            <h3>{{ auth()->user()->poin->poin }}<i class="fas fa-coins text-warning ms-2 mt-2"></i></h3>
            <a class="btn text-white mt-2" href="/dashboard">Dashboard</a>
          </div>
          <div class="col-lg-7 tabel ms-auto">
            <h2 class="text-center mt-5">Riwayat Voucher</h2>
            <div class="header d-flex justify-content-around align-items-center text-center">
              <p>Nilai Kupon</p>
              <p>Tanggal klaim</p>
              <p>Status voucher</p>
            </div>
            <div class="tabel-kupon">
              @foreach ($kupon as $kpn)
              <button type="button" class="kupon-aktif d-flex justify-content-around align-items-center">
                <div class="medali d-flex align-items-center">
                  <img src="img/kupon-aktif.png" class="img-fluid" style="width: 50%; height: 50%;" alt="">
                  <h4>{{ $kpn->kupon->poin }}</h4>
                </div>
                <p>{{ $kpn->created_at->diffForHumans() }}</p>
                <p>{{ $kpn->kode }} Belom Digunakan</p>
              </button>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
      <!-- akhir konten -->
@endsection
