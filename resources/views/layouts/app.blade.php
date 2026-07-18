<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" 
      content="width=device-width, initial-scale=1.0">


<title>
@yield('title','Emmanex IT Consult')
</title>


<meta name="description"
content="@yield('description','Professional IT Solutions')">

<link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">
<!-- Google Fonts -->

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">


<!-- Bootstrap -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<!-- Bootstrap Icons -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">


<!-- AOS Animation -->

<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


<!-- Swiper -->

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">


<!-- Custom CSS -->

<link rel="stylesheet"
href="{{ asset('assets/css/style.css') }}">

<!-- Site Styles -->
<link href="{{ asset('assets/css/header.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/navigation.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/hero.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/about.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/services.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/products.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/process.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/testimonials.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/faq.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/CTA.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/page-navigation.css') }}" rel="stylesheet">


</head>


<body>


@include('partials.header')

    <main>

        @yield('content')

    </main>

    @include('partials.footer')


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- AOS -->

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>


<!-- Swiper -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- Custom JS -->
<script src="{{ asset('assets/js/header.js') }}"></script>
<script src="{{ asset('assets/js/page-navigation.js') }}"></script>
<script src="{{ asset('assets/js/scroll-top.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>