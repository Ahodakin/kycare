
<!DOCTYPE html>
<html lang="fr">
    <head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- ** Mobile Specific Metas ** -->
    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="KYcare - Plateforme de soins médicaux en ligne">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="KYcare">
    <meta name="generator" content="KYcare">

    <!-- theme meta -->
    <meta name="theme-name" content="kycare" />

    
    <!-- ** Plugins Needed for the Project ** -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('Frontend/plugins/bootstrap/bootstrap.min.css')}}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('Frontend/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/plugins/slick/slick-theme.css')}}">
    <!-- FancyBox -->
    <link rel="stylesheet" href="{{asset('Frontend/plugins/fancybox/jquery.fancybox.min.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('Frontend/plugins/fontawesome/css/all.min.css')}}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('Frontend/plugins/animation/animate.min.css')}}">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="{{asset('Frontend/plugins/jquery-ui/jquery-ui.css')}}">
    <!-- timePicker -->
    <link rel="stylesheet" href="{{asset('Frontend/plugins/timePicker/timePicker.css')}}">
    
    <!-- Stylesheets -->
    <link href="{{asset('Frontend/css/style.css')}}" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="icon" href="{{ asset('Frontend/images/fav.jpeg') }}" type="image/jpeg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="{{ asset('fullcalendar/main.css') }}" rel="stylesheet">


    </head>

    <body>

        <div class="page-wrapper">

            @yield('content')

            @include('Layouts.footer')

            <!-- scroll-to-top -->
            <div id="back-to-top" class="back-to-top">
                <i class="fa fa-angle-up"></i>
            </div>

        </div>
        <!--End pagewrapper-->


        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target=".header-top">
            <span class="icon fa fa-angle-up"></span>
        </div>
      
        <!-- jquery -->
        <script src="{{asset('Frontend/plugins/jquery.min.js')}}"></script>
        <!-- bootstrap -->
        <script src="{{asset('Frontend/plugins/bootstrap/bootstrap.min.js')}}"></script>
        <!-- Slick Slider -->
        <script src="{{asset('Frontend/plugins/slick/slick.min.js')}}"></script>
        <script src="{{asset('Frontend/plugins/slick/slick-animation.min.js')}}"></script>
        <!-- FancyBox -->
        <script src="{{asset('Frontend/plugins/fancybox/jquery.fancybox.min.js')}}" defer></script>
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
        <script src="{{'Frontend/plugins/google-map/gmap.js'}}" defer></script>

        <!-- jquery-ui -->
        <script src="{{asset('Frontend/plugins/jquery-ui/jquery-ui.js')}}" defer></script>
        <!-- timePicker -->
        <script src="{{asset('Frontend/plugins/timePicker/timePicker.js')}}" defer></script>

        <!-- script js -->
        <script src="{{asset('Frontend/js/script.js')}}"></script>
    </body>

</html>