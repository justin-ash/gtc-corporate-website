@extends('layout.app')

@section('content')

<section class="hero-section position-relative">

  <!-- <div id="heroBannerSlider" class="carousel slide carousel-fade" data-bs-ride="carousel"> -->
  <div id="heroBannerSlider" class="carousel slide" data-bs-ride="carousel">

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
          OUR COMPANIES
        </div>

        <h3 class="section-title">
          End-to-End Solutions for Every Challenge
        </h3>
      </div>

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
    interval: 5000,
    ride: 'carousel',
    pause: false,
    wrap: true
  });
</script>
@endpush
@endsection