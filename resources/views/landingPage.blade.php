@extends('layouts/layoutMain')

@section('container')
    <!-- jumbotrom -->
    <div class="jumbotron">
      <div class="container py-4">
        <div class="row align-items-md-stretch">
          <div class="col-md-7 konten">
            <div class="p-5 text-dark rounded-3">
              <h1 class="display-2" style="color: #00b3bc;">SAGA</h1>
              <h2>Sampah Juga Berharga</h2>
              <p>
                SAGA merupakan platform manajemen kelola sampah yang terintegrasi untuk mendukung penerapan gerakan "Sampah Juga Berharga" di daerah Malang Raya 
              </p>
              <div class="d-flex flex-row bd-highlight mb-3">
                <button class="btn text-white" type="button">Yuk Mulai</button>
                <div class="ms-3">
                  <form action="/cari">
                    <div class="input-group">
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
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir jumbrotron -->

    @if (session()->has('terkirim'))
      <!-- Modal -->
        <div class="modal hide fade" id="myModal">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body text-center">
                <img src="/img/beranda/checked.png" alt="checked">
                <h3 style="margin-top: 30px;">Terima Kasih</h3>
                <p class="text-center">Pesanmu sudah terkirim</p>
                <button type="button" class="btn text-white" data-bs-dismiss="modal" style="margin-top: 15px;">Oke</button>
              </div>
            </div>
          </div>
        </div>
      @endif

    <!-- info panel -->
    <section class="container" id="data-statistik">
      <div class="row info-panel" data-aos="fade-up" data-aos-offset="250">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 counter-up">
          <div class="row content">
            <div class="col-12 col-md-4 col-sm-12 col-lg-4 box">
              <div class="icon">Bergabung</div>
              <div class="counter">724</div>
              <div class="text">Pengguna</div>
            </div>
            <div class=" col-12 col-md-4 col-sm-12 col-lg-4 box tengah">
              <div class="icon">Sampah Diantar</div>
              <div class="counter">508</div>
              <div class="text">Kilogram</div>
            </div>
            <div class="col-12 col-md-4 col-sm-12 col-lg-4 box batas">
              <div class="icon">Tenaga Kerja</div>
              <div class="counter">436</div>
              <div class="text">Orang</div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-12 col-sm-12 col-lg-6 testimoni align-items-center mt-4">
          <section class="container-fluid text-white">
            <div class="row slider">
              <div class="col-md-12 d-flex mt-4 align-items-center">
                <div class="avatar">
                  <img src="/img/beranda/avatar1.png" />
                </div>
                <div style="margin-left: 10px;">
                  <h4>Testimoni</h4>
                  <p><strong>"</strong>Selain membantu mengatasi permasalahan lingkungan, SAGA juga telah meningkatkan perekonomian pelaku UMKM seperti saya.<strong>"</strong></p>
                  <h5>Putri Sulistyowati</h5>
                </div>
              </div>
              <div class="col-md-12 d-flex mt-4 align-items-center">
                <div class="avatar">
                  <img src="/img/beranda/avatar2.png"/>
                </div>
                <div style="margin-left: 10px; padding-right: 5px;">
                  <h4>Testimoni</h4>
                  <p>
                    <strong>"</strong>SAGA top banget deh. Saya tidak ragu untuk merekomendasikan web ini kepada kerabat saya. <strong>"</strong>
                  </p>
                  <h5>Sugeng Riyanto</h5>
                </div>
              </div>
              <div class="col-md-12 d-flex mt-4 align-items-center">
                <div class="avatar">
                  <img src="/img/beranda/avatar1.png"/>
                </div>
                <div style="margin-left: 10px;">
                  <h4>Testimoni</h4>
                  <p><strong>"</strong>SAGA sangat berguna untuk mahasiswa seperti saya. Aksesnya mudah serta prosesnya cepat. Sukses terus SAGA<strong>"</strong></p>
                  <h5>Nadhia Atmaja</h5>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
    <!-- akhir info panel -->

    <!-- tentang saga -->
    <div id="kenalin">
      <a href="#" class="mt-sm-4 mt-md-4 text-center" style="text-decoration: none"><i class="fas fa-dot-circle me-2" style="color: #00b3bc;"></i>Bagaimana kami bergerak</a>
      <h1 class="mt-3">Ini loh! SAGA.<br />Solusi mudah kelola sampah</h1>
      <button class="btn text-light">Tentang SAGA</button>
    </div>
    <!-- akhir tentang saga -->

    <!-- Layanan card -->
    <section id="layanan">
      <div class="container">
        <div class="row justify-content-evenly" data-aos="zoom-in-up">
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card shadow" style="background-color: #cef2eb">
              <img src="/img/beranda/card-1.png" class="card-img-top" alt="" />
              <div class="card-body">
                <h2>Sobat SAGA</h2>
                <p class="card-text">Penyetor atau Sobat SAGA adalah bagian dari SAGA yang berperan sebagai pengirim sampah kepada <span style="color: #00b43c;">pihak Kolega</span></p>

              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card shadow">
              <img src="/img/beranda/card-2.png" class="card-img-top" alt="" />
              <div class="card-body">
                <h2>Kurir</h2>
                <p class="card-text">Kurir atau Partner SAGA adalah bagian dari SAGA yang berperan sebagai penghubung antara Sobat SAGA dengan Kolega.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card shadow" style="background-color: #cef2eb">
              <img src="/img/beranda/card-3.png" class="card-img-top" alt="" />
              <div class="card-body">
                <h2>Kolega</h2>
                <p class="card-text">Kolega adalah bagian dari SAGA yang akan menerima, mengolah, dan juga memasarkan sampah yang telah disetorkan oleh <span style="color: #00b43c;">Sobat SAGA</span>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir layanan card -->
    <!-- perubahan -->
    <section id="perubahan">
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-7 fakta">
            <div class="row row-cols-2 pe-md-5">
              <div class="col pb-3 mb-2">
                <img src="/img/beranda/daur.png" style="float: left;margin-right: 25px;" alt="Bumi" />
                <p>Meningkatkan kesadaran dalam pengelolahan sampah dengan mengimplementasikan 3R.</p>
              </div>
              <div class="col pb-3 mb-2">
                <img src="/img/beranda/world.png" style="float: left;margin-right: 25px;" alt="Bumi" />
                <p>Membangun ekonomi hijau dan menciptakan regenerasi sistem alam.</p>
              </div>
              <div class="col pb-3 mb-2">
                <img src="/img/beranda/invest.png" style="float: left;margin-right: 25px;" alt="Bumi" />
                <p>Meningkatkan daya saing dan menciptakan lapangan pekerjaan berbasis ekonomi sirkular.</p>
              </div>
              <div class="col pb-3 mb-2">
                <img src="/img/beranda/masker.png" style="float: left;margin-right: 25px;" alt="Bumi" />
                <p>Membantu mengatasi permasalahan lingkungan di masa pandemi covid-19.</p>
              </div>
            </div>
          </div>
          <div class="col-sm keterangan">
            <a class="pb-1 mt-5 mt-sm-4 mt-md-4" style="text-decoration: none"><i class="fas fa-dot-circle me-2" style="color: #00b3bc;"></i>Bagaimana kami bergerak</a>
            <h2 class="mt-3">Ikuti langkah kami dan menjadi lebih baik bersama SAGA!</h2>
            <p>Bergabung bersama SAGA, dan jadilah bagian dari perubahan baik</p>
            <a href="setor.html" style="text-decoration: none">Kunjungi ></a>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir perubahan -->
    <!-- second CTA -->
    <div class="container text-white" id="second-cta">
      <div class="row align-items-center">
        <div class="col-lg-8 col-sm-12 kiri">
          <h2>Lindungi bumi kita<br />dengan Gerakan Sampah Juga Berharga</h2>
          <p>Gerakan Sampah Juga Berharga adalah suatu gerakan untuk mengajak kalian mengelola sampah dengan tujuan menciptakan kondisi regenerasi alam yang lebih baik.</p>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="yukmulai" style="text-align: center;">
            <img src="/img/beranda/yukmulai.png" class="" alt="yukmulai">
            <button class="btn text-white" style="margin-top: -50px;">Yuk mulai</button>
        </div>
        </div>
      </div>
    </div>
    <!-- akhir second CTA -->
  
    <!-- form -->
    <section id="form">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-right">
            <img src="img/beranda/form.jpg" class="img-fluid" alt="" />
          </div>
          <div class="col mt-3"  data-aos="fade-left">
            <a style="text-decoration: none"><i class="fas fa-dot-circle me-2" style="color: #00b3bc;"></i>Bagaimana kami bergerak</a>
            <h2 class="mt-3">Ada kritik, saran, atau masukan? <br>Yuk kirim sekarang!</h2>
            
            {{-- isi form --}}
            <form action="/beranda" method="POST">
              @csrf
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" name="name" value="{{ old("name") }}" />
                @error('name')    
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="name@gmail.com" name="email" value="{{ old("email") }}"/>
                @error('email')    
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis komentarmu disini" name="deskripsi"></textarea>
                @error('deskripsi')    
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Submit</button>
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-body text-center">
                      <img src="img/beranda/checked.png" alt="checked">
                      <h3 style="margin-top: 30px;">Apakah pesanmu sudah benar?</h3>
                      <p class="text-center">Dicheck lagi ya! Siapa tau salah tulis</p>
                      <button type="submit" class="btn text-white" data-bs-dismiss="modal" style="margin-top: 15px;">Oke</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            {{-- akhis isi form --}}

            
          </div>
        </div>
      </div>
    </section>
    <!-- akhir form -->
    
@endsection