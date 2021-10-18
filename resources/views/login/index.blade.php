<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/masuk.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- counter -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

    <!-- icon -->
    <script src="https://kit.fontawesome.com/ff889e85ca.js" crossorigin="anonymous"></script>

    <title>Masuk | SAGA</title>
  </head>
  <body class="bg-white" onload="myFunction()">
    <div id="loading"></div>
    <div class="container masuk mt-4">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <h1 class="display-3 fw-bolder"  data-aos="fade-up">Hi <span class="header">SAGA Troops</span><br>Selamat Datang!</h1>
              <h4  data-aos="fade-up">Kami sangat senang kamu bisa datang kembali</h4>
             <img src="/img/masuk/masuk.jpg" class="img-fluid gambar" alt="" />
          </div>
          <div class="col-lg-5 col-sm-12 col-md-12 ms-sm-4 ms-md-auto kanan" data-aos="zoom-in-up">
            
            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>{{ session('success') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>   
            @endif

            {{-- alert gagal login --}}
            @if (session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p>{{ session('loginError') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>   
            @endif

            <h3 class="text-center mb-4">Masuk</h3>
            <form action="/login" method="POST" class="border border-info p-3 shadow" style="border-radius: 30px;">
                @csrf
                <div class="container">
                <div class="mb-3">
                  <label for="exampleInputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" name="email">
                  @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword" class="form-label">Kata sandi</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" name="password">
                  @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <a href="#" style="text-decoration: none;">Lupa password?</a>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Ingat saya?</label>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <p>Belum punya akun? <a href="/register" style="text-decoration: none;">Daftar</a></p>
                  <button type="submit" class="btn text-white">Masuk</button>
                </div>
            </div>
              </form>
          </div>
        </div>
      </div>
    </div>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true, duration: 1500,offset: 250,
      });
    </script>

  <!-- loading -->
  <script>
    var preloader = document.getElementById("loading");
    function myFunction() {
      preloader.style.display = "none";
    }
  </script>
    <!-- javasript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  </body>
</html>