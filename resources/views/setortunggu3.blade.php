@extends('layouts/layoutMain')

@section('container')
    <!-- isi -->
    <section class="isi">
        <div class="container text-center">
            <img src="/img/setor/emottunggu2.svg" class="img-fluid" alt="OTW">
            <h1 class="mt-5" style="color: #00b3bc;">Horeee!</h1>
            <h3 class="mt-3">Barangmu sudah diterima, terima kasih ya!</h3>
            <p>Yuk claim poin mu sekarang juga!</p>
            <button class="btn2 mt-3"><a href="/dashboard" style="text-decoration: none;color: #fff;">Oke</a></button> <br> <br>
            <a href="/layanan/setor-barang" style="text-decoration: none; color: #00b3bc;"><i class="fas fa-arrow-left me-2"></i>Kembali ke halaman sebelumnya</a>
        </div>
    </section>
    <!-- akhir isi -->
@endsection