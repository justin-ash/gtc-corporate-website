<!-- Preloader -->
<div class="preloader"></div>

<!-- Main Header-->
<header class="main-header header-style-one">
  <!-- Header Top -->
  <div class="header-top">
    <div class="auto-container">

      <div class="top-left">
        <!-- Info List -->
        <ul class="info-list">
          <li><i class="fa-solid fa-envelope"></i> <a href="#"><span class="__cf_email__">{{config('settings.email')}}</span></a>
          </li>
          <li><i class="fa-solid fa-location-dot"></i> {{config('settings.address')}}</li>
        </ul>
      </div>

      <div class="top-right">
        <ul class="useful-links">
          <li><a href="{{ route('about')}}">About</a></li>
          <li><a href="{{ route('services')}}">Services</a></li>
          <li><a href="{{ route('contact')}}">Contact</a></li>
        </ul>
        <ul class="top-social-icon">
          <li><a href="{{config('settings.facebook')}}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="{{config('settings.instagram')}}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="{{config('settings.twitter')}}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
          <li><a href="{{config('settings.linkedin')}}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Header Top -->

  <!-- Main box -->
  <div class="main-box">
    <div class="logo-box">
      <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="" title="Consultez"></a></div>
    </div>
    <!--Nav Box-->
    <div class="nav-outer">
      <nav class="nav main-menu">
        <ul class="navigation">
          <li><a href="{{ route('home')}}">Home</a></li>
          <li><a href="{{ route('about')}}">About Us</a></li>
          <li><a href="{{ route('services')}}">Services</a></li>
          <li><a href="{{ route('projects')}}">Projects</a></li>
          <!-- <li><a href="{{ route('divisions')}}">Divisions Overview</a></li> -->
          <li><a href="{{ route('contact')}}">Contact</a></li>
        </ul>
      </nav>
      <!-- Main Menu End-->
    </div>
    <div class="outer-box">
      <div class="info-box">
        <div class="call-info">
          <i class="fa-solid fa-phone ring__animation"></i>
          <div>
            <h6 class="title">Phone:</h6>
            <a href="tel:{{config('settings.phone')}}">{{config('settings.phone')}}</a>
          </div>
        </div>
        <a class="btn-two" href="{{ route('contact') }}">Contact Now</a>
      </div>
      <div class="mobile-nav-toggler d-block d-lg-none"><i class="icon lnr-icon-bars"></i></div>
      <!-- Mobile Nav toggler -->
    </div>
  </div>
  <div class="auto-container">
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
      <nav class="menu-box">
        <div class="upper-box">
          <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo-light.png') }}" alt=""></a></div>
          <div class="close-btn"><i class="icon fa fa-times"></i></div>
        </div>
        <ul class="navigation clearfix d-block d-lg-none">
          <!--Keep This Empty / Menu will come through Javascript-->
        </ul>
        <div class="content-box d-none d-lg-block">
          <h4 class="title">{{$widgets['SIDEBAR_ABOUT']['title']}}</h4>
          <p class="text">{!!$widgets['SIDEBAR_ABOUT']['description']!!}</p>
        </div>
        <ul class="contact-list-one">
          <li>
            <!-- Contact Info Box -->
            <div class="contact-info-box">
              <i class="icon lnr-icon-phone-handset"></i>
              <span class="title">Call Now</span>
              <a href="tel:{{config('settings.phone')}}">{{config('settings.phone')}}</a>
            </div>
          </li>
          <li>
            <!-- Contact Info Box -->
            <div class="contact-info-box">
              <span class="icon lnr-icon-envelope1"></span>
              <span class="title">Send Email</span>
              <a href="/cdn-cgi/l/email-protection#a5cdc0c9d5e5c6cac8d5c4cbdc8bc6cac8"><span class="__cf_email__">{{config('settings.email')}}</span></a>
            </div>
          </li>
          <li>
            <!-- Contact Info Box -->
            <div class="contact-info-box">
              <span class="icon lnr-icon-clock"></span>
              <span class="title">Send Email</span>
              {!!$widgets['CONTACT_TIMING']['description'] !!}
            </div>
          </li>
        </ul>
        <ul class="social-links">
          <li><a href="{{config('settings.facebook')}}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="{{config('settings.instagram')}}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="{{config('settings.twitter')}}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
          <li><a href="{{config('settings.linkedin')}}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
        </ul>
      </nav>
    </div>
    <!-- End Mobile Menu -->
    <!-- Header Search -->
    <div class="search-popup">
      <span class="search-back-drop"></span>
      <button class="close-search"><span class="fa fa-times"></span></button>
      <div class="search-inner">
        <form method="post" action="{{ route('home') }}">
          <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search..." required="">
            <button type="submit"><i class="fa fa-search"></i></button>
          </div>
        </form>
      </div>
    </div>
    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
      <div class="auto-container">
        <div class="inner-container">
          <!--Logo-->
          <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
          </div>
          <!--Right Col-->
          <div class="nav-outer">
            <!-- Main Menu -->
            <nav class="main-menu">
              <div class="navbar-collapse show collapse clearfix">
                <ul class="navigation clearfix">
                  <!--Keep This Empty / Menu will come through Javascript-->
                </ul>
              </div>
            </nav><!-- Main Menu End-->
            <!--Mobile Navigation Toggler-->
            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
          </div>
        </div>
      </div>
    </div><!-- End Sticky Menu -->
  </div>
</header>