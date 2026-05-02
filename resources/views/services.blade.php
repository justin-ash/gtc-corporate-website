 @extends('layout.app')

 @section('content')
 <!-- Start main-content -->
 <section class="page-title" style="background-image: url(images/background/page-title-bg.jpg);">
     <div class="auto-container">
         <div class="title-outer">
             <h1 class="title">Service Grid</h1>
             <ul class="page-breadcrumb">
                 <li><a href="{{ route('home') }}">Home</a></li>
                 <li>Service Grid</li>
             </ul>
         </div>
     </div>
 </section>
 <!-- end main-content -->

 <!-- Services Section-->
 <section class="case-section bg-thm1 pt-120 pb-120">
     <div class="auto-container">
         <div class="row g-0">
             @foreach($services as $service)
             <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                 <div class="service-block-two">
                     <div class="inner-box border-0">
                         <div class="icon">
                             <i class="fa {{ $service->icon }}"></i>
                         </div>
                         <div class="content-box">
                             <h4 class="title">{{$service->title}}</h4>
                             <p class="text">{!! $service->description !!}</p>
                         </div>
                         <div class="block-bg">
                             <img src="images/shape/service-block-shape.png" alt="Image">
                         </div>
                     </div>
                 </div>
             </div>
             @endforeach
         </div>
     </div>
 </section>
 <!-- End Services Section -->
 @endsection