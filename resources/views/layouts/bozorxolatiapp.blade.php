<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IMRS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
          rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/about.css')}}" rel="stylesheet">
    <script src="{{asset('assets/js/mapdata.js')}}"></script>
    <script src="{{asset('assets/js/countrymap.js')}}"></script>
</head>
<body>
@include('client.inc.header')
@include('client.inc.bozorXolati.sidebar')
<div class="all bg-white pl-5 pt-3 pb-3">
    <div class="row">
        @include('client.inc.bozorXolati.navbar')
        @yield('content')
    </div>
</div>
@include('client.inc.footer')
<!-- Back to Top -->
<a style="background-color: #2f005f;" href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white"></i></a>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/region.js')}}"></script>
</body>
</html>
