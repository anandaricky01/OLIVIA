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
                @if ($kpn->status->id == 1)
                  <button type="button" class="kupon-aktif d-flex justify-content-around align-items-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $loop->iteration }}">
                    <div class="medali d-flex align-items-center">
                      <img src="/img/kupon-aktif.png" class="img-fluid" style="width: 50%; height: 50%;" alt="">
                      <h4>{{ $kpn->kupon->poin }}</h4>
                    </div>
                    <p>{{ $kpn->created_at->diffForHumans() }}</p>
                    <p>{{ $kpn->status->status }}</p>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop{{ $loop->iteration }}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content mx-auto" style="background-color: #00b3bc; justify-content: center; width: max-content;padding: 40px 20px;">
                        <div class="modal-header" style="border-bottom: none;">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                          <div class="container" style="background-color: #fff; width: max-content; padding: 60px; border-radius: 30px;">
                            <h4 style="margin-top: 30px;border-bottom: 2px solid #00b3bc;">Hi Sobat Saga, <br> ini pointmu!</h4>
                            <h1 class="display-3" style="margin-top: 30px;margin-bottom: 20px; color: #00b3bc;"><i class="fas fa-coins text-warning me-2"></i>100</h1>
                            <p>Kode Unik</p>
                            <h2 style="color: #00b3bc;">{{ $kpn->kode }}</h2>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @else 
                  <button type="button" class="kupon-nonaktif d-flex justify-content-around align-items-center disabled">
                    <div class="medali d-flex align-items-center">
                      <img src="/img/kupon-nonaktif.png" class="img-fluid" style="width: 50%; height: 50%;" alt="">
                      <h4>{{ $kpn->kupon->poin }}</h4>
                    </div>
                    <p>{{ $kpn->created_at->diffForHumans() }}</p>
                    <p>{{ $kpn->status->status }}</p>
                  </button>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
      <!-- akhir konten -->
@endsection
