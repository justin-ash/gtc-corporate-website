 @extends('layout.app')

 @section('content')
 <!-- Start main-content -->
 <section class="page-title" style="background-image: url({{ asset('images/background/page-title-bg.jpg') }});">
     <div class="auto-container">
         <div class="title-outer">
             <h1 class="title">Portfolio</h1>
             <ul class="page-breadcrumb">
                 <li><a href="{{ route('home') }}">Home</a></li>
                 <li>Portfolio</li>
             </ul>
         </div>
     </div>
 </section>
 <!-- end main-content -->

 <!-- Case Section-->
 <!-- <section class="case-section pt-120 pb-120">
     <div class="outer-box">
         <div class="carousel-outer">
             <div class="swiper case-slider">
                 <div class="swiper-wrapper">
                     @foreach($projects as $project)
                     <div class="swiper-slide">
                         <div class="case-block">
                             <div class="inner-box">
                                 <figure class="image">
                                     <img src="{{ asset($project->thumbnail) }}" alt="Image">
                                 </figure>
                                 <div class="content-box">
                                     <span class="sub-title">{{ $project->project_type }}</span>
                                     <h4 class="title"><a href="{{ route('projects.show', $project->slug) }}"> {{ $project->project_name }}</a></h4><br>
                                     <p>{{$project->short_description }}</p>
                                     <a href="{{ route('projects.show', $project->slug) }}">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                 </div>
                                 <a class="arry-btn" href="{{ route('projects.show', $project->slug) }}"><i class="fa-regular fa-arrow-up-right"></i></a>
                                 <div class="hover-content">
                                     <span class="sub-title">{{ $project->project_type }}</span>
                                     <h4 class="title"><a href="{{ route('projects.show', $project->slug) }}">{{ $project->project_name }}</a></h4><br>
                                     <p style="color: #fff;">{{$project->short_description }}</p>
                                     <a style="color: #fff;" href="{{ route('projects.show', $project->slug) }}">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 </section> -->
 <section class="featured-projects py-5">
     <div class="container">

         <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">

             <div>
                 <div class="section-tag">
                     FEATURED PROJECTS
                 </div>

                 <h3 class="section-title">
                     One Vision Multiple Ventures
                 </h3>
             </div>

             <!-- <a href="{{ route('portfolio') }}" class="view-projects">
                 View All Projects
                 <i class="fa-solid fa-arrow-right"></i>
             </a> -->

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

                         <div>
                             <h5><a href="{{ route('projects.show', $project->slug) }}">{{ $project->project_name }}</a></h5>
                             <span>{{ $project->project_type }}</span>
                         </div>

                     </div>

                 </div>
             </div>
             @endforeach
         </div>

     </div>
 </section>
 <!-- End Case Section -->
 @endsection