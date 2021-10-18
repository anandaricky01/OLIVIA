<!DOCTYPE html>
<html lang="en">
  <head>
    @if (Request::is('beranda'))
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
      
      <!-- khusus index -->
      <link rel="stylesheet" href="/css/style.css" />

      <!-- AOS index/artikel -->
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


      <!-- slick -->
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
      />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
      />
      <!-- khusus index -->

      <!-- counter -->
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <!-- font -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@600&display=swap" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

      <!-- icon -->
      <script src="https://kit.fontawesome.com/ff889e85ca.js" crossorigin="anonymous"></script>
    @endif

    @if (Request::is('artikel'))
        <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
      

      @if ($artikel->count() > 0)
        <!-- khusus artikel -->
        <link rel="stylesheet" href="/css/artikel1.css" />
        <!-- /khusus artikel -->
      @else
        <!-- atikel oops -->
        <link rel="stylesheet" href="/css/artikelOps.css" />
        <!-- /artikel oops -->
      @endif

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
    @endif

    @if (Request::is('artikel/*'))
        <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
      <link rel="stylesheet" href="/css/artikel2.css" />

      <!-- font -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@600&display=swap" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

      <!-- icon -->
      <script src="https://kit.fontawesome.com/ff889e85ca.js" crossorigin="anonymous"></script>

    @endif

    @if (Request::is('faq'))
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
      <link rel="stylesheet" href="/css/faq.css" />

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
    @endif
        
    <title>SAGA | {{ $title }}</title>
    </head>
    <body>
        
        @include('partials/navbar')
        
            @yield('container')

        @include('partials/footer')
        @include('partials/javascript')

    </body>
</html>