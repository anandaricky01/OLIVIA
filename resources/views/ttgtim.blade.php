@extends('layouts/layoutMain')

@section('container')
    
    <!-- meetourteem -->
        <section class="meet">
        <div class="container">
        <div class="row meet1">
            <div class="col-lg-3 col-md-4 col-sm-12 text-center">
            <img src="/img/tim/ava1.png" alt="avatar">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
            <h1 class="mt-3">Meetourteem</h1>
            <p>Cerita mitra, berita seru, dan promo terbaru. <br>Baca semua artikel</p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 ava2 text-center">
            <img src="/img/tim/ava2.png" alt="avatar">
            </div>
        </div>
        <div class="row meet2 justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-12 ava3 text-center">
            <img src="/img/tim/ava3.png" alt="avatar">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 ava4 text-center">
            <img src="/img/tim/ava4.png"alt="avatar">
            </div>
        </div>
        </div>
    </section>
        <!-- akhir meetourrteem -->

    <!-- quotes -->
        <div class="quotes">
        <h2 class="text-center">“Datang bersama adalah awal,<br>tetap bersama adalah kemajuan, <br>dan bekerja bersama adalah keseuksesan ”
            <br>-Henry Ford-</h2>
        </div>
    <!-- akhir quotes -->

    <!-- card bio -->
    <div class="container bio">
        <div class="row d-flex justify-content-around">
        <div class="col-lg-3 col-md-4 col-sm-6 col-11 card text-center shadow ms-lg-2 ms-md-1 ms-sm-1" data-aos="zoom-in-up">
            <img src="/img/tim/card-angger.png" alt="angger">
            <h5>Angger Mahardiani P.</h5>
            <p>Project Manager</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-11 card text-center shadow ms-lg-2 ms-md-1 ms-sm-1" data-aos="zoom-in-up">
            <img src="/img/tim/card-sefalo.png" alt="sefalo">
            <h5>Sefalo 'Aadila Faruq</h5>
            <p>Front End (Ketua)</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-11 card text-center shadow ms-lg-2 ms-md-1 ms-sm-1" data-aos="zoom-in-up">
            <img src="/img/tim/card-lala.png" alt="angger">
            <h5>Allif Nurfaizzatul Uula</h5>
            <p>UI/UX Designer</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-11 card text-center shadow ms-lg-2 ms-md-1 ms-sm-1" data-aos="zoom-in-up">
            <img src="/img/tim/card-nju.png" alt="nju">
            <h5>Nurul Choiriyah</h5>
            <p>Copywriting</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-11 card text-center shadow ms-lg-2 ms-md-1 ms-sm-1" data-aos="zoom-in-up">
            <img src="/img/tim/card-ricky.png" alt="ricky">
            <h5>Ananda Ricky Fauzi</h5>
            <p>Back End & Database Engineering</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-11 card text-center shadow ms-lg-2 ms-md-1 ms-sm-1" data-aos="zoom-in-up">
            <img src="/img/tim/card-iel.png" alt="iel">
            <h5>Aurhiel Chatlea Sabrine</h5>
            <p>Copywriting</p>
        </div>
        </div>
    </div>
    <!-- akhir card bio -->

    <!-- Deskripsi -->
    <section class="deskripsi">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item" style="border: 3px solid #00b3bc; border-radius: 20px;">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button text-white collapsed" style="background-color: #00b3bc; border-radius: 20px;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                        Siapakah Kami?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body" style="color: #00b3bc; font-size: 20px;">
                        SAGA merupakan sebuah website  yang dibentuk oleh enam mahasiswa Vokasi Universitas Brawijaya Bidang Minat TIK dan Desain. Sebagai mahasiswa, kami dituntut untuk lebih peka terhadap lingkungan sekitar, terutama pada masa pendemi.
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item mt-5" style="border: 3px solid #00b3bc; border-radius: 20px;">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button text-white collapsed" style="background-color: #00b3bc; border-radius: 20px;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Apa Yang Kami Lakukan?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body" style="color: #00b3bc;font-size: 20px;">
                        Dengan munculnya berbagai permasalahan sebagai dampak dari pandemi, kami terdorong untuk membuat suatu platform yang dapat membantu mengatasi kedua masalah tersebut.
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
    <!-- akhir deskripsi -->

    <!-- latar belakang -->
    <section id="latar-belakang">
        <div class="container">
        <div class="row">
            <div class="col-12 text-center">
            <h3 class="mt-5 fw-bolder">Berbagai Permasalahan</h3>
            <p>Kondisi pandemi seperti ini memunculkan berbagai macam permasalahan</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center text-center mt-3">
            <div class="col-12 col-sm-5 col-md-5 col-lg-5">
            <img src="/img/tim/sampah.png" class="img-fluid" alt="sampah">
            </div>
            <div class="col-12 col-sm-1 col-md-1 col-lg-1 my-lg-auto mt-4 mb-4 my-sm-auto my-md-auto">
            <img src="/img/tim/x.png" class="img-fluid" alt="mix">
            </div>
            <div class="col-12 col-sm-5 col-md-5 col-lg-5">
            <img src="/img/tim/pekerjaan.svg" class="img-fluid" alt="losejob">
            </div>
        </div>
        </div>
    </section>
    <!-- akhir latar belakang -->

    <!-- opini -->
    <section class=" opini">
        <h2 class="text-center">Opini Tim <br>#KarenaItu<span style="color: #00b3bc;">SAGA</span>Hadir</h2>
        <div class="slider row">
            <div class="col-md-12 d-flex mt-4 align-items-center opcard shadow">
            <div class="foto" style="margin-top: -20px;">
                <img src="/img/tim/opn-sefalo.png"/>
            </div>
            <div style="margin-left: 20px;">
                <h4>Sefalo 'Aadila Faruq</h4>
                <p style="opacity: 60%;">Front End</p>
                <p><strong>“</strong>SAGA ini merupakan platform digital yang bergerak di bidang Lingkungan dan ekonomi Yang mana memiliki tujuan real dalam pengelolaan kegunaan sampah di Kota Malang<strong>”</strong></p>
            </div>
            </div>
            <div class="col-md-12 d-flex mt-4 align-items-center opcard shadow">
            <div class="foto" style="margin-top: -20px;">
                <img src="/img/tim/opn-lala.png"/>
            </div>
            <div style="margin-left: 20px;">
                <h4>Allif Nurfaizzatul Uula</h4>
                <p style="opacity: 60%;">UI/UX Designer</p>
                <p><strong>“</strong>Kami hadir sebagai pelopor baru generasi muda untuk menjadi bagian dari sampah juga berharga<strong>”</strong></p>
            </div>
            </div>
            <div class="col-md-12 d-flex mt-4 align-items-center opcard shadow">
            <div class="foto" style="margin-top: -20px;">
                <img src="/img/tim/opn-nju.png"/>
            </div>
            <div style="margin-left: 20px;">
                <h4>Nurul Choiriyah</h4>
                <p style="opacity: 60%;">Copywriting</p>
                <p><strong>“</strong>SAGA ini kece banget sih asli, diawal aku tuh mikir kalo SAGA ini bisa jadi inovasi baru kedepannya. Kapan lagi gitu bisa mengatasi 2 permasalahan atau isu besar dalam satu solusi? Dari SAGA juga aku bisa tau banyak hal, mulai dari cara mengelola sampah paling sederhana (dengan 3R), sampai mengenai ekonomi sirkular yang jarang dibahas oleh masyarakat umum<strong>”</strong></p>
            </div>
            </div>
            <div class="col-md-12 d-flex mt-4 align-items-center opcard shadow">
            <div class="foto" style="margin-top: -20px;">
                <img src="/img/tim/opn-ricky.png"/>
            </div>
            <div style="margin-left: 20px;">
                <h4>Ananda Ricky Fauzi</h4>
                <p style="opacity: 60%;">Back End & Database Engineering</p>
                <p><strong>“</strong>Saga menurut saya sangat inovatif di mana kita bisa mengurangi jumlah sampah daur ulang dan juga mencegah penularan Covid-19 lebih meluas<strong>”</strong></p>
            </div>
            </div>
            <div class="col-md-12 d-flex mt-4 align-items-center opcard shadow">
            <div class="foto" style="margin-top: -20px;">
                <img src="/img/tim/opn-iel.png"/>
            </div>
            <div style="margin-left: 20px;">
                <h4>Aurhiel Chatlea Sabrine</h4>
                <p style="opacity: 60%;">Copywriting</p>
                <p><strong>“</strong>Niat baik maka hasilnya akan baik, semoga dengan adanya SAGA, bumi ini semakin bersih dan kreatif untuk kehidupan di masa depan serta mengurangi pengangguran<strong>”</strong></p>
            </div>
            </div>
            <div class="col-md-12 d-flex mt-4 align-items-center opcard shadow">
            <div class="foto" style="margin-top: -20px;">
                <img src="/img/tim/opn-angger.png"/>
            </div>
            <div style="margin-left: 20px;">
                <h4>Angger Mahardian P.</h4>
                <p style="opacity: 60%;">Project Manager</p>
                <p><strong>“</strong>Kenapa harus SAGA? Kalian tau sendiri kan grafik sampah di Indonesia selalu meningkat, bahkan menjadi penyumbang sampah terbanyak no 2 di dunia, sedih banget loh, tapi tenang aja kami udah hadir ko, sebagai pelopor baru generasi muda untuk menjadi bagian dari sampah juga berharga<strong>”</strong></p>
            </div>
            </div>
        </div>
    </section>
    <!-- akhir opini -->

    <!-- infografis -->
    <section id="infografis">
        <h2 class="display-md-6 text-center">Infografis Vokasi<br>#<span style="color: #00b2bc;">vokasi</span>membangunIndonesia</h2>
        <div class="container">
        <div class="banner shadow">
            <div class="row align-items-center">
            <div class="col-md-6 ms-md-3">
                <h2>Yuk, baca infografis tentang VOKASI!</h2>
                <p>Dengan membaca infografis di bawah ini,  kalian bisa menambah informasi tentang Vokasi lho!</p>
            </div>
            <div class="col-md-4 ms-auto">
                <img src="/img/tim/bubble.png" class="img-fluid" alt="bubble">
            </div>
            </div>
        </div>
            <div class="slider-grafik row">
                <div class="col-md-11 d-flex justify-content-center sdm">
                <div class="row justify-content-center">
                    <div class="col">
                    <img src="/img/tim/grafik-1.jpg" class="img-fluid" style="margin-top: -30px;" alt="grafik">
                    <h6 style="color: #00b3bc">#Vokasimantab</h6>
                    <h2>Perkembangan SDM Vokasi</h2>
                    </div>
                    <div class="col">
                    <h5>Pendidikan Kecakapan kerja (PKK) yang kurikulumnya berbasis kompetensi dan harus bekerjasama dengan Dunia Usaha dan Dunia Industri (DUDI).</h5>
                    <p>
                        Program Pendidikan Kecakapan Kerja (PKK) pada kursus dan pelatihan merupakan program pemberian keterampilan kecakapan hidup yang diselenggarakan oleh lembaga pendidikan non formal khususnya lembaga kursus dan pelatihan
                        atau lembaga lainnya yang mempunyai fungsi pendidikan vokasi untuk memberikan pelayanan pendidikan dan pelatihan berorientasi pada pengembangan keterampilan kerja pada peserta didik agar memiliki kompetensi di bidang
                        keterampilan tertentu setingkat operator dan teknisi yang bersertifikat kompetensi sehingga dapat dijadikan bekal untuk bekerja pada sektor formal sesuai dengan peluang kerja yang ada.
                    </p>
                    </div>
                </div>
                </div>
                <div class="col-md-11 d-flex justify-content-center sdm">
                <div class="row justify-content-center">
                    <div class="col">
                    <img src="/img/tim/grafik-2.jpg" class="img-fluid" style="margin-top: -30px;" alt="grafik">
                    <h6 style="color: #00b3bc">#Vokasimantab</h6>
                    <h2>Perkembangan SDM Vokasi</h2>
                    </div>
                    <div class="col">
                    <h5>Pendidikan Kecakapan Wirausaha (PKW) yang kurikulumnya sesuai kebutuhan usaha dan manajemen usaha kecil bekerjasama dengan UMKM.</h5>
                    <p>
                        Pendidikan Kecakapan Wirausaha (PKW) adalah program layanan pendidikan dan pelatihan kewirausahaan dan keterampilan berwirausaha yang diselenggarakan oleh lembaga kursus dan pelatihan (LKP) atau satuan PNF lainnya, Organisasi mitra kursus dan asosiasi profesi, DUDI, serta lembaga pendidikan yang melaksanakan fungsi vokasi yang disesuaikan dengan kebutuhan dan peluang usaha yang ada di masyarakat.
                    </p>
                    </div>
                </div>
                </div>
            </div>
        <div class="row grafik2 justify-content-between text-center">
            <div class="col-sm-12 col-lg-2 grafik2-sdm shadow flex-wrap" style="background-color: #B7F4F1;">
            <h5 style="margin: auto;" class="mt-lg-3">Jumlah Kerjasama VOKASI</h5>
            </div>
            <div class="col-md-3 col-lg-2 grafik2-sdm shadow">
            <div class="angka d-flex flex-wrap flex-wrap align-content-center justify-content-center">
                <img src="/img/tim/graduation-hat.png" class="me-sm-2 me-lg-2 img-fluid" style="width: 45px; height: 45px;margin-bottom: 10px;" alt="college">
                <h3 class="display-6">2615</h3>
            </div>
            <h6>Perguruan Tinggi Vokasi</h6>
            </div>
            <div class="col-md-3 col-lg-2 grafik2-sdm shadow">
            <div class="angka d-flex flex-wrap align-content-center justify-content-center">
                <img src="/img/tim/school.png" class="img-fluid me-sm-2 me-lg-2" style="width: 45px; height: 45px;margin-bottom: 10px;" alt="SMK">
                <h3 class="display-6">560</h3>
            </div>
            <h6>Sekolah Menengah Kejuruan (SMK)</h6>
            </div>
            <div class="col-md-3 col-lg-2 grafik2-sdm shadow">
            <div class="angka d-flex flex-wrap align-content-center justify-content-center">
                <img src="/img/tim/badge.png" class="img-fluid me-sm-2 me-lg-2" style="width: 45px; height: 45px;margin-bottom: 10px;" alt="lembaga">
                <h3 class="display-6">83</h3>
            </div>
            <h6>Lembaga Kursus & Pelatihan</h6>
            </div>
        </div>
        <div class="grafik3 shadow">
            <h5 class="text-center">Kerjasama Luar Negeri</h5>
            <div class="row mt-5 text-center">
            <div class="col-md-3 mb-4">
                <div class="circlechart" data-percentage="30.95">Taiwan</div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="circlechart" data-percentage="21.9">Malaysia</div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="circlechart" data-percentage="16.67">Cina</div>
            </div>
            <div class="col-md-3">
                <div class="circlechart" data-percentage="7.62">Filipina</div>
            </div>
            </div>
        </div>
        <div class="grafik4 shadow">
            <div class="bekerja mt-3">
            <h5>Lulusan SMK yang Bekerja</h5>
            <img src="/img/tim/bekerja.jpg" class="img-fluid" alt="lulusan bekerja">
            </div>
            <div class="pengangguran mt-5">
            <h5>Tingkat pengangguran dari lulusan SMK</h5>
            <img src="/img/tim/pengangguran.jpg" class="img-fluid" alt="lulusan pengangguran">
            </div>
        </div>
        </div>

    </section>
    <!-- akhir infografis -->

    
@endsection