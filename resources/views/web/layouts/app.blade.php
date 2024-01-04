<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEO::generate() !!}

    <x-website.fav-icon />
    <link rel="stylesheet" href="{{ defWebAssets('css/animate.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('bootstrap/css/bootstrap.min_en.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('owlcarousel/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('owlcarousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/slick.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/responsive.css') }}">

    <link rel="stylesheet" href="{{ defWebAssets('css/style_edit.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style_def.css') }}">

    <link rel="stylesheet" href="{{ defWebAssets('css/custom_style.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/custom_en.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/custom_style_new.css') }}">
    @yield('AddStyle')
    @livewireStyles
</head>
<body dir="ltr">

<x-website.html-loader/>

<header class="header_wrap">
    @if(count(config('app.WebLang')) > 1 )
        @include('web.layouts.inc.header_top')
    @endif

{{--    @include('web.layouts.inc.header_middle')--}}
    @include('web.layouts.inc.menu')
</header>


@yield('breadcrumb')



<div class="main_content">
    @yield('content')
</div>

@include('web.layouts.inc.footer')

<!-- Latest jQuery -->
<script src="{{ defWebAssets('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ defWebAssets('js/jquery-ui.js') }}"></script>
<script src="{{ defWebAssets('js/popper.min.js') }}"></script>
<script src="{{ defWebAssets('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ defWebAssets('owlcarousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ defWebAssets('js/magnific-popup.min.js') }}"></script>
<script src="{{ defWebAssets('js/waypoints.min.js') }}"></script>
<script src="{{ defWebAssets('js/parallax.js') }}"></script>
<script src="{{ defWebAssets('js/jquery.countdown.min.js') }}"></script>
<script src="{{ defWebAssets('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ defWebAssets('js/isotope_en.min.js') }}"></script>
<script src="{{ defWebAssets('js/jquery.dd.min.js') }}"></script>
<script src="{{ defWebAssets('js/slick.min.js') }}"></script>
<script src="{{ defWebAssets('js/jquery.show-more.js') }}"></script>

@yield('AddScript')
<!-- elevatezoom js -->
<script src="{{ defWebAssets('js/jquery.elevatezoom.js') }}"></script>

@yield('googleMaps')

<!-- scripts js -->
<script src="{{ defWebAssets('js/scripts.js') }}"></script>
<script>
    async function loadarfont_en(){
        const font_en = new FontFace('Poppins','url({{ defWebAssets('fonts/En/Poppins-Regular.woff2') }}');
        await font_en.load();
        document.fonts.add(font_en);
        document.body.classList.add('Poppins');
    };
    loadarfont_en();
</script>

@livewireScripts
<script>
    document.addEventListener('livewire:load', () => {
        Livewire.onPageExpired((response, message) => {})
    })
</script>
</body>
</html>
