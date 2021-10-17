@extends('layouts/layoutMain')

@section('container')
<!-- accordion -->
<div class="container isi">
  <div class="row">
      <div class="col-md-6">
          <img src="/img/faq.jpg" class="img-fluid" alt="">
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
                  1. Bagaimana cara agar kita bisa menikmati layanan  SAGA?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  Untuk dapat menikmati layanan SAGA, silahkan mengunjungi
                  <a href="#staticBackdrop" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    syarat dan ketentuan
                  </a>

                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur fugit, ea provident molestiae dolores tenetur est et exercitationem nemo earum. Nostrum, id! Aspernatur pariatur facilis quidem cupiditate vero soluta dolorem tenetur expedita quas. Quos, accusantium eum, dolor provident excepturi corrupti magnam maxime ea sed assumenda et cum! Repellendus blanditiis suscipit fugiat molestiae consectetur tenetur, culpa reiciendis distinctio provident tempora mollitia enim, aperiam, sed adipisci impedit soluta sunt natus nam illum voluptatem. Non nisi quas architecto, autem eius deserunt voluptas aliquam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                  2. Apakah kita harus mendaftar terlebih dahulu untuk dapat menikmati layanan dari SAGA?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  Untuk dapat menikmati layanan dari SAGA, maka kita harus mendaftar terlebih dahulu. Pada halaman pendaftaran akan tersedia tiga pilihan  yaitu sebagai penyetor, kurir, atau kolega. Nah, disini kita bisa memilih ingin mendaftar sebagai apa dan pastikan sesuai dengan kebutuhan kita. <br><a href="daftar.html">Pelajari lebih lanjut</a>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                  3. Siapa saja yang bisa menjadi bagian dari SAGA?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                  Kita semua bisa menjadi bagian dari SAGA, namun harus memenuhi syarat dan ketentuan yang berlaku.Untuk mengetahui syarat dan ketentuan, bisa mengunjungi 
                  <a href="#staticBackdrop" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    syarat dan ketentuan
                  </a>

                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur fugit, ea provident molestiae dolores tenetur est et exercitationem nemo earum. Nostrum, id! Aspernatur pariatur facilis quidem cupiditate vero soluta dolorem tenetur expedita quas. Quos, accusantium eum, dolor provident excepturi corrupti magnam maxime ea sed assumenda et cum! Repellendus blanditiis suscipit fugiat molestiae consectetur tenetur, culpa reiciendis distinctio provident tempora mollitia enim, aperiam, sed adipisci impedit soluta sunt natus nam illum voluptatem. Non nisi quas architecto, autem eius deserunt voluptas aliquam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                  4. Jika jarak tempuh dari rumah kurang dari 3 Km, apakah harus tetap menggunakan jasa kurir?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                <div class="accordion-body">
                  Kami menyediakan layanan kurir bertujuan untuk menekan angka kenaikan Covid-19. Selain itu, seluruh proses layanan juga dilakukan secara online. Sehingga diharapkan SAGA dapat mengatasi permasalahan dimasa pandemi ini.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                  5. Bagaimana cara mendapatkan SAGA poin dan cara menukarkannya?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                <div class="accordion-body">
                  SAGA poin adalah reward yang kami berikan dari setiap aksi yang telah dilakukan oleh pangguna layanan SAGA. Untuk mengetahui cara mendapatkan SAGA poin dan penukarannya, silahkan mengunjungi
                  <a href="#staticBackdrop" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    *dapat dan tukar poin
                  </a>

                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur fugit, ea provident molestiae dolores tenetur est et exercitationem nemo earum. Nostrum, id! Aspernatur pariatur facilis quidem cupiditate vero soluta dolorem tenetur expedita quas. Quos, accusantium eum, dolor provident excepturi corrupti magnam maxime ea sed assumenda et cum! Repellendus blanditiis suscipit fugiat molestiae consectetur tenetur, culpa reiciendis distinctio provident tempora mollitia enim, aperiam, sed adipisci impedit soluta sunt natus nam illum voluptatem. Non nisi quas architecto, autem eius deserunt voluptas aliquam.
                        </div>
                      </div>
                    </div>
                  </div>
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
    <p class="text-center mb-5">Apabila kamu tidak menemukan tanya jawab yang kamu inginkan. <br> Bisa menghubungi kontak kami.</p>
  <div class="row justify-content-center mb-5">
  <div class="col-md-2 col-10 col-sm-6 me-md-3 email shadow">
    <i class="fas fa-envelope-open-text icon"></i>
    <p>Pesan Email</p>
    <a class="btn text-white" href="masuk.html" tabindex="-1" aria-disabled="true">Hubungi Kami</a>
  </div>
  <div class="col-md-2 col-10 col-sm-6 ms-md-3 email shadow">
    <i class="fab fa-whatsapp icon"></i>
    <p>Pesan WhatsApp</p>
    <a class="btn text-white" href="masuk.html" tabindex="-1" aria-disabled="true">Hubungi Kami</a>
  </div>
</div>
  </div>
</div>

</div>
</section>
<!-- akhir lanjut WA -->
  @endsection