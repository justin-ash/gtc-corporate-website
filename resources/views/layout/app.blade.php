<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>{{config('settings.app_name')}} - {{$seo->meta_title ?? ''}}</title>
  <meta name="keywords" content="{{ $seo->meta_keywords ?? '' }}">
  <meta name="description" content="{{ $seo->meta_description ?? '' }}">

  <!-- Stylesheets -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/flatpickr.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">

  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="page-wrapper">
    {{-- Header --}}
    @include('partials.header')

    @yield('content')

    {{-- Footer --}}
    @include('partials.footer')
  </div><!-- End Page Wrapper -->
  <script data-cfasync="false" src="{{ asset('js/email-decode.min.js') }}"></script>
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/slick.min.js') }}"></script>
  <script src="{{ asset('js/slick-animation.min.js') }}"></script>
  <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
  <script src="{{ asset('js/wow.js') }}"></script>
  <script src="{{ asset('js/appear.js') }}"></script>
  <script src="{{ asset('js/mixitup.js') }}"></script>
  <script src="{{ asset('js/flatpickr.js') }}"></script>
  <script src="{{ asset('js/swiper.min.js') }}"></script>
  <script src="{{ asset('js/gsap.min.js') }}"></script>
  <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
  <script src="{{ asset('js/SplitText.min.js') }}"></script>
  <script src="{{ asset('js/nice-select.min.js') }}"></script>
  <script src="{{ asset('js/knob.js') }}"></script>
  <script src="{{ asset('js/parallax.js') }}"></script>
  <script src="{{ asset('js/vanilla-tilt.js') }}"></script>
  <script src="{{ asset('js/splitting.js') }}"></script>
  <script src="{{ asset('js/splitType.js') }}"></script>
  <script src="{{ asset('js/script-gsap.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  @stack('scripts')
</body>

</html>