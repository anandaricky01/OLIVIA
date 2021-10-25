@extends('layouts/layoutMain')

@section('container')
    
    <!-- header -->
        <section class="header">
        <div class="container">
            <div class="row meet1 justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-12 text-lg-start text-center">
                <img src="/img/setor/ava3.png" class="img-fluid" alt="avatar">
            </div>
            <div class="col-lg-5 col-md-4 col-sm-12 text-center">
            <h3 class="mt-3">#GerakanSampahJugaBerharga</h3>
            <p>Walau terpisah jarak, bisa setor kapan aja. Ayo setorkan sampahmu sekarang!</p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 ava2 text-lg-end text-center">
                <img src="/img/setor/ava2.png" class="img-fluid" alt="avatar">
            </div>
            </div>
        </div>
        </section>
        <!-- akhir header -->
    
        <!-- kategori -->
        <section class="form">
            <form action="/layanan/setor-barang" method="POST">
            @csrf
            <section class="kategori">
                <div class="container">
                <h3 class="mb-4 text-center" style="color: #00b3bc;">Jenis Sampah</h3>
                    <div class="row justify-content-around text-center">
                        @foreach ($jenis_sampah as $jenis)
                            <div class="{{ $jenis->slug }} col">
                            <input type="radio" name="jenis_sampah_id" id="{{ $loop->iteration }}" class="hidebox" value="{{ $loop->iteration }}" />
                            <label for="{{ $loop->iteration }}" class="isi-radio">
                                <div class="display-box text-center">
                                <img src="/img/kolega/{{ $jenis->gambar }}" style="height: 60%; margin-bottom: 6px" class="img-fluid" alt="kardus" />
                                <p style="font-size: 12px">{{ $jenis->jenis_sampah }}</p>
                                </div>
                            </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- akhir kategori -->

        <!-- form -->
        
            <div class="container">
                <div class="row g-5">
                <div id="inputan"></div>
                <div class="col-md-6">
                    <div class="mb-3">
                    <h3 class="mb-4" style="color: #00b3bc;">Berat</h3>
                    <input type="berat" class="form-control form-control-lg" id="exampleFormControlInput1" name="berat" required/>
                    <p>Maksimal berat <= 5 kg</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                    <h3 class="mb-4" style="color: #00b3bc;">Alamat Tujuan</h3>
                    <input type="berat" class="form-control form-control-lg" id="exampleFormControlInput1" name="alamat" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                    <h3 class="mb-4" style="color: #00b3bc;">Alamat Pengiriman</h3>
                    <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat_pengiriman"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                    <h3 class="mb-4" style="color: #00b3bc;">Deskripsi Alamat (Opsional)</h3>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi_alamat"></textarea>
                    </div>
                </div>
                </div>
                <div class="col-12 text-end">
                    <button class="btn-outline"><a href="/layanan/setor" style="text-decoration: none; color: #00b43c;">Batal</a></button>
                    <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Submit</button>
                </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body text-center">
                            <img src="/img/setor/emot.svg" style="height: 80px;" alt="emoticon">
                            <h3 style="margin-top: 30px;color: #00b3bc;">Yeayyy!</h3>
                            <h5 class="text-center">Barang mu sudah dikonfirmasi oleh toko nih! <br> Tunggu kurir datang ya!</h5>
                            <button type="submit" class="btn2 text-white" data-bs-dismiss="modal" style="margin-top: 15px;">Oke</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
        </form>
        </section>
        <!-- akhir form -->
@endsection
