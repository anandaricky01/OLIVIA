@extends('layouts/layoutMain')

@section('container')
<!-- accordion -->
<div class="container isi">
  <div class="row">
      <div class="col-md-6" data-aos="fade-right">
          <img src="/img/faq/faq.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-md-6">
        <div class="header">
          <a class="mt-sm-4 mt-md-4 text-center" style="text-decoration: none"><i class="fas fa-dot-circle me-2" style="color: #00b3bc;"></i>Bagaimana kami bergerak</a>
          <h3 class="display-4" style="font-weight: 600; margin-bottom: 30px; margin-top: 20px;">Isu paling dicari</h3>
        </div>
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                1. Bagaimana cara agar kita bisa menikmati layanan SAGA?
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
                Untuk dapat menikmati layanan dari SAGA, maka kita harus mendaftar terlebih dahulu. Disini kita dapat mendaftar sebagai salah satu dari tiga bagian SAGA, yaitu SOBAT SAGA (penyetor), KURIR, atau KOLEGA. Nah, pastikan kalian mendaftar sesuai dengan kebutuhan kalian ya!
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                2. Siapa saja yang bisa menjadi bagian dari SAGA?
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                Kita semua bisa menjadi bagian dari SAGA, baik sebagai  SOBAT SAGA (penyetor), KURIR, ataupun KOLEGA. Namun tentunya harus memenuhi syarat dan ketentuan yang berlaku. Untuk mengetahui tiga bagian SAGA beserta dengan syarat dan ketentuannya, <a href="index.html"> silahkan kunjungi tautan berikut </a>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                3. Apa itu SAGA Poin?
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
              <div class="accordion-body">
                SAGA Poin adalah reward yang kami berikan dari aksi yang telah dilakukan oleh pengguna layanan SAGA. Untuk mendapatkan SAGA Poin kita harus terdaftar sebagai SOBAT SAGA dan meyetorkan sampah terlebih dahulu. Jumlah poin yang didapatkan tergantung dengan jenis dan berat dari sampah yang disetorkan. Poin yang telah terkumpul nantinya dapat ditukarkan dengan voucher diskon belanja pada toko KOLEGA.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                4. Apakah harus menggunakan jasa kurir saat menyetorkan sampah?
              </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
              <div class="accordion-body">
                Untuk menyetorkan sampah dari SOBAT SAGA kepada KOLEGA adalah melalui perantara KURIR. SAGA menyediakan layanan kurir bertujuan untuk menekan angka kenaikan kasus covid-19. Selain itu, seluruh proses layanan juga dilakukan secara online. Sehingga diharapkan SAGA dapat mengatasi permasalahan dimasa pandemi ini.
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<!-- akhir accordion -->

<!-- lanjut WA -->
<section class="cta">
<div class="hubungi container">
<div class="row">
  <div class="col-12 col-sm-12">
    <h1 class="text-center">Pertanyaanmu masih <br> belum terjawab?</h1>
    <p class="text-center">Apabila kamu tidak menemukan tanya jawab yang kamu inginkan. <br> Bisa menghubungi kontak kami.</p>
  <div class="row justify-content-center mb-1" data-aos="zoom-in-down">
  <div class="col-md-4 col-10 col-sm-6 col-lg-3 email shadow">
    <i class="fas fa-envelope-open-text icon"></i>
    <p>Pesan Email</p>
    <a class="btn text-white" href="#wa" tabindex="-1" aria-disabled="true">Hubungi Kami</a>
  </div>
  <div class="col-md-4 col-10 col-sm-6 col-lg-3 email shadow">
    <i class="fab fa-whatsapp icon"></i>
    <p>Pesan WhatsApp</p>
    <a class="btn text-white" href="#email" tabindex="-1" aria-disabled="true">Hubungi Kami</a>
  </div>
</div>
  </div>
</div>

</div>
</section>
<!-- akhir lanjut WA -->
  @endsection