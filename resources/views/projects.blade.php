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
                     @foreach($projects as $project)
                     <div class="swiper-slide">
                         <div class="case-block">
                             <div class="inner-box">
                                 <figure class="image">
                                     <img src="{{ asset($project->gallery[0]) }}" alt="Image">
                                 </figure>
                                 <div class="content-box">
                                     <span class="sub-title">{{ $project->project_type }}</span>
                                     <h4 class="title"><a href="{{ route('projects.show', $project->slug) }}"> {{ $project->project_name }}</a></h4>
                                 </div>
                                 <a class="arry-btn" href="{{ route('projects.show', $project->slug) }}"><i class="fa-regular fa-arrow-up-right"></i></a>
                                 <div class="hover-content">
                                     <span class="sub-title">{{ $project->project_type }}</span>
                                     <h4 class="title"><a href="{{ route('projects.show', $project->slug) }}">{{ $project->project_name }}</a></h4>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End Case Section -->
 @endsection