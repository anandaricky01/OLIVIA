@extends('layouts/layoutMain')

@section('container')
    
<!-- header -->
    <section class="header">
      <div class="container">
        <div class="row meet1 justify-content-center">
          <div class="col-lg-3 col-md-4 col-sm-12 text-lg-start text-center">
            <img src="/img/setor/ava1.png" class="img-fluid" alt="avatar">
          </div>
          <div class="col-lg-5 col-md-4 col-sm-12 text-center">
           <h3 class="mt-3">Setiap sampah juga berharga</h3>
           <p>Setorkan sampahmu, dan pilah sesuai dengan jenisnya</p>
           <button class="btn"><a href="/layanan/setor-barang" style="text-decoration: none; color: #fff;">Setor</a></button>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 ava2 text-lg-end text-center">
            <img src="/img/setor/ava4.png" class="img-fluid" alt="avatar">
          </div>
        </div>
      </div>
     </section>
    <!-- akhir header -->
   <!-- cara setor -->
   <section class="cara">
       <div class="container">
           <div class="row justify-content-evenly">
               <div class="col-md-3 mt-5 text-center " data-aos="fade-up-right">
                   <img src="/img/setor/pilah.svg" class="img-fluid mb-2" alt="pilah">
                   <h5>PILAH</h5>
                   <p>Kumpulkan sampahmu dan kelompokkan sesuai dengan jenisnya.</p>
               </div>
               <div class="col-md-3 mt-5 text-center " data-aos="fade-up">
                   <img src="/img/setor/kemas.svg" class="img-fluid mb-2" alt="kemas">
                   <h5>KEMAS</h5>
                   <p>Kemas sampah yang akan kamu setorkan. Pastikan untuk  menimbang terlebih dahulu sampah yang akan kamu setorkan dan perhatikan cara pengemasannya ya!</p>
               </div>
               <div class="col-md-3 mt-5 text-center " data-aos="fade-up-left">
                   <img src="/img/setor/isi-form.svg" class="img-fluid mb-2" alt="isi-form">
                   <h5>ISI FORM</h5>
                   <p>Masuk ke halaman layanan setor untuk mengisi form penyetoran sampah.</p>
               </div>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-md-3 mt-5 text-center " data-aos="fade-up-right">
                    <img src="/img/setor/tunggu.svg" class="img-fluid mb-2 text-start" alt="tunggu kurir">
                    <h5>TUNGGU KURIR</h5>
                    <p>Ketika form penyetoran telah disubmit dan dikonfirmasi oleh KOLEGA, tunggu kurir datang ke tempatmu untuk mengambil sampah.</p>
                </div>
                <div class="col-md-3 mt-5 text-center " data-aos="fade-up-left">
                    <img src="/img/setor/daur.svg" class="img-fluid mb-2" alt="daur ulang">
                    <h5>DAUR ULANG</h5>
                    <p>Sampah yang kamu setorkan akan diterima oleh KOLEGA siap untuk dikelola.</p>
                </div>
            </div>
       </div>
       <img src="/img/setor/bg-tengah.svg" class="bg-circle" alt="">
   </section>
   <!-- akhir cara setor -->

   <!-- jenis sampah -->
   <section class="jenis">
      <h1 class="text-center">Jenis Sampah yang Dapat Disetor</h1>
      <div class="owl-carousel owl-theme">
        <div class="item text-center">
          <img src="/img/setor/kardus.png" class="img-fluid mb-3" alt="kardus" />
          <h5>Kardus</h5>
          <p>(kardus minuman, kardus barang, dan kardus makanan)</p>
        </div>
        <div class="item text-center">
          <img src="/img/setor/kaca.png" class="img-fluid mb-3" alt="kaca" />
          <h5>Kaca</h5>
          <p>(botol kecap, pecahan kaca, dan vas bunga)</p>
        </div>
        <div class="item text-center">
          <img src="/img/setor/kertas.png" class="img-fluid mb-3" alt="kertas" />
          <h5>Kertas</h5>
          <p>(Koran, buku, hvs, bungkus kado, dan kalender)</p>
        </div>
        <div class="item text-center">
          <img src="/img/setor/botol.png" class="img-fluid mb-3" alt="botol plastik" />
          <h5>Botol Plastik</h5>
          <p>(Botol minum, kemasan skincare, dan botol sabun)</p>
        </div>
        <div class="item text-center">
          <img src="/img/setor/kemasan.png" class="img-fluid mb-3" alt="kemasan plastik" />
          <h5>Kemasan Plastik</h5>
          <p>(Kemasan makanan ringan)</p>
        </div>
        <div class="item text-center">
          <img src="/img/setor/kain.png" class="img-fluid mb-3" alt="kain" />
          <h5>Kain</h5>
          <p>(baju bekas dan kain perca)</p>
        </div>
        <div class="item text-center">
          <img src="/img/setor/kaleng.png" class="img-fluid mb-3" alt="kaleng" />
          <h5>Kaleng</h5>
          <p>(kaleng minuman, kaleng susu, kaleng makanan cepat saji, dan kaleng cat)</p>
        </div>
      </div>
   </section>
   <!-- akhir jenis sampah -->

   <!-- sebelum setor -->
   <section class="sebelum">
       <div class="container">
        <div class="row slider">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                    <img src="/img/setor/cucibotol.png" class="img-fluid mb-3" alt="botol-plastik" />
                    </div>
                    <div class="col-md-5 ms-md-4">
                    <h2 style="color: #00b3bc">Cara Mengirimkan sampah botol plastik (botol minum, kemasan skincare, dan botol sabun)</h2>
                    <p style="font-size: 18px">
                        Sebelum mengirimkan sampah botol plastik, pastikan dulu kamu telah mencuci bersih botol plastik atau kemasan tersebut hingga ke bagian dalam kemasannya. Setelah dicuci bersih dan dikeringkan, kamu bisa mengemas botol plastik
                        tersebut kedalam sebuah wadah bersih seperti kardus atau tas kantong. Sampah yang telah dikemas siap untuk disetorkan.
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                    <img src="/img/setor/cucikemasan.png" class="img-fluid mb-3" alt="kemasan plastik" />
                    </div>
                    <div class="col-md-5 ms-md-4">
                    <h2 style="color: #00b3bc">Cara Mengirimkan Sampah Kemasan Plastik (kemasan makanan ringan)</h2>
                    <p style="font-size: 18px">
                        Kemasan plastik seperti kemasan makanan ringan yang akan disetor harus dibersihkan dahulu dengan cara dicuci agar tidak ada sisa makanan atau kotoran yang menempel. Setelah itu asukkan sampah yang telah kering ke dalam wadah yang bersih, seperti kardus atau kantong kemasan.
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                    <img src="/img/setor/cucikaca.png" class="img-fluid mb-3" alt="kaca" />
                    </div>
                    <div class="col-md-5 ms-md-4">
                    <h2 style="color: #00b3bc">Cara Mengirimkan Sampah Kaca (botol kecap, pecahan kaca, dan vas bunga)</h2>
                    <p style="font-size: 18px">
                        Tidak semua sampah kaca bisa disetorkan, serpihan kaca misalnya. Serpihan kaca yang terlalu kecil dan tajam tidak dapat digunakan dan dikhawatirkan dapat melukai tangan. Jadi, pastikan serpihan kaca yang kamu setorkan tidak terlalu kecil dan tajam ya! <br>Cuci bersih sampah kaca yang ingin kamu setorkan, lalu keringkan dan bungkus kaca dengan kain. Pastikan kain telah terikat dengan rapi agar tidak melukai tangan. Setelah itu baru kamu bisa mengemas kembali kedalam wadah bersih seperti kardus atau tas kantong.

                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                    <img src="/img/setor/cucikaleng.png" class="img-fluid mb-3" alt="kaleng" />
                    </div>
                    <div class="col-md-5 ms-md-4">
                    <h2 style="color: #00b3bc">Cara Mengirimkan Sampah kaleng (kaleng minuman, kaleng susu, kaleng makanan cepat saji, dan kaleng cat)</h2>
                    <p style="font-size: 18px">
                        Kaleng yang telah terkumpul harus dicuci terlebih dulu hingga bersih agar terhindar dari bakteri yang menempel. Setelah dicuci bersih dan dikeringkan, bungkus sampah kaleng tersebut dengan wadah yang bersih seperti kardus atau tas kantong.
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                    <img src="/img/setor/cucikertas.png" class="img-fluid mb-3" alt="kertas" />
                    </div>
                    <div class="col-md-5 ms-md-4">
                    <h2 style="color: #00b3bc">Cara Mengirimkan Sampah Kertas (Koran, buku, hvs, bungkus kado, dan kalender) </h2>
                    <p style="font-size: 18px">
                        Pastikan sampah kertas yang akan disetorkan telah disortir dan dibersihkan. Setelah dibersihkan, ikat sampah kertas tersebut agar memudahkan proses pengiriman. Sampah kertas yang telah diikat bisa dimasukkan kedalam wadah yang bersih.
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                    <img src="/img/setor/cucikain.png" class="img-fluid mb-3" alt="kain" />
                    </div>
                    <div class="col-md-5 ms-md-4">
                    <h2 style="color: #00b3bc">Cara Mengirimkan Sampah Kain (baju bekas dan kain perca)</h2>
                    <p style="font-size: 18px">
                        Untuk pencegah penyebaran penyakit, kamu harus mencuci bersih sampah kain yang ingin kamu setorkan terlebih dahulu. Setelah kering, lipat sampah kain tersebut dengan rapi dan masukkan kedalam wadah yang bersih.
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                    <img src="/img/setor/cucikardus.png" class="img-fluid mb-3" alt="kardus" />
                    </div>
                    <div class="col-md-5 ms-md-4">
                    <h2 style="color: #00b3bc">Cara Mengirimkan Sampah Kardus (kardus minuman, kardus barang, dan kardus makanan)</h2>
                    <p style="font-size: 18px">
                        Bersihkan dulu sampah kardus yang ingin kamu setorkan lalu tata dengan rapi. Setalah ditata/ditumpuk, ikat dengan erat sampah kardus tersebut agar mempermudahkan proses pengiriman. 
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
   <!-- akhir sebelum setor -->

   <!-- note -->
   <section class="note">
       <div class="text-center text-white">
           <h6>“Sebelum sampah dikirim, pastikan sampah yang telah terkumpul sudah dibersihkan dan dirapikan untuk memudahkan dalam proses pengemasan dan pengiriman.”</h6>
       </div>
   </section>
   <!-- akhir note -->

   <!-- tombol setor -->
   <section class="text-center mt-5">
    <button class="btn"><a href="/layanan/setor-barang" style="text-decoration: none; color: #fff;">Setor Sekarang</a></button>
   </section>
   
   <!-- akhir tombol setor -->
  
@endsection