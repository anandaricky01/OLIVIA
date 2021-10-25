@isset($active)
  @if ($active == 'beranda')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
            
    <!-- khusus index -->
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- /khusus index -->

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true, duration: 1500,offset: 250,
      });
    </script>

    <!-- counter -->
    <script>
      jQuery(document).ready(function ($) {
        $(".counter").counterUp({
          delay: 10,
          time: 1000,
        });
      });
    </script>
    <!-- slide -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
      integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script type="text/javascript">
      $(".slider").slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
      });
    </script>
    <!-- loading -->
    <script>
    var preloader = document.getElementById("loading");
    function myFunction() {
      preloader.style.display = "none";
    }
    </script>
    <script type="text/javascript">
    //     function togglePopup(){
    //       document.getElementById("popup-1").classList.toggle("active");
    //     }
    </script>

    <script type="text/javascript">
      $(window).on('load', function() {
          $('#myModal').modal('show');
      });
    </script>
  @endif
@endisset

@if (Request::is('cari'))
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
@endif

@if (Request::is('faq'))

  <!-- javasript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true, duration: 1300,offset: 100,
    });
  </script>

@endif

@if (Request::is('artikel'))
    <!-- javasript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true, duration: 1300,offset: 100,
      });
    </script>
@endif

@if (Request::is('artikel/*'))
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
@endif

@if (Request::is('layanan/kolega*'))
    
    <!-- javasript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true, duration: 1300,offset: 100,
      });
    </script>
@endif

@if (Request::is('layanan/kurir'))
     <!-- javasript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

     <!-- AOS -->
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
       AOS.init({
         once: true, duration: 1300,
       });
     </script>
@endif

@if (Request::is('layanan/setor'))
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true, duration: 1500,offset: 250,
      });
    </script>

    <!-- owl -->
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    ></script>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    ></script>
    <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
    loop: false,
    center: true,
    margin: 10,
    responsive: {
        0: {
        items: 1,
        },
        600: {
        items: 3,
        },
        1000: {
        items: 5,
        },
    },
    });
    </script>

    <!-- slide -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
      integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script type="text/javascript">
    $('.slider').slick({
      dots: true,
    });
    </script>
@endif

@if (Request::is('layanan/setor-barang'))
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- Jquery button --}}
    <script>
      // 1
      function kardus(){
        var inputan = "<input type='hidden' name='input' value='1'>";
        $("#inputan").after(inputan);
        $(document).ready(function(){
          $(".kardus").click(function(){
            $("#kardus").addClass("active");
          });
        });
      }

      // 2
      function kaca(){
        var inputan = "<input type='hidden' name='input' value='2'>";
        $("#inputan").after(inputan);
        $(document).ready(function(){
          $(".kaca").click(function(){
            $("#kaca").addClass("active");
          });
        });
      }

      // 3
      function kertas(){
        var inputan = "<input type='hidden' name='input' value='3'>";
        $("#inputan").after(inputan);
        $(document).ready(function(){
          $(".kertas").click(function(){
            $("#kertas").addClass("active");
          });
        });
      }

      // 4
      function botol(){
        var inputan = "<input type='hidden' name='input' value='4'>";
        $("#inputan").after(inputan);
        $(document).ready(function(){
          $(".botol").click(function(){
            $("#botol").addClass("active");
          });
        });
      }

      // 5
      function kemasan(){
        var inputan = "<input type='hidden' name='input' value='5'>";
        $("#inputan").after(inputan);
        $(document).ready(function(){
          $(".kemasan").click(function(){
            $("#kemasan").addClass("active");
          });
        });
      }

      // 6
      function kain(){
        var inputan = "<input type='hidden' name='input' value='6'>";
        $("#inputan").after(inputan);
        $(document).ready(function(){
          $(".kain").click(function(){
            $("#kain").addClass("active");
          });
        });
      }
    </script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true, duration: 1500,offset: 250,
      });
    </script>
@endif

@if (Request::is('layanan/tunggu'))
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true, duration: 1500,offset: 250,
      });
    </script>
@endif

@if (Request::is('layanan/tunggu-lagi'))
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true, duration: 1500,offset: 250,
      });
    </script>
    
    <!-- countdown -->
    <script type="text/javascript">
        let counter = document.querySelector('h5');
        let count = 1;

        setInterval(()=>{
            counter.innerText = count;
            count++

            if (count>10) location.replace('/layanan/tunggu-lagi-lagi')
            
        },1000)
    </script>
@endif

@if (Request::is('layanan/tunggu-lagi-lagi'))
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true, duration: 1500,offset: 250,
      });
    </script>
@endif

@if (Request::is('tentang/tim'))
    <!-- javasript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true, duration: 1300,offset: 100,
      });
    </script>
    <!-- slide -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
      integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script type="text/javascript">
     $(".slider").slick({
        centerMode: true,
        centerPadding: "400px",
        slidesToShow: 1,
        slideToScroll: 1,
        dots: true,
        arrows: true,
        infinite: true,
        focusOnSelect: true,
        autoplay: true,
        autoplaySpeed: 6000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: "60px",
              slidesToShow: 1,
            },
          },
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: "60px",
              slidesToShow: 1,
            },
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              mobileFirst: true,
              centerPadding: "0px",
              slidesToShow: 1,
            },
          },
        ],
      });
    </script>
    <script type="text/javascript">
      $(".slider-grafik").slick({
        dots: true,
        arrows: false,
      });
    </script>
    <!-- grafik 3 -->
    <script src="/js/progresscircle.js"></script>
    <script>
      $('.circlechart').circlechart();
    </script>

    <!-- grafik 4 -->
    <script type="text/javascript">
      $(function () {
        $(".bars li .bar").each(function (key, bar) {
          var percentage = $(this).data("percentage");
          $(this).animate(
            {
              height: percentage + "%",
            },
            1000
          );
        });
      });
    </script>
@endif

@if (Request::is('tentang/saga'))
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true, duration: 1500,offset: 250,
      });
    </script>
@endif
