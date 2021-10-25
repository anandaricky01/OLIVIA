@extends('layouts/layoutMain')

@section('container')
<!-- isi -->
    <section class="isi">
        <div class="container text-center">
            <img src="/img/setor/motor.svg" class="img-fluid" alt="OTW">
            <h1 class="mt-5" style="color: #00b3bc;">Otwww...</h1>
            <h3 class="mt-3">Kurirnya sedang ada di perjalanan, mohon tunggu ya!</h3>
            <p>Kalau barangmu sudah diambil kurir, jangan lupa klik konfirmasi ya!</p>
            <button class="btn2 mt-3"><a href="/layanan/tunggu-lagi" style="text-decoration: none;color: #fff;">Konfirmasi</a></button> <br> <br>
            <a href="/layanan/setor-barang" style="text-decoration: none; color: #00b3bc;"><i class="fas fa-arrow-left me-2"></i>Kembali ke halaman sebelumnya</a>
        </div>
    </section>
    <!-- akhir isi -->
@endsection