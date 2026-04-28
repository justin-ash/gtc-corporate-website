 @extends('layout.app')

 @section('content')
 <!-- Start main-content -->
 <section class="page-title" style="background-image: url({{ asset('images/bg/page-title-bg.jpg') }});">
     <div class="auto-container">
         <div class="title-outer">
             <ul class="page-breadcrumb">
                 <li><a href="{{ route('home') }}">Home</a></li>
                 <li>About Us</li>
             </ul>
             <h1 class="title">About Us</h1>
         </div>
     </div>
 </section>
 <!-- end main-content -->

 <!-- About area start here -->
 <section class="about-section-three pt-120 pb-120">
     <div class="container">
         <div class="row g-5 g-xxl-0">
             <div class="col-xl-6 image-column">
                 <div class="inner-column">
                     <div class="shape">
                         <img class="animation__rotate" src="{{ asset('images/about/about-three-info.png') }}" alt="Image">
                     </div>
                     <figure class="image">
                         <img src="{{ asset('images/about/about-three-image.jpg') }}" alt="Image">
                     </figure>
                     <p class="text mt-30 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{!!$widgets['ABOUT_AREA']['description']!!}</p>
                     <div class="info mt-50 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                         <div class="user">
                             <ul>
                                 <li><img src="{{ asset('images/about/about-two-user1.png') }}" alt="Image"></li>
                                 <li><img src="{{ asset('images/about/about-two-user2.png') }}" alt="Image"></li>
                                 <li><img src="{{ asset('images/about/about-two-user3.png') }}" alt="Image"></li>
                                 <li><img src="{{ asset('images/about/about-two-user4.png') }}" alt="Image"></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-xl-6 content-column">
                 <div class="inner-column">
                     <div class="sec-title">
                         <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">ABOUT US</h6>
                         <h2 class="title wow splt-txt" data-splitting>{!!$widgets['ABOUT_AREA']['title']!!}</h2>
                     </div>
                     <div class="about-block-three mt-50">
                         <div class="row g-0">
                             <div class="col-sm-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                 <div class="content-box">
                                     <div class="count-box"><span class="count-text" data-stop="15" data-speed="2000"></span>+</div>
                                     <p class="text">Experience Team Help you</p>
                                 </div>
                             </div>
                             <div class="col-sm-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                                 <div class="content-box margin-minus">
                                     <div class="count-box"><span class="count-text" data-stop="18" data-speed="2000"></span>M</div>
                                     <p class="text">We helped to get companies</p>
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

 <!-- Growth area start here -->
 <section class="growth-section pt-120 pb-120" data-background="images/bg/growth-bg.jpg">
     <div class="container">
         <div class="sec-title pb-50 mb-50">
             <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Growth Rate</h6>
             <div class="flex-content">
                 <h2 class="title text-white wow splt-txt" data-splitting>{!!$widgets['GROWTH_RATE']['title']!!}</h2>
                 <!-- <a class="btn-one-light border-0 rounded-0 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" href="page-about.html">Discover More</a> -->
             </div>
         </div>
         <div class="row g-5">
             {!!$widgets['GROWTH_RATE']['description']!!}
         </div>
     </div>
 </section>
 <!-- Growth area end here -->

 <!-- Process area end here -->
 <section class="process-section-four pt-120 pb-120">
     <div class="container">


         <div class="outer-box">
             <div class="sec-title center mb-50">
                 <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Process</h6>
                 <h2 class="title wow splt-txt" data-splitting>{!!$widgets['PROCESS']['title']!!}</h2>
             </div>
             {!!$widgets['PROCESS']['description']!!}

         </div>

     </div>
 </section>
 <!-- Process area end here -->
 @endsection