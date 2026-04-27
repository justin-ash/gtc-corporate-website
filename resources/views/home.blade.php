@extends('layout.app')

@section('content')
<!-- Banner area start here -->
<section class="banner-section">
  <div class="arry"><img class="animation__arryLeftRight" src="images/shape/banner-arry.png" alt="Image"></div>
  <div class="sec-shape"><img src="images/shape/banner-shape.png" alt="Image"></div>
  <button class="goBottom-btn">
    <svg class="animation__arryUpDown" width="16" height="36" viewBox="0 0 16 36" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M13.8328 6.33334C13.8328 5.17961 13.4907 4.0518 12.8497 3.09251C12.2088 2.13322 11.2977 1.38555 10.2318 0.944039C9.16591 0.502527 7.99302 0.387008 6.86146 0.612088C5.72991 0.837169 4.69051 1.39274 3.8747 2.20855C3.0589 3.02435 2.50332 4.06375 2.27824 5.19531C2.05316 6.32686 2.16868 7.49975 2.61019 8.56566C3.05171 9.63156 3.79938 10.5426 4.75867 11.1836C5.71795 11.8245 6.84577 12.1667 7.99949 12.1667C9.54602 12.1648 11.0287 11.5496 12.1222 10.4561C13.2158 9.3625 13.831 7.87986 13.8328 6.33334ZM3.83283 6.33334C3.83283 5.50925 4.0772 4.70366 4.53504 4.01846C4.99287 3.33325 5.64362 2.7992 6.40498 2.48384C7.16634 2.16847 8.00412 2.08596 8.81237 2.24673C9.62062 2.4075 10.3631 2.80434 10.9458 3.38706C11.5285 3.96978 11.9253 4.71221 12.0861 5.52046C12.2469 6.32871 12.1644 7.16649 11.849 7.92785C11.5336 8.68921 10.9996 9.33995 10.3144 9.79779C9.62916 10.2556 8.82358 10.5 7.99949 10.5C6.89474 10.499 5.83552 10.0597 5.05434 9.27849C4.27316 8.49731 3.83385 7.43809 3.83283 6.33334ZM15.2554 27.4108C15.3327 27.4882 15.3941 27.58 15.436 27.6811C15.4779 27.7822 15.4995 27.8905 15.4995 28C15.4995 28.1094 15.4779 28.2177 15.436 28.3188C15.3941 28.4199 15.3327 28.5118 15.2554 28.5891L8.58869 35.2558C8.51133 35.3332 8.41948 35.3946 8.31839 35.4365C8.2173 35.4783 8.10895 35.4999 7.99953 35.4999C7.8901 35.4999 7.78175 35.4783 7.68066 35.4365C7.57957 35.3946 7.48772 35.3332 7.41036 35.2558L0.743692 28.5891C0.591894 28.432 0.507898 28.2215 0.509797 28.003C0.511696 27.7845 0.599336 27.5755 0.753843 27.421C0.90835 27.2664 1.11736 27.1788 1.33586 27.1769C1.55436 27.175 1.76486 27.259 1.92203 27.4108L7.16616 32.655V18C7.16616 17.779 7.25396 17.567 7.41024 17.4107C7.56652 17.2545 7.77848 17.1667 7.99949 17.1667C8.22051 17.1667 8.43247 17.2545 8.58875 17.4107C8.74503 17.567 8.83283 17.779 8.83283 18V32.655L14.077 27.4109C14.1543 27.3334 14.2462 27.272 14.3473 27.2302C14.4484 27.1883 14.5567 27.1667 14.6661 27.1667C14.7756 27.1667 14.8839 27.1882 14.985 27.2301C15.0861 27.272 15.178 27.3334 15.2554 27.4108Z" fill="white" />
    </svg>
  </button>

  <div class="swiper banner-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-bg" data-background="images/banner/banner-image1.jpg"></div>
        <div class="container">
          <div class="outer-box">
            <div class="row g-0 align-items-end">
              <div class="col-lg-8 content-column">
                <div class="inner-column">
                  <h6 class="sub-title" data-animation="fadeInUp" data-delay=".3s">{{$widgets['BANNER_TEXT']['title']}}</h6>
                  </h6>
                  <h1 class="title" data-animation="fadeInUp" data-delay=".5s">{!! $widgets['BANNER_TEXT']['description'] !!}
                  </h1>
                  <a class="btn-one" data-animation="fadeInUp" data-delay=".8s" href="{{ route('contact') }}">free consultation</a>
                </div>
              </div>

              <div class="col-lg-4">
                <p class="text" data-animation="fadeInUp" data-delay=".9s">{!! $widgets['BANNER_RIGHT']['title'] !!}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-bg" data-background="images/banner/banner-image2.jpg"></div>
        <div class="container">
          <div class="outer-box">
            <div class="row g-0 align-items-end">
              <div class="col-lg-8 content-column">
                <div class="inner-column">
                  <h6 class="sub-title" data-animation="fadeInUp" data-delay=".3s">{{$widgets['BANNER_TEXT']['title']}}
                  </h6>
                  <h1 class="title" data-animation="fadeInUp" data-delay=".5s">{!! $widgets['BANNER_TEXT']['description'] !!}
                  </h1>
                  <a class="btn-one" data-animation="fadeInUp" data-delay=".8s" href="{{ route('contact') }}">free consultation</a>
                </div>
              </div>

              <div class="col-lg-4">
                <p class="text" data-animation="fadeInUp" data-delay=".9s">{!! $widgets['BANNER_RIGHT']['title'] !!}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-bg" data-background="images/banner/banner-image3.jpg"></div>
        <div class="container">
          <div class="outer-box">
            <div class="row g-0 align-items-end">
              <div class="col-lg-8 content-column">
                <div class="inner-column">
                  <h6 class="sub-title" data-animation="fadeInUp" data-delay=".3s">{{$widgets['BANNER_TEXT']['title']}}
                  </h6>
                  <h1 class="title" data-animation="fadeInUp" data-delay=".5s">{!! $widgets['BANNER_TEXT']['description'] !!}
                  </h1>
                  <a class="btn-one" data-animation="fadeInUp" data-delay=".8s" href="{{ route('contact') }}">free consultation</a>
                </div>
              </div>

              <div class="col-lg-4">
                <p class="text" data-animation="fadeInUp" data-delay=".9s">{!! $widgets['BANNER_RIGHT']['title'] !!}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Banner area end here -->

<!-- About area start here -->
<section class="about-section pt-120 pb-120 paralax__animation">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 image-column wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="inner-column">
          <div data-depth="0.01" class="image1 overlay-anim">
            <img src="images/about/about-image1.jpg" alt="Image">
          </div>
          <div class="info animation__arryLeftRight">
            <img src="images/about/about-info.png" alt="Image">
          </div>
          <div class="image2 overlay-anim" data-depth="0.05">
            <img src="images/about/about-image2.jpg" alt="Image">
          </div>
        </div>
      </div>

      <div class="col-lg-6 content-column">
        <div class="inner-column">
          <div class="content-box">
            <div class="sec-title">
              <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">ABOUT US</h6>
              <h2 class="title wow splt-txt" data-splitting> {{$widgets['HOME_ABOUT_US_TITLE']['title']}}</h2>
              <p class="text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{{$widgets['HOME_ABOUT_US_TITLE']['description']}}</p>
            </div>
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

          <!-- <div class="info mt-50">
            <a href="{{ route('projects') }}" class="btn-two">Find projects</a>
            <div class="user">
              <div class="image">
                <img src="images/about/about-user.png" alt="Image">
              </div>
              <div>
                <img src="images/about/signature.png" alt="Image">
                <p class="sub-title">Founder</p>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>
  </div>
</section>
<!-- About area end here -->

<!-- Case area start here -->
<section class="case-section have-combine pt-120 pb-120" style="background-color: #1A4137;">
  <div class="outer-box">
    <div class="sec-title center mb-50">
      <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Portfolio</h6>
      <h2 class="title wow splt-txt" data-splitting style="color: white;">Showcasing Project & Solutions <br> for Clients case study.</h2>
    </div>
    <div class="swiper case-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image1.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">Cyber Security</span>
                <h4 class="title"><a href="page-case.html">Revolutionizing Brand Strategy</a></h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">Cyber Security</span>
                <h4 class="title"><a href="page-case-details.html">Revolutionizing Brand Strategy</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image2.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">IT Solution</span>
                <h4 class="title"><a href="page-case.html">Technology and artificial Maintenance</a></h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">IT Solution</span>
                <h4 class="title"><a href="page-case-details.html">Technology and artificial Maintenance</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image3.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">Business Consultation</span>
                <h4 class="title"><a href="page-case.html">Business Strategy to Cut Costs by 30%</a>
                </h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">Business Consultation</span>
                <h4 class="title"><a href="page-case-details.html">Business Strategy to Cut Costs by 30%</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image4.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">Digital Agency</span>
                <h4 class="title"><a href="page-case.html">Transforming Legacy Systems</a></h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">Digital Agency</span>
                <h4 class="title"><a href="page-case-details.html">Transforming Legacy Systems</a></h4>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image1.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">Cyber Security</span>
                <h4 class="title"><a href="page-case.html">Revolutionizing Brand Strategy</a></h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">Cyber Security</span>
                <h4 class="title"><a href="page-case-details.html">Revolutionizing Brand Strategy</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image2.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">IT Solution</span>
                <h4 class="title"><a href="page-case.html">Technology and artificial Maintenance</a></h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">IT Solution</span>
                <h4 class="title"><a href="page-case-details.html">Technology and artificial Maintenance</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image3.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">Business Consultation</span>
                <h4 class="title"><a href="page-case.html">Business Strategy to Cut Costs by 30%</a>
                </h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">Business Consultation</span>
                <h4 class="title"><a href="page-case-details.html">Business Strategy to Cut Costs by 30%</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image4.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">Digital Agency</span>
                <h4 class="title"><a href="page-case.html">Transforming Legacy Systems</a></h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">Digital Agency</span>
                <h4 class="title"><a href="page-case-details.html">Transforming Legacy Systems</a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Case area end here -->

<!-- Choose area start here -->
<section class="choose-section pt-120 pb-120">
  <div class="container">
    <div class="row g-4">
      <div class="col-xl-6 content-column">
        <div class="inner-column">
          <div class="sec-title mb-30">
            <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Mission & Vision</h6>
            <h2 class="title wow splt-txt" data-splitting>we handle complexities, so you can drive growth and success.</h2>
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
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="content-box">
                <p class="text"> At veroeos accusamus dignissimos ducimus blanditiis volupta delenite atque corrupti quos dolores et quas molestias excepturi sint occaecatie</p>
                <div class="list mt-30 mb-50">
                  <ul>
                    <li>
                      <i class="fa-solid fa-check"></i> Optimized Sprint Planning
                    </li>
                    <li>
                      <i class="fa-solid fa-check"></i> Continuous Improvement
                    </li>
                  </ul>

                  <ul>
                    <li>
                      <i class="fa-solid fa-check"></i> Incremental Delivery Approach
                    </li>
                    <li>
                      <i class="fa-solid fa-check"></i> Delivering Innovative
                    </li>
                  </ul>

                </div>
                <a href="page-about.html" class="btn-two">Discover More</a>
              </div>
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="content-box">
                <p class="text"> At veroeos accusamus dignissimos ducimus blanditiis volupta delenite atque corrupti quos dolores et quas molestias excepturi sint occaecatie</p>
                <div class="list mt-30 mb-50">
                  <ul>
                    <li>
                      <i class="fa-solid fa-check"></i> Optimized Sprint Planning
                    </li>
                    <li>
                      <i class="fa-solid fa-check"></i> Continuous Improvement
                    </li>
                  </ul>

                  <ul>
                    <li>
                      <i class="fa-solid fa-check"></i> Incremental Delivery Approach
                    </li>
                    <li>
                      <i class="fa-solid fa-check"></i> Delivering Innovative
                    </li>
                  </ul>

                </div>
                <a href="page-about.html" class="btn-two">Discover More</a>
              </div>
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="content-box">
                <p class="text"> At veroeos accusamus dignissimos ducimus blanditiis volupta delenite atque corrupti quos dolores et quas molestias excepturi sint occaecatie</p>
                <div class="list mt-30 mb-50">
                  <ul>
                    <li>
                      <i class="fa-solid fa-check"></i> Optimized Sprint Planning
                    </li>
                    <li>
                      <i class="fa-solid fa-check"></i> Continuous Improvement
                    </li>
                  </ul>

                  <ul>
                    <li>
                      <i class="fa-solid fa-check"></i> Incremental Delivery Approach
                    </li>
                    <li>
                      <i class="fa-solid fa-check"></i> Delivering Innovative
                    </li>
                  </ul>
                </div>
                <a href="page-about.html" class="btn-two">Discover More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 image-column">
        <div class="inner-column">
          <figure class="image">
            <img class="wow imageUpToDown" src="images/choose/choose-image1.jpg" alt="Image">
            <div class="outer-box">
              <div class="choose-block">
                <!-- pie-graph -->
                <div class="pie-graph">
                  <div class="graph-outer">
                    <input type="text" class="dial" data-fgColor="#000" data-bgColor="#FFFFFF33" data-width="70" data-height="70" data-linecap="normal" value="90">
                  </div>
                  <i class="fa-solid icon fa-arrow-up-right"></i>
                </div>
                <div class="content-box">
                  <div class="inner-text count-box"><span class="count-text" data-stop="95" data-speed="2000"></span>%</div>
                  <h5 class="title">Project Done</h5>
                </div>
              </div>
              <div class="choose-block">
                <!-- pie-graph -->
                <div class="pie-graph">
                  <div class="graph-outer">
                    <input type="text" class="dial" data-fgColor="#000" data-bgColor="#FFFFFF33" data-width="70"
                      data-height="70" data-linecap="normal" value="70">
                  </div>
                  <i class="fa-solid icon fa-arrow-up-right"></i>
                </div>
                <div class="content-box">
                  <div class="inner-text count-box"><span class="count-text" data-stop="50" data-speed="2000"></span>% </div>
                  <h5 class="title">Complete Project</h5>
                </div>
              </div>
            </div>
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Choose area end here -->
<!-- Growth area start here -->
<section class="growth-section pt-120 pb-120" data-background="images/bg/growth-bg.jpg">
  <div class="sec-shape">
    <img class="sway_Y__animation" src="images/shape/growth-shape.png" alt="Image">
  </div>
  <div class="container">
    <div class="sec-title pb-50 mb-50">
      <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Growth Rate</h6>
      <div class="flex-content">
        <h2 class="title text-white wow splt-txt" data-splitting>Building Connections for grow <br> Limitless Opportunities.</h2>
        <a class="btn-one-light border-0 rounded-0 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" href="page-about.html">Discover More</a>
      </div>
    </div>
    <div class="row g-5">
      <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="growth-block">
          <!-- pie-graph -->
          <div class="pie-graph">
            <div class="graph-outer">
              <input type="text" class="dial" data-fgColor="#C6D936" data-bgColor="#fff" data-width="120"
                data-height="120" data-linecap="normal" value="90">
              <div class="inner-text count-box"><span class="count-text" data-stop="90" data-speed="2000"></span>%
              </div>
            </div>
          </div>
          <div class="content-box">
            <h4 class="title">Scalable Solutions</h4>
            <p class="text">End to end fiber optic cable nnectivity for stable</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="growth-block">
          <!-- pie-graph -->
          <div class="pie-graph">
            <div class="graph-outer">
              <input type="text" class="dial" data-fgColor="#C6D936" data-bgColor="#fff" data-width="120" data-height="120" data-linecap="normal" value="95">
              <div class="inner-text count-box"><span class="count-text" data-stop="95" data-speed="2000"></span>%</div>
            </div>
          </div>
          <div class="content-box">
            <h4 class="title">Automation Features</h4>
            <p class="text">End to end fiber optic cable nnectivity for stable</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
        <div class="growth-block">
          <!-- pie-graph -->
          <div class="pie-graph">
            <div class="graph-outer">
              <input type="text" class="dial" data-fgColor="#C6D936" data-bgColor="#fff" data-width="120"
                data-height="120" data-linecap="normal" value="75">
              <div class="inner-text count-box"><span class="count-text" data-stop="75" data-speed="2000"></span>%
              </div>
            </div>
          </div>
          <div class="content-box">
            <h4 class="title">24/7 Support</h4>
            <p class="text">End to end fiber optic cable nnectivity for stable</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Growth area end here -->

<!-- Processing area start here -->
<section class="processing-section pt-120 pb-120">
  <div class="shape">
    <img class="animation__rotate" src="images/shape/dual-circle.png" alt="Image">
  </div>
  <div class="container">
    <div class="sec-title center mb-50">
      <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">{!! $widgets['HOW_IT_WORKS_TITLE']['title']!!}</h6>
      <h2 class="title wow splt-txt" data-splitting>{!! $widgets['HOW_IT_WORKS_TITLE']['description']!!}
      </h2>
    </div>

    <div class="outer-box">
      <div class="row g-0">
        <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
          <div class="processing-block">
            <div class="inner-box">
              <h3 class="number">01</h3>
              <h4 class="title">{!! $widgets['HOME_HOW_IT_WORKS_1']['title'] !!}</h4>
              <p class="text">{!! $widgets['HOME_HOW_IT_WORKS_1']['description'] !!}</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
          <div class="processing-block">
            <div class="inner-box">
              <h3 class="number">02</h3>
              <h4 class="title">{!! $widgets['HOME_HOW_IT_WORKS_2']['title'] !!}</h4>
              <p class="text">{!! $widgets['HOME_HOW_IT_WORKS_2']['description'] !!}</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
          <div class="processing-block">
            <div class="inner-box">
              <h3 class="number">03</h3>
              <h4 class="title">{!! $widgets['HOME_HOW_IT_WORKS_3']['title'] !!}</h4>
              <p class="text">{!! $widgets['HOME_HOW_IT_WORKS_3']['description'] !!}</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
          <div class="processing-block">
            <div class="inner-box last-block">
              <h3 class="number">04</h3>
              <h4 class="title">{!! $widgets['HOME_HOW_IT_WORKS_4']['title'] !!}</h4>
              <p class="text">{!! $widgets['HOME_HOW_IT_WORKS_4']['description'] !!}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h5 class="sec-text mt-50 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">{!! $widgets['HOW_IT_WORKS_CONTACT_LINK']['description']!!}</h5>
  </div>
</section>
<!-- Processing area end here -->


<!-- Testimonial area start here -->
<section class="testimonial-section">
  <div class="outer-box">
    <figure class="shape">
      <img src="images/shape/testimonial-shape.png" alt="Image">
    </figure>
    <div class="swiper testimonial-slider">
      <div class="swiper-wrapper">
        @foreach($testimonials as $t)
        <div class="swiper-slide">
          <div class="testimonial-block">
            <div class="inner-box">
              <div class="image-box">
                <div class="quate">
                  <svg width="33" height="26" viewBox="0 0 33 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M29.1965 2.87439C30.9987 4.85084 32.0801 7.00696 32.0801 10.6005C32.0801 16.8892 27.5745 22.4592 21.2666 25.334L19.6446 22.9982C25.592 19.764 26.8536 15.6314 27.214 12.9363C26.3129 13.4753 25.0513 13.655 23.7897 13.4753C20.5457 13.116 18.0225 10.6005 18.0225 7.18663C18.0225 5.56954 18.7434 3.95245 19.8248 2.69472C21.0864 1.43698 22.5282 0.897949 24.3304 0.897949C26.3129 0.897949 28.1151 1.79633 29.1965 2.87439ZM11.174 2.87439C12.9763 4.85084 14.0576 7.00696 14.0576 10.6005C14.0576 16.8892 9.55198 22.4592 3.24412 25.334L1.6221 22.9982C7.56951 19.764 8.83109 15.6314 9.19153 12.9363C8.29041 13.4753 7.02884 13.655 5.76727 13.4753C2.52322 13.116 7.62939e-05 10.6005 7.62939e-05 7.18663C7.62939e-05 5.56954 0.720974 3.95245 1.80232 2.69472C2.88367 1.43698 4.50569 0.897949 6.30794 0.897949C8.29041 0.897949 10.0927 1.79633 11.174 2.87439Z"
                      fill="#163839" />
                  </svg>
                </div>
                <figure class="image">
                  @if($t->image)
                  <img src="{{ asset($t->image) }}" alt="Image">
                  @else
                  <img src="{{ asset('images/shape/user.png') }}" alt="Image">
                  @endif
                </figure>
                <div class="star">
                  @for ($i = 1; $i <= 5; $i++)
                    <i class="fa-solid fa-star {{ $i <= $t->rating ? 'active' : '' }}"></i>
                    @endfor
                </div>
              </div>
              <div class="content-box">
                <h3 class="text">{!!$t->message !!}</h3>
                <h4 class="title">{{ $t->name}} / <span>{{ $t->role}}</span></h4>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <div class="swiper-arry">
        <button class="testimonial-prev"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="testimonial-next"><i class="fa-solid fa-arrow-right"></i></button>
      </div>
    </div>
  </div>
</section>
<!-- Testimonial area end here -->

@endsection