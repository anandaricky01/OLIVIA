@extends('layouts/layoutMain')

@section('container')
    <!-- jumbotrom -->
    <div class="jumbotron">
        <div class="container py-4">
          <div class="row align-items-md-stretch">
            <div class="col-md-7 konten">
              <div class="p-5 text-dark rounded-3">
                <h2>Change the background</h2>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit nostrum itaque deserunt quod deleniti nesciunt vel numquam minus architecto dolorum omnis aut, exercitationem earum tempora facilis distinctio adipisci optio
                  consequatur?
                </p>
                <form action="">
                    <div class="d-flex flex-row bd-highlight mb-3">
                    <button type="submit" class="btn text-white" type="button">Yuk Mulai</button>
                    <div class="ms-3">
                    <div class="input-group">
                        <input
                                type="text"
                                class="form-control search-input float-left"
                                style="border-radius: 30px 0px 0px 30px; height: 43px; border-right: none;font-family: 'Nunito', sans-serif;"
                                placeholder="  Cari tahu disini..."
                                aria-label="Cari tahu disini"
                                aria-describedby="basic-addon1"
                                name="cari"
                        />
                        <button type="submit" class="input-group-text" style="border-radius: 0px 30px 30px 0px; background-color: white; border-left: none; color: rgb(163, 162, 162)" id="basic-addon1"><i class="fas fa-search"></i></button>
                    </div>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir jumbrotron -->
      <!-- info panel -->
      <section class="container" id="data-statistik">
        <div class="row info-panel">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 counter-up">
            <div class="content">
              <div class="box">
                <div class="icon">Bergabung</div>
                <div class="counter">724</div>
                <div class="text">Pengguna</div>
              </div>
              <div class="box">
                <div class="icon">Sampah Diantar</div>
                <div class="counter">508</div>
                <div class="text">Kilogram</div>
              </div>
              <div class="box batas">
                <div class="icon">Tenaga Kerja</div>
                <div class="counter">436</div>
                <div class="text">Orang</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 testimoni">
            <section class="container-fluid text-white">
              <div class="row slider">
                <div class="col-12 d-flex mt-5 align-items-center">
                  <div class="avatar">
                    <img src="/img/avatar1.png" style="margin-right: 20px;" />
                  </div>
                  <div>
                    <h4>Testimoni</h4>
                    <p><strong>"</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsam autem non fugit expedita sequi odit magnam voluptate deserunt est?<strong>"</strong></p>
                    <h5>Robert Donkey</h5>
                  </div>
                </div>
                <div class="col-md-12 d-flex mt-5 align-items-center">
                  <div class="avatar">
                    <img src="/img/avatar1.png" style="margin-right: 20px;" />
                  </div>
                  <div>
                    <h4>Testimoni</h4>
                    <p>
                      <strong>"</strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis placeat libero iusto dolorem eius
                      eveniet hic quasi neque quaerat ut minus praesentium tempora illo magnam qui reprehenderit!<strong>"</strong>
                    </p>
                    <h5>Siti</h5>
                  </div>
                </div>
                <div class="col-md-5 d-flex mt-5 align-items-center">
                  <div class="avatar">
                    <img src="/img/avatar1.png" style="margin-right: 20px;" />
                  </div>
                  <div>
                    <h4>Testimoni</h4>
                    <p><strong>"</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsam autem non fugit expedita sequi odit magnam voluptate deserunt est?<strong>"</strong></p>
                    <h5>Budi</h5>
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
        <a class="mt-sm-4 mt-md-4 text-center" style="text-decoration: none"><i class="fas fa-dot-circle me-2" style="color: #00b3bc;"></i>Bagaimana kami bergerak</a>
        <h1 class="mt-3">Kenalin, SAGA.<br />Si pembawa perubahan</h1>
        <a href="/about"><button class="btn text-light">Tentang SAGA</button></a>
      </div>
      <!-- akhir tentang saga -->
  
      <!-- Layanan card -->
      <section id="layanan">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
              <div class="card shadow" style="background-color: #cef2eb">
                <img src="/img/card-1.png" class="card-img-top" alt="" />
                <div class="card-body">
                  <h2>Setor</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn text-light">Gabung</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card shadow">
                <img src="/img/card-2.png" class="card-img-top" alt="" />
                <div class="card-body">
                  <h2>Kurir</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn text-light">Gabung</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card shadow" style="background-color: #cef2eb">
                <img src="/img/card-3.png" class="card-img-top" alt="" />
                <div class="card-body">
                  <h2>kolega</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn text-light">Gabung</a>
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
                <div class="col pb-3">
                  <img src="/img/avatar1.png" style="float: left" alt="Bumi" />
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, esse!</p>
                </div>
                <div class="col">
                  <img src="/img/avatar1.png" style="float: left" alt="Bumi" />
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, esse!</p>
                </div>
                <div class="col">
                  <img src="/img/avatar1.png" style="float: left" alt="Bumi" />
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, esse!</p>
                </div>
                <div class="col">
                  <img src="/img/avatar1.png" style="float: left" alt="Bumi" />
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, esse!</p>
                </div>
              </div>
            </div>
            <div class="col-sm keterangan">
              <a class="pb-1 mt-5 mt-sm-4 mt-md-4" style="text-decoration: none"><i class="fas fa-dot-circle me-2" style="color: #00b3bc;"></i>Bagaimana kami bergerak</a>
              <h1 class="mt-3">Ikuti perjalanan kami dalam membuat dampak sosial!</h1>
              <p>Dengan bergabung bersama kami, kalian...</p>
              <a href="#" style="text-decoration: none">Kunjungi ></a>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir perubahan -->
      <!-- second CTA -->
      <div class="container" id="second-cta">
        <div class="row">
          <div class="col-sm-9">
            <h1>Yuk mulai langkah <br />baikmu bersama SAGA!</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum quam libero iusto facilis minus saepe.</p>
          </div>
          <div class="col-sm-3 mt-4">
            <button class="btn text-white">Yuk mulai</button>
          </div>
        </div>
      </div>
      <!-- akhir second CTA -->
  
      <!-- form -->
      <section id="form">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <img src="/img/form.jpg" class="img-fluid" alt="" />
            </div>
            <div class="col mt-3">
              <a style="text-decoration: none"><i class="fas fa-dot-circle me-2" style="color: #00b3bc;"></i>Bagaimana kami bergerak</a>
              <h1 class="mt-3">Lorem ipsum dolor sit amet.</h1>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis komentarmu disini"></textarea>
              </div>
              <button class="btn text-white">Submit</button>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir form -->
@endsection