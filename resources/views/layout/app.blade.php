
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Consultez - Business Consulting HTML Template | Home Page 01</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/flatpickr.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
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
  <script data-cfasync="false" src="js/email-decode.min.js"></script><script src="js/jquery.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/slick-animation.min.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/appear.js"></script>
  <script src="js/mixitup.js"></script>
  <script src="js/flatpickr.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/gsap.min.js"></script>
  <script src="js/ScrollTrigger.min.js"></script>
  <script src="js/SplitText.min.js"></script>
  <script src="js/nice-select.min.js"></script>
  <script src="js/knob.js"></script>
  <script src="js/parallax.js"></script>
  <script src="js/vanilla-tilt.js"></script>
  <script src="js/splitting.js"></script>
  <script src="js/splitType.js"></script>
  <script src="js/script-gsap.js"></script>
  <script src="js/script.js"></script>
<!-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"88f4fa328f314d4c95a104b4a60b2313","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script> -->
</body>

</html>