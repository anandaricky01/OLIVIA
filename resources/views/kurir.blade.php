@extends('layouts/layoutMain')

@section('container')
    
    <!-- header -->
    <section class="header">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-5">
                    <h1>Layanan Kurir</h1>
                    <p>Haii, Mendengar kata kurir pasti kalian tidak asing lagi dongg, yups kurir merupakan sebuah aktivitas pengiriman barang yang dilakukan secara langsung, kurir juga dikenal sebagai jasa ekspedisi atau seseorang yang bertugas untuk mengirim pesan, paket dalam jumlah kecil hingga sedang dari tempat yang satu ketempat yang lain dengan menggunakan jalur darat, laut maupun udara.
                    </p>
                </div>
                <div class="col-md-5" data-aos="fade-left">
                    <img src="/img/kurir/header.svg" class="img-fluid" alt="kurir-header">
                </div>
            </div>
        </div>
    </section>
    <!-- akhir header -->

    <!-- partner saga -->
    <section class="partner">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-5" data-aos="fade-right">
                    <img src="/img/kurir/kurir.png" class="img-fluid" alt="partner-saga">
                </div>
                <div class="col-md-5 mt-sm-5">
                    <h1>Partner SAGA</h1>
                    <p>Ngomongin soal kurir, SAGA juga punya kurir sendiri nih, namanya Partner SAGA. Wah, kira kira apa sih Partner SAGA itu?  Kurir atau Partner SAGA adalah bagian dari SAGA yang berperan sebagai penghubung antara Sobat SAGA dengan Kolega. Partner SAGA akan mengirimkan sampah yang disetorkan kepada pihak penerima.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir partner saga -->

    <!-- tugas dan fungsi -->
    <section class="tusi">
        <div class="container">
        <h2 class="text-center mb-5">Apa saja sih tugas dan fungsi kurir itu?</h2>
            <div class="row justify-content-around">
                <div class="col-md-3 mb-sm-4">
                <img src="/img/kurir/ambil.svg" class="img-fluid" alt="ambil-barang">
                <h5>Siap mengambil barangmu kapapun itu</h5>
                <p>Kurir akan mengambil barangmu dimanapun dan kapanpun. Kurir juga akan membantu untuk mengecek dan mengemasi barang agar sesuai dengan ketentuan pengemasan.</p>
                </div>
                <div class="col-md-3 mb-sm-4">
                <img src="/img/kurir/aman.svg" class="img-fluid" alt="barang-aman">
                <h5>Memastikan barang dalam keadaan aman hingga sampai tujuan</h5>
                <p>Barang yang dikirim harus dipastikan dalam keadaan yang baik. Kurir akan memastikan agar barang yang disetorkan dapat diterima dalam keadaan aman, terutama selama perjalanan atau proses penyetoran.</p>
            </div>
            <div class="col-md-3 mb-sm-4">
                <img src="/img/kurir/setor.svg" class="img-fluid" alt="barang-setor">
                <h5>Menyetorkan sampah yang akan dikelola</h5>
                <p>Kurir akan mengantarkan barang dengan keadaan yang aman dan memastikan barang yang diantarkan telah diterima oleh pihak kolega. Barang yang telah diterima oleh kolega pun siap untuk dikelola.</p>
            </div>
            </div>
        </div>
    </section>
    <!-- akhir tugas dan fungis -->

    <!-- syarat join -->
    <section class="syarat">
    <div class="container">
        <div class="row align-content-center justify-content-evenly">
        <div class="col-md-5 mb-sm-5 my-auto" data-aos="zoom-in-down" data-aos-offset="460">
            <img src="/img/kurir/motor.svg" class="img-fluid" alt="motor">
        </div>
        <div class="col-md-5">
            <h1>Persyaratan menajdi Partner SAGA:</h1>
            <img src="/img/kurir/syarat.png" class="img-fluid mt-5" alt="syarat">
        </div>
        </div>
    </div>
    </section>
    <!-- akhir syarat join -->

    <!-- info daftar -->
    <section class="informasi">
    <div class="container">
        <div class="text-center">
        <h1>Informasi Pendaftaran</h1>
        <h4 style="color: #00b3bc;">Dapat ditanyakan pada  kontak berikut:</h4>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-3">
            <h5>Hubungi:</h5>
            <a style="text-decoration: none;"><i class="fab fa-instagram"></i> @sagavokasiub</a>
        </div>
        <div class="col-md-3 mt-md-0 mt-5">
            <h5>Kunjungi:</h5>
            <p>2JV8+J85, Penanggungan, Kec. Klojen, Kota Malang, Jawa Timur 65145</p>
        </div>
        </div>
    </div>
    </section>
    <!-- akhir info daftar -->
@endsection
