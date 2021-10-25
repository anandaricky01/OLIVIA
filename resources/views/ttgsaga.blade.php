@extends('layouts/layoutMain')

@section('container')
    
    <!-- header -->
    <section class="header">
        <div class="container">
            <div class="row justify-content-around align-content-center">
                <div class="col-md-5">
                    <h1 class="display-4">Hi <span style="color: #00b3bc;">SAGA troops</span>, kepoin kami yuk</h1>
                    <p>Informasi lengkap terkait SAGA semua ada disini.</p>
                </div>
                <div class="col-md-6">
                    <img src="/img/ttgsaga/header.svg" class="img-fluid" alt="header ttgsaga">
                </div>
            </div>
        </div>
    </section>
    <!-- akhir header -->

    <!-- saga? -->
    <section class="deskripsi">
    <div class="container">
        <div class="row justify-content-evenly align-content-center">
        <div class="col-md-5">
            <img src="/img/ttgsaga/Frame.png" class="img-fluid" alt="frame">
        </div>
        <div class="col-md-5 my-auto">
            <h1 class="mt-5 mt-lg-0">Apa itu <span style="color: #00b3bc;">SAGA</span></h1>
            <p>SAGA adalah platform manajemen kelola sampah yang terintegrasi untuk mendukung penerapan “Gerakan Sampah Juga Berharga” di daerah Malang Raya dalam rangka menciptakan kondisi regenerasi sistem alam yang lebih baik, serta mendorong kreasi produk baru terhadap aktivitas masyarakat yang pro lingkungan di masa pandemi.</p>
        </div>
        </div>
    </div>
    </section>
    <!-- akhir saga? -->

    <!-- layanan -->
    <section class="layanan">
    <div class="container">
        <h1 class="text-center">Layanan <span style="color: #00b3bc;">SAGA</span></h1>
        <div class="row sobat mt-5 shadow justify-content-evenly align-items-center">
        <div class="col-md-4">
            <img src="/img/ttgsaga/sobat.svg" class="img-fluid" alt="sobat saga">
        </div>
        <div class="col-md-5">
            <h3 class="mt-5 mt-lg-0">Sobat <span style="color: #00b3bc;">SAGA</span></h3>
            <p style="color: #00b3bc;">Penyetor atau Sobat SAGA adalah bagian dari SAGA yang berperan sebagai pengirim sampah kepada pihak Kolega.</p>
            <br>
            <p>Persyaratan jadi Sobat SAGA : 
            <br> a. Semua warga Malang;
            <br> b. KTP Asli (masih berlaku);
            <br> c. Sampah memenuhi syarat dan ketentuan.</p>
        </div>
        </div>
        <div class="row kurir mt-5 shadow justify-content-evenly align-items-center">
        <div class="col-md-4">
            <img src="/img/ttgsaga/kurir.svg" class="img-fluid" alt="kurir saga">
        </div>
        <div class="col-md-5">
            <h3 class="mt-5 mt-lg-0"><span style="color: #00b3bc;">SAGA</span> Kurir</h3>
            <p style="color: #00b3bc;">Kurir atau Partner SAGA adalah bagian dari SAGA yangberperan sebagai penghubung antara Sobat SAGA dengan Kolega. Partner SAGA akan mengirimkan sampah yang disetorkan kepada pihak penerima.</p>
            <br>
            <p>Persyaratan jadi SAGA Kurir : 
            <br>  a. Warga negara Indonesia;
            <br> b. Maksimal 65 tahun pada saat pendafataran;
            <br> c. KTP Asli (masih berlaku);
            <br> d. SIM C/D Asli (dalam masa berlaku);
            <br> e. STNK Asli;
            <br> f. SKCK Asli.</p>
        </div>
        </div>
        <div class="row kolega mt-5 shadow justify-content-evenly align-items-center">
        <div class="col-md-4">
            <img src="/img/ttgsaga/kolega.svg" class="img-fluid" alt="kolega saga">
        </div>
        <div class="col-md-5">
            <h3 class="mt-5 mt-lg-0">Kolega</h3>
            <p style="color: #00b3bc;">Kolega adalah bagian dari SAGA yang akan menerima, mengolah, dan juga memasarkan sampah yang telah disetorkan oleh Sobat SAGA. </p>
            <br>
            <p>Persyaratan jadi KOLEGA : 
            <br>  a. Perseorangan/UMKM yang bergerak di bidang pengelolaan sampah;
            <br> b. Bisa mengelola jenis sampah dengan konsep Reduce, Reuse, Recycle;
            <br> c. KTP asli;
            <br> d. Memiliki NPWP pemilik usaha.</p>
        </div>
        </div>
    </div>
    </section>
    <!-- akhir layanan -->

    <!-- action -->
    <div class="judul text-center">
    <h2>Apa yang telah <span style="color: #00b3bc;">SAGA</span> lakukan?</h2>
    <p>Dalam mencapai target dan juga tujuan dari SAGA, kami telah melakukan berbagai langkah untuk menuju perubahan yang baik, diantaranya:</p>
    </div>
    <section class="action">
    <div class="container">
        <div class="row justify-content-evenly">
        <div class="col-md-2 text-center">
            <img src="/img/ttgsaga/action1.png" class="img-fluid mb-4" alt="action1">
            <p>Mengajak masyarakat untuk mulai mengurangi sampah</p>
        </div>
        <div class="col-md-2 text-center">
            <img src="/img/ttgsaga/action2.png" class="img-fluid mb-4" alt="action2">
            <p>Mengelola sampah dengan menerapkan 3R (Reduce, Reuse, Recylce)</p>
        </div>
        <div class="col-md-2 text-center">
            <img src="/img/ttgsaga/action3.png" class="img-fluid mb-4" alt="action3">
            <p>Membuka Lapangan Pekerjaan baru</p>
        </div>
        <div class="col-md-2 text-center">
            <img src="/img/ttgsaga/action4.png" class="img-fluid mb-4" alt="action4">
            <p>Mengembangkan potensi UMKM dengan prinsip ekonomi sirkular</p>
        </div>
        </div>
    </div>
    </section>
    <!-- akhir action -->

    <!-- proses -->
    <section class="proses">
    <div class="container">
        <div class="text-center">
        <h1 style="width: 60%; margin: 0 auto;">Proses pengambilan <span style="color: #00b3bc;">material SDA</span> yang akan dikelola</h1>
        <img src="/img/ttgsaga/peta konsep.png" class="img-fluid" alt="peta konsep">
        </div>
    </div>
    </section>
    <!-- akhir proses -->

    <!-- capaian -->
    <section class="capaian">
    <div class="container">
        <h1 class="text-center mb-5">Target & Capaian</h1>
        <div class="row justify-content-evenly">
        <div class="col-lg-3 col-md-5 col-sm-12 col-11 mt-sm-4 mt-4 card text-center ms-lg-2 ms-md-1 ms-sm-1 shadow">
            <img src="/img/ttgsaga/ecology1.png" class="img-fluid" alt="target">
            <h6>“Agar masyarakat menyadari pentingnya kepedulian akan lingkungan sekitar”</h6>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-12 col-11 mt-sm-4 mt-4 card text-center ms-lg-2 ms-md-1 ms-sm-1 shadow">
            <img src="/img/ttgsaga/ecology2.png" class="img-fluid" alt="target">
            <h6>“Agar masyarakat memiliki keterampilan pengolahan sampah guna meningkatkan perekonomian”</h6>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-12 col-11 mt-sm-4 mt-4 card text-center ms-lg-2 ms-md-1 ms-sm-1 shadow">
            <img src="/img/ttgsaga/ecology3.png" class="img-fluid" alt="target">
            <h6>“Menciptakan lingkungan yang bersih dan sehat”</h6>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-12 col-11 mt-sm-4 mt-4 card text-center ms-lg-2 ms-md-1 ms-sm-1 shadow">
            <img src="/img/ttgsaga/ecology4.png" class="img-fluid" alt="target">
            <h6>“Terbentuknya pengelolaan sampah rumah tangga yang baik dan benar”</h6>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-12 col-11 mt-sm-4 mt-4 card text-center ms-lg-2 ms-md-1 ms-sm-1 shadow">
            <img src="/img/ttgsaga/ecology5.png" class="img-fluid" alt="target">
            <h6>“Pelestarian bumi yang berkelanjutan”</h6>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-12 col-11 mt-sm-4 mt-4 card text-center ms-lg-2 ms-md-1 ms-sm-1 shadow">
            <img src="/img/ttgsaga/ecology6.png" class="img-fluid" alt="target">
            <h6>“Platform pengolahan sampah dengan sistem ekonomi sirkular yang ada di wilayah Malang Raya”</h6>
        </div>
        </div>
    </div>
    </section>
    <!-- akhir capaian -->

@endsection
