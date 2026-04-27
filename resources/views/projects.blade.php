 @extends('layout.app')

 @section('content')
 <!-- Start main-content -->
 <section class="page-title" style="background-image: url({{ asset('images/background/page-title-bg.jpg') }});">
     <div class="auto-container">
         <div class="title-outer">
             <h1 class="title">Case Study</h1>
             <ul class="page-breadcrumb">
                 <li><a href="{{ route('home') }}">Home</a></li>
                 <li>Case Study</li>
             </ul>
         </div>
     </div>
 </section>
 <!-- end main-content -->

 <!-- Case Section-->
 <section class="case-section pt-120 pb-120">
     <div class="outer-box">
         <div class="carousel-outer">
             <div class="swiper case-slider">
                 <div class="swiper-wrapper">
                     <div class="swiper-slide">
                         <div class="case-block">
                             <div class="inner-box">
                                 <figure class="image">
                                     <img src="{{ asset('images/case/case-image1.jpg') }}" alt="Image">
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
                                     <img src="{{ asset('images/case/case-image2.jpg') }}" alt="Image">
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
                                     <img src="{{ asset('images/case/case-image3.jpg') }}" alt="Image">
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
                                     <img src="{{ asset('images/case/case-image4.jpg') }}" alt="Image">
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
     </div>
 </section>
 <!-- End Case Section -->
 @endsection