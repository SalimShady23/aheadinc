<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-3C2B2N128R"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-3C2B2N128R');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A legacy: 50 years of transforming lives in Tanzania and beyond with AHEAD INC">
        <meta name="keywords" content="AHEAD INC, AHEAD, NGO">
        <meta name="author" content="AHEAD INC">
        <title>{{ $title ?? 'Ahead Inc' }}</title>

        <!-- Stylesheets -->
        <link href="{{ url('css/style.css') }}" rel="stylesheet">
        <link href="{{ url('css/responsive.css') }}" rel="stylesheet">
        <link href="{{ url('css/adventures.css') }}" rel="stylesheet">
        <link href="{{ url('css/ahead.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" href="{{ url('images/favicon.ico') }}" type="image/x-icon">

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    </head>

    <!-- page wrapper -->
    <body class="boxed_wrapper">
        <script>0</script>


        <!-- .preloader -->
        <div class="preloader"></div>
        <!-- /.preloader -->

        @include('../sections/header')


        {{ $slot }}

        @include('../sections/main-footer')
        @include('../sections/footer-bottom')
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fa fa-long-arrow-up"></span>
        </button>
        

        <!--jquery js -->
        <script src="{{ url('js/jquery.js') }}"></script>
        <script src="{{ url('js/bootstrap.js') }}"></script>
        <script src="{{ url('js/owl.carousel.min.js') }}"></script>
        <script src="{{ url('js/wow.js') }}"></script>
        <!-- <script src="{{ url('s/validation.js') }}j"></script> -->
        <script src="{{ url('js/jquery.fancybox.pack.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/SmoothScroll.js') }}"></script>
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZQiiFTOGpm2qHVZmZY1s-aEnmHDhqKgk"></script> -->
        <script src="{{ url('js/html5lightbox/html5lightbox.js') }}"></script>
        <!-- <script src="{{ url('js/gmaps.js') }}"></script> -->
        <script src="{{ url('js/map-helper.js') }}"></script>
        <script src="{{ url('js/isotope.js') }}"></script>
        <script src="{{ url('js/jquery-ui.js') }}"></script>
        <script src="{{ url('js/jquery.appear.js') }}"></script>
        <script src="{{ url('js/jquery.countTo.js') }}"></script>
        <script src="{{ url('js/nouislider.js') }}"></script>
        <script src="{{ url('js/imagezoom.js') }}"></script> 
        <!-- main-js -->
        <script src="{{ url('js/script.js') }}"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <script src="{{ url('js/adventures.js') }}"></script> 
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.all.min.js"></script>

        <script>
            @if(session()->has('success-message'))
                Swal.fire({
                    title: 'Success!',
                    text: '{{ session("success-message") }}',
                    icon: 'success',
                    timer: 5000,
                    showCloseButton: true,
                });
            @endif
            @if(session()->has('error-message'))
                Swal.fire({
                    title: 'Error!',
                    text: '{{ session("error-message") }}',
                    icon: 'error',
                    timer: 5000,
                    showCloseButton: true,
                });
            @endif
        </script>

        <script>
            function openVolunteer()
            {
                window.open("volunteer");

            }
            function openDonate()
            {
                window.open("donate");

            }
        </script>
        
    </body>
</html>