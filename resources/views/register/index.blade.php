<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/daftar.css" />
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

    <title>Daftar | SAGA</title>
  </head>
  <body class="fluid" onload="myFunction()">
    <div id="loading"></div>
    <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-12 kiri">
            <h1 class="display-3 fw-bolder" data-aos="fade-up">Hi <span class="header">SAGA Troops</span><br>Selamat Datang!</h1>
            <h5 data-aos="fade-up">Bergabung bersama kami dan jadilah bagian dari perubahan</h5>
            <img src="/img/daftar.jpg" class="img-fluid" alt="" />
          </div>
          <div class="col-lg-5 col-sm-12 col-md-12 ms-sm-4 ms-md-auto kanan" data-aos="fade-down">
          <h3 class="text-center mb-4 header">Buat Akun</h3>
            <form class="border border-info p-3 shadow" style="border-radius: 30px;" action="/register" method="POST">
              @csrf
              <div class="container">
                {{-- untuk input nama pengguna --}}
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Pengguna</label>
                  <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                {{-- untuk input email pengguna --}}
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                {{-- untuk input password pengguna --}}
                <div>
                  <label for="password" class="form-label">Kata sandi</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password1" name="password" required >
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                
                <div class="row justify-content-evenly">
                  <div class="col-md-3 col-sm-11 col-11 col-lg-3 radio setor">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="role_id" id="role_id" value="1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Setor
                    </label>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-11 col-11 col-lg-3 radio kurir">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="role_id" id="role_id" value="2">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Kurir
                    </label>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-11 col-11 col-lg-3 radio mitra">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="role_id" id="role_id" value="3">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Mitra
                    </label>
                    </div>
                  </div>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                  <label class="form-check-label" for="exampleCheck1">Saya menyutujui kebijakan privasi</label>
                </div>
                <div class="mb-3">
                  <a href="/login" style="text-decoration: none;">Sudah punya akun?</a>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn text-white">Daftar</button>
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
    <script src="jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  </body>
</html>