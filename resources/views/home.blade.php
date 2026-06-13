@extends('layout.app')

@section('content')

<!-- Banner area start here -->
<!-- <section class="banner-section">
  <div class="sec-shape"><img src="images/shape/banner-shape.png" alt="Image"></div>
  <button class="goBottom-btn">
    <svg class="animation__arryUpDown" width="16" height="36" viewBox="0 0 16 36" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M13.8328 6.33334C13.8328 5.17961 13.4907 4.0518 12.8497 3.09251C12.2088 2.13322 11.2977 1.38555 10.2318 0.944039C9.16591 0.502527 7.99302 0.387008 6.86146 0.612088C5.72991 0.837169 4.69051 1.39274 3.8747 2.20855C3.0589 3.02435 2.50332 4.06375 2.27824 5.19531C2.05316 6.32686 2.16868 7.49975 2.61019 8.56566C3.05171 9.63156 3.79938 10.5426 4.75867 11.1836C5.71795 11.8245 6.84577 12.1667 7.99949 12.1667C9.54602 12.1648 11.0287 11.5496 12.1222 10.4561C13.2158 9.3625 13.831 7.87986 13.8328 6.33334ZM3.83283 6.33334C3.83283 5.50925 4.0772 4.70366 4.53504 4.01846C4.99287 3.33325 5.64362 2.7992 6.40498 2.48384C7.16634 2.16847 8.00412 2.08596 8.81237 2.24673C9.62062 2.4075 10.3631 2.80434 10.9458 3.38706C11.5285 3.96978 11.9253 4.71221 12.0861 5.52046C12.2469 6.32871 12.1644 7.16649 11.849 7.92785C11.5336 8.68921 10.9996 9.33995 10.3144 9.79779C9.62916 10.2556 8.82358 10.5 7.99949 10.5C6.89474 10.499 5.83552 10.0597 5.05434 9.27849C4.27316 8.49731 3.83385 7.43809 3.83283 6.33334ZM15.2554 27.4108C15.3327 27.4882 15.3941 27.58 15.436 27.6811C15.4779 27.7822 15.4995 27.8905 15.4995 28C15.4995 28.1094 15.4779 28.2177 15.436 28.3188C15.3941 28.4199 15.3327 28.5118 15.2554 28.5891L8.58869 35.2558C8.51133 35.3332 8.41948 35.3946 8.31839 35.4365C8.2173 35.4783 8.10895 35.4999 7.99953 35.4999C7.8901 35.4999 7.78175 35.4783 7.68066 35.4365C7.57957 35.3946 7.48772 35.3332 7.41036 35.2558L0.743692 28.5891C0.591894 28.432 0.507898 28.2215 0.509797 28.003C0.511696 27.7845 0.599336 27.5755 0.753843 27.421C0.90835 27.2664 1.11736 27.1788 1.33586 27.1769C1.55436 27.175 1.76486 27.259 1.92203 27.4108L7.16616 32.655V18C7.16616 17.779 7.25396 17.567 7.41024 17.4107C7.56652 17.2545 7.77848 17.1667 7.99949 17.1667C8.22051 17.1667 8.43247 17.2545 8.58875 17.4107C8.74503 17.567 8.83283 17.779 8.83283 18V32.655L14.077 27.4109C14.1543 27.3334 14.2462 27.272 14.3473 27.2302C14.4484 27.1883 14.5567 27.1667 14.6661 27.1667C14.7756 27.1667 14.8839 27.1882 14.985 27.2301C15.0861 27.272 15.178 27.3334 15.2554 27.4108Z" fill="white" />
    </svg>
  </button>

  <div class="swiper banner-slider">
    <div class="swiper-wrapper">
      @foreach($banners as $banner)
      @php
      $gallery = json_decode($banner->image);
      $img = ($gallery[0]) ?? 'images/banner/banner-image1.jpg';
      @endphp
      <div class="swiper-slide">
        <div class="slide-bg" data-background="{{ asset($img) }}"></div>
        <div class="container">
          <div class="outer-box">
            <div class="row g-0 align-items-end">
              <div class="col-lg-9 content-column">
                <div class="inner-column">
                  <h1 class="title" data-animation="fadeInUp" data-delay=".5s">{{ $banner->main_title }}</h1><br>
                  <h6 class="sub-title" data-animation="fadeInUp" data-delay=".3s">{{ $banner->title}}</h6><br><br>
                  <a class="btn-one" data-animation="fadeInUp" data-delay=".8s" href="{{ route('services') }}">{{ $banner->button_link }}</a>
                  <a class="btn-one" data-animation="fadeInUp" data-delay=".8s" href="{{ route('contact') }}">Contact ></a>
                </div>
              </div>

              <div class="col-lg-3">
                <div class="text" data-animation="fadeInUp" data-delay=".9s">
                  <div class="banner-right-text "><img src="{{ asset('images/icons/handshake.png') }}" alt="Handshake"><span class="count-text">50 years of Excellence</span></div>
                  <div class="banner-right-text "><img src="{{ asset('images/icons/handshake.png') }}" alt="Trusted"><span class="count-text">Trusted by global Industries</span></div>
                  <div class="banner-right-text "><img src="{{ asset('images/icons/handshake.png') }}" alt="Sustainable"><span class="count-text">Sustainable Solutions</span></div>
                  <div class="banner-right-text "><img src="{{ asset('images/icons/handshake.png') }}" alt="Delivery"><span class="count-text">End to end project delivery</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section> -->
<section class="hero-section position-relative">

  <div id="heroBannerSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <!-- Indicators -->
    <div class="carousel-indicators">
      @foreach($banners as $key => $banner)
      <button type="button" data-bs-target="#heroBannerSlider" data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"></button>
      @endforeach
    </div>

    <div class="carousel-inner">

      <!-- Slide 1 -->
      @foreach($banners as $banner)
      @php
      $gallery = json_decode($banner->image);
      $img = ($gallery[0]) ?? 'images/banner/banner-image1.jpg';
      @endphp
      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
        <div class="container-fluid px-lg-5">
          <div class="row align-items-center">

            <div class="col-lg-5 mb-5 mb-lg-0">
              <div class="hero-content ps-lg-5">
                <h1 class="fw-bold display-4 mb-4">
                  {{ $banner->main_title }}
                </h1>

                <p class="lead text-muted mb-4">
                  {{ $banner->title}}
                </p>

                <div class="d-flex flex-wrap gap-3">
                  <a href="{{ route('services') }}" class="btn btn-success btn-lg px-4">
                    {{ $banner->button_link }}
                  </a>

                  <a href="{{ route('contact') }}" class="btn btn-outline-success btn-lg px-4">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>

            <div class="col-lg-7">
              <div class="hero-image-wrapper">
                <img src="{{ asset($img) }}"
                  class="img-fluid hero-image"
                  alt="Banner 1">
              </div>
            </div>

          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Navigation -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroBannerSlider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#heroBannerSlider" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>

  </div>

  <!-- Stats Box -->
  <div class="stats-card shadow-lg">
    <div class="row g-0">

      <div class="col-md-3 col-6">
        <div class="stat-item">
          <i class="fa-solid fa-shield-halved"></i>
          <div>
            <h3>50+</h3>
            <p>Years of Experience</p>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="stat-item">
          <i class="fa-solid fa-briefcase"></i>
          <div>
            <h3>100+</h3>
            <p>Happy Clients</p>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="stat-item">
          <i class="fa-solid fa-globe"></i>
          <div>
            <h3>6</h3>
            <p>Countries Served</p>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="stat-item border-end-0">
          <i class="fa-solid fa-users"></i>
          <div>
            <h3>100%</h3>
            <p>Client Commitment</p>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>
<!-- Banner area end here -->
<!-- <section class="hero-section position-relative">
  <div class="container-fluid px-lg-5">
    <div class="row align-items-center">

      <div class="col-lg-5 mb-5 mb-lg-0">
        <div class="hero-content ps-lg-5">
          <h1 class="fw-bold display-4 mb-4">
            Green Top
            <span class="text-success d-block">
              Construction
            </span>
          </h1>

          <p class="lead text-muted mb-4">
            Quality • Reliability • Excellence
          </p>

          <div class="d-flex flex-wrap gap-3">
            <a href="#" class="btn btn-success btn-lg px-4">
              Explore Our Solutions
              <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>

            <a href="#" class="btn btn-outline-success btn-lg px-4">
              About Us
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="hero-image-wrapper">
          <img src="uploads\banner\69f89ea2bb24f.jpg"
            alt="Hero Image"
            class="img-fluid hero-image">
        </div>
      </div>

    </div>

    <div class="stats-card shadow-lg">

      <div class="row g-0">

        <div class="col-md-3 col-6">
          <div class="stat-item">
            <i class="fa-solid fa-shield-halved"></i>
            <div>
              <h3>50+</h3>
              <p>Years of Experience</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-6">
          <div class="stat-item">
            <i class="fa-solid fa-briefcase"></i>
            <div>
              <h3>100+</h3>
              <p>Completed Projects</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-6">
          <div class="stat-item">
            <i class="fa-solid fa-globe"></i>
            <div>
              <h3>6</h3>
              <p>Countries Served</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-6">
          <div class="stat-item border-end-0">
            <i class="fa-solid fa-users"></i>
            <div>
              <h3>100%</h3>
              <p>Client Commitment</p>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</section> -->

<!-- About area start here -->
<section class="about-section pt-80 pb-80 paralax__animation">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 content-column">
        <div class="inner-column">
          <div class="content-box">
            <div class="sec-title">
              <div class="section-tag">
                ABOUT US
              </div>
              <h3 class="title wow splt-txt" data-splitting> {{$widgets['HOME_ABOUT_US_TITLE']['title']}}</h3>
              <p class="text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{{$widgets['HOME_ABOUT_US_TITLE']['description']}}</p>
              <div class="pt-20">
                <a class="btn-common" data-animation="fadeInUp" data-delay=".8s" href="{{ route('about') }}">Learn More about Us<i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 image-column wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="inner-column">
          <div data-depth="0.01" class="image1 overlay-anim">
            <img src="images/about/about-image2.jpg" alt="Image">
          </div>
          <!-- <div class="info animation__arryLeftRight">
            <img src="images/about/about-info.png" alt="Image">
          </div> -->
          <!-- <div class="image2 overlay-anim" data-depth="0.05">
            <img src="images/about/about-image2.jpg" alt="Image">
          </div> -->
        </div>
      </div>


      <div class="col-lg-4 content-column">
        <div class="inner-column">
          <div class="content-box">
            {!! $widgets['HOME_ABOUT_DETAIL']['description'] !!}
          </div>

          <div class="progress mt-30">
            <div class="progress-single">
              <h5 class="progress-title">Business Success</h5>
              <div class="bar">
                <div class="bar-inner count-bar" data-percent="80%">
                  <div class="count-text">88%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About area end here -->

<!-- Case area start here -->
<section class="solutions-section">
  <div class="container">

    <div class="section-header">

      <div>
        <div class="section-tag">
          OUR SOLUTIONS
        </div>

        <h3 class="section-title">
          End-to-End Solutions for Every Challenge
        </h3>
      </div>

      <!-- <a href="#" class="view-all-btn">
        View All Services
        <i class="fa-solid fa-arrow-right"></i>
      </a> -->

    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
      @foreach($services as $service)
      <div class="col">
        <div class="solution-card">
          <div class="solution-icon">
            <i class="fa-solid {{ $service->icon }}"></i>
          </div>

          <h4>{{ $service->title }}</h4>

          <p>{{ $service->short_description }}</p>

          <a href="{{ $service->link }}" class="card-arrow">
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>
<!-- Case area end here -->
<section class="featured-projects py-5">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">

      <div>
        <div class="section-tag">
          FEATURED PORTFOLIO
        </div>

        <h3 class="section-title">
          One Vision Multiple Ventures
        </h3>
      </div>

      <a href="{{ route('portfolio') }}" class="view-projects">
        View All Portfolio
        <i class="fa-solid fa-arrow-right"></i>
      </a>

    </div>

    <div class="row g-4">
      @foreach($projects as $project)
      <!-- Card 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="project-card">

          <img src="{{ asset($project->gallery[0]) }}" alt="Project">

          <div class="project-content">

            <div class="project-icon">
              <i class="fa-solid {{$project->icon}}"></i>
            </div>

            <div class="project-details">
              <h5>{{ $project->project_name }}</h5>
              <div class="project-info">{{ $project->project_type }}</div>
            </div>

          </div>

        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>
<!-- Choose area start here .choose-block .pie-graph .icon-->
<section class="choose-section pt-40 pb-70">
  <div class="container">
    <div class="row g-4">
      <div class="col-xl-4 content-column">
        <div class="inner-column">
          <div class="sec-title mb-30">
            <div class="section-tag">
              WHY CHOOSE US
            </div>
            <h3 class="title wow splt-txt" data-splitting>{!! $widgets['MISSION_AND_VISION']['title'] !!}</h3>
          </div>

          <div class="choose-tab">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> About Us</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> Our Mission</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> Our Vision</button>
              </li>
            </ul>
          </div>

          <div class="tab-content mt-30" id="myTabContent">
            {!! $widgets['MISSION_AND_VISION']['description'] !!}
          </div>
        </div>
      </div>
      <div class="col-xl-1">
      </div>
      <div class="col-xl-7 image-column">
        <div class="experience-card">

          <div class="experience-left">

            <div class="stat-block">
              <div class="pie-graph">
                <div class="graph-outer">
                  <input type="text" class="dial" data-fgColor="#000" data-bgColor="#FFFFFF33" data-width="70"
                    data-height="70" data-linecap="normal" value="70">
                </div>
                <i class="fa-solid icon fa-arrow-up-right"></i>
              </div>

              <div>
                <h3>50+</h3>
                <p>Years of Experience</p>
              </div>
            </div>

            <div class="divider"></div>

            <div class="stat-block">
              <div class="pie-graph">
                <div class="graph-outer">
                  <input type="text" class="dial" data-fgColor="#000" data-bgColor="#FFFFFF33" data-width="70" data-height="70" data-linecap="normal" value="90">
                </div>
                <i class="fa-solid icon fa-arrow-up-right"></i>
              </div>

              <div>
                <h3>100+</h3>
                <p>Happy Clients</p>
              </div>
            </div>

          </div>

          <div class="experience-right">
            <img src="images/choose/choose-image1.png" alt="Construction">
          </div>

        </div>

      </div>
    </div>
  </div>
</section>

<!-- Testimonial area end here -->
<section class="processing-section pt-20 pb-20">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4 right-bar">
        <div class="process-block">
          <div class="sec-title mb-10">
            OUR APPROCH
          </div>
          <h3>Delivering Connections.<br>Delivering Confidance.</h3>
          <p>Collaboration, solutions, and integrity at the core of every successful partnership</p>
          <a class="btn btn-one" href="">Work With us <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-2 right-bar">
        <div class="process-block ">
          <div class="inner-box">
            <div class="icon"><i class="fa-solid fa-shield-halved"></i></div>
            <h4 class="title">Reliable solution</h4>
            <p>Delivering safe, innovative and effective solutions.</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 right-bar">
        <div class="process-block ">
          <div class="inner-box">
            <div class="icon"><i class="fa-solid fa-award"></i></div>
            <h4 class="title">Expertise you can trust</h4>
            <p>Delivering safe, innovative and effective solutions.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 fade-image-box">
        <img class="img-fluid" src="https://gtc.leafcodes.in/images/bg/growth-bg.jpg" alt="Team Meeting">
        <div class="process-block content-box1">

          <div class="inner-box">
            <div class="icon"><i class="fa-solid fa-leaf"></i></div>
            <h4 class="title">Sustainable solutions</h4>
            <p>Delivering safe, innovative and effective solutions.</p>
          </div>
        </div>
      </div>

    </div>
</section>
<!-- Processing area start here -->
<section class="choose-section pt-20 pb-20">

  <div class="container">
    <div class="sec-title center mb-30">
      <!-- <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">{!! $widgets['HOW_IT_WORKS_TITLE']['title']!!}</h6>
      <h2 class="title wow splt-txt" data-splitting>{!! $widgets['HOW_IT_WORKS_TITLE']['description']!!}
      </h2> -->
    </div>
    <div class="row">
      <div class="col-md-2">
        <p>TRUSTED BY <br> LEADING ORGANIZATIONS</p>
      </div>
      <div class="col-md-10">
        <div class="outer-box">
          <div class="logo-slider">
            <div class="logo-slide-track">

              <div class="logo-slide"><img src="{{asset('images/logos/a.jpeg')}}"></div>
              <div class="logo-slide"><img src="{{asset('images/logos/b.jpeg')}}"></div>
              <div class="logo-slide"><img src="{{asset('images/logos/c.jpeg')}}"></div>
              <div class="logo-slide"><img src="{{asset('images/logos/d.jpeg')}}"></div>
              <div class="logo-slide"><img src="{{asset('images/logos/e.jpeg')}}"></div>

              <div class="logo-slide"><img src="{{asset('images/logos/a.jpeg')}}"></div>
              <div class="logo-slide"><img src="{{asset('images/logos/b.jpeg')}}"></div>
              <div class="logo-slide"><img src="{{asset('images/logos/c.jpeg')}}"></div>
              <div class="logo-slide"><img src="{{asset('images/logos/d.jpeg')}}"></div>
              <div class="logo-slide"><img src="{{asset('images/logos/e.jpeg')}}"></div>


            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@push('scripts')
<script>
  const heroSlider = document.querySelector('#heroBannerSlider');

  new bootstrap.Carousel(heroSlider, {
    interval: 3000,
    ride: 'carousel',
    pause: false,
    wrap: true
  });
</script>
@endpush
@endsection