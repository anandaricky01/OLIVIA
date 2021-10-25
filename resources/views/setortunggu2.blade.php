@extends('layouts/layoutMain')

@section('container')
    <!-- isi -->
    <section class="isi">
        <div class="container text-center">
            <img src="/img/setor/emottunggu1.svg" class="img-fluid" alt="tunggu">
            <h1 class="mt-5" style="color: #00b3bc;">Harap Tunggu</h1>
            <h3 class="mt-3">Barangmu akan segera dikonfirmasi oleh Kolega kami!</h3>
            <a href="/layanan/setor-barang" style="text-decoration: none; color: #00b3bc;"><i class="fas fa-arrow-left me-2"></i>Kembali ke halaman sebelumnya</a>
        </div>
        <h5 style="color: #fff;">counter</h5>
    </section>
    <!-- akhir isi -->
@endsection