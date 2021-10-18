@extends('dashboard/layouts/layoutMain')

@section('container')
    

      <!-- dashboard -->
      <section id="dashboard">
        <div class="title d-flex justify-content-center">
          <img src="img/hands.png" class="img-fluid" alt="hands">
          <h2 class="mt-3 text-center">Hi, this is yourdashboard!</h2>
        </div>
        <div class="container">
          <div class="row justify-content-evenly">
            <div class="col-11 col-sm-11 col-md-5 col-lg-5 kiri" data-aos="fade-right">
              <div class="d-flex avatar-edit justify-content-between"> 
                <img src="/img/beranda/avatar1.png" class="img-fluid" alt="" style="border: 5px solid #00b3bc; border-radius: 50%;">
                <!-- Button trigger modal -->
                  <button type="button" class="btn2 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  <i class="fas fa-pen me-3"></i>Edit profil
                  </button>

                <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Edit Profil</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="/dashboard/ubahData" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="alamat" class="form-label">Alamat</label>
                              <input type="alamat" class="form-control" id="alamat" value="{{ auth()->user()->alamat }}" name="alamat">
                            </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" name="email">
                            </div>
                            <div class="mb-3">
                              <label for="username" class="form-label">Nama</label>
                              <input type="username" class="form-control" id="username" value="{{ auth()->user()->name }}" name="name">
                            </div>
                            <div class="mb-3">
                              <label for="nomorhp" class="form-label">No. HP</label>
                              <input type="nomorhp" class="form-control" id="nomorhp" value="{{ auth()->user()->no_hp }}" name="no_hp">
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
                <h4 class="mt-4" style="color: #00b3bc;">{{ auth()->user()->name }}</h4>
                <p>{{ auth()->user()->alamat == null ? '[isi alamat kamu]' : auth()->user()->alamat }}</p>
                <p>{{ auth()->user()->email }}</p>
                <p>{{ auth()->user()->no_hp == null ? '[isi nomor hape]' : auth()->user()->no_hp}}</p>
                </div>
            <div class="col-11 col-sm-11 col-md-5 col-lg-5 kanan mt-3 mt-sm-3 mt-md-0 mt-lg-0" data-aos="fade-left">
              <div class="poin d-flex justify-content-between">
                <div class="text" style="color: #00b3bc;">
                  <h5>Poinmu saat ini</h5>
                  <p>Lorem ipsum, dolor sit amet.</p>
                </div>
                <div class="poinmu text-center">
                  <p style="color: #00b3bc; margin-bottom: 8px;">Poin</p>
                  <h3>{{ auth()->user()->poin->poin }}<i class="fas fa-coins text-warning ms-2"></i></h3>
                </div>
              </div>
              <div class="vocer d-flex justify-content-between">
                <div class="text">
                  <h5>Riwayat Voucher</h5>
                  <p>Lorem ipsum, dolor sit amet.</p>
                  <button class="btn text-light mt-4"><a href="/dashboard/riwayat-kupon" style="color: #fff; text-decoration: none;">Cek disini</a></button>
                </div>
                <img src="/img/vocer.png" class="img-fluid" alt="voucher">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir dashboard -->
      
      <!-- bagian 2 -->
      <section id="bagian-2">
          <div class="container">
            <div class="header text-center mx-auto">
                <a class="mt-sm-4 mt-md-4 text-center" style="text-decoration: none"><i class="fas fa-dot-circle me-2" style="color: #00b3bc;"></i>Bagaimana kami bergerak</a>
                <h2 class="mt-3">Yuk, kirimkan sampah dan ambil rewardmu!</h2>
            </div>
          </div>
      </section>
      <!-- akhir bagian 2 -->

      <!-- klaim vocer -->
      <section id="klaim-vocer" class="mt-4">
        <div class="container">
        <form action="/dashboard/claimVoucher" method="POST">
          @csrf
          <div class="row align-items-center justify-content-around">
            <div class="col-11 col-sm-11 col-md-5 col-lg-5 card-klaim" data-aos="fade-down-right">
              <div class="header row justify-content-around">
                <h4 class="col-8">{{ $kupon[0]->name }}</h4>
                <div class="col-4 medali">
                  <img src="/img/kupon-aktif.png" class="img-fluid" alt="">
                  <div class="poin">
                    <p>Poin</p>
                    <h4 style="color: #00b43c;">{{ auth()->user()->poin->poin }}</h4>
                  </div>
                </div>
              </div>
              <input type="hidden" value="{{ auth()->user()->poin->poin }}" name="poin">
              <input type="hidden" name="poinKupon" id="" value="{{ $kupon[0]->poin }}">
              <input type="hidden" name="kuponId" id="" value="{{ $kupon[0]->id }}">
              <div class="progress mt-4">
                <div class="progress-bar" role="progressbar" style="width: {{ auth()->user()->poin->poin >= 100 ? '100' : auth()->user()->poin->poin }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress-info d-flex justify-content-between mt-2">
                <p>{{ auth()->user()->poin->poin }}/100</p>
                @if (auth()->user()->poin->poin >= 100)
                  <p style="color: #00b3bc;">Mantab!</p>
                @endif
              </div>
              <button class="btn text-light" type="submit">Klaim</button>
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5">
              <img src="/img/karduser.png" class="img-fluid" alt="">
            </div>
          </div>
        </form>
        </div>
      </section>

      <!-- akhir klaim vocer -->
      
       <!-- call to action -->
       <section id="cta">
        <div class="container">
          <div class="header text-center mx-auto">
              <a class="mt-sm-4 mt-md-4 text-center" style="text-decoration: none"><i class="fas fa-dot-circle me-2" style="color: #00b3bc;"></i>Bagaimana kami bergerak</a>
              <h2 class="mt-3">Klaim voucher dan tukarkan sekarang!</h2>
              <button class="btn text-light mt-3"><a href="kolega.html" style="color: #fff; text-decoration: none;">Kunjungi toko</a></button>
          </div>
        </div>
      </section>
      @endsection