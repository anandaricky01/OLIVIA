<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/masuk.css" />

    <!-- counter -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

    <!-- icon -->
    <script src="https://kit.fontawesome.com/ff889e85ca.js" crossorigin="anonymous"></script>

    <title>Saga | {{ $title }}</title>
  </head>
  <body class="bg-white">
    <div class="container masuk mt-4">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <h1 class="display-3 fw-bolder">Hi <span class="header">SAGA Troops</span><br>Selamat Datang!</h1>
              <h4>Kami sangat senang kamu bisa datang kembali</h4>
            <img src="img/masuk.jpg" class="img-fluid" alt="" />
          </div>
          <div class="col-lg-5 col-sm-12 col-md-12 ms-sm-4 ms-md-auto kanan">
            <h3 class="text-center mb-4">Masuk</h3>
            <form class="border border-info p-3 shadow" style="border-radius: 30px;">
              <div class="container">
                <div class="mb-3">
                  <label for="exampleInputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword" class="form-label">Kata sandi</label>
                  <input type="password" class="form-control" id="exampleInputPassword">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Ingat saya?</label>
                </div>
                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn text-white">Masuk</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>





    <!-- javasript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  </body>
</html>
