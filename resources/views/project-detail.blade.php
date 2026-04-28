 @extends('layout.app')

 @section('content')
 <!-- Start main-content -->
 <section class="page-title" style="background-image: url( {{asset('images/background/page-title-bg.jpg')}});">
     <div class="auto-container">
         <div class="title-outer">
             <h1 class="title">Project Details</h1>
             <ul class="page-breadcrumb">
                 <li><a href="{{ route('home') }}">Home</a></li>
                 <li><a href="{{ route('projects') }}">Projects</a></li>
                 <li>Project Details</li>
             </ul>
         </div>
     </div>
 </section>
 <!-- End main-content -->

 <!--Project Details Start-->
 <section class="project-details pt-120 pb-70">
     <div class="container">
         <div class="row">
             <div class="col-xl-7 col-lg-8 mb-5 mb-lg-0">
                 <div class="sec-title mb-40">
                     <h6 class="sub-title wow fadeInUp bg-transparent ps-0" data-wow-delay="00ms" data-wow-duration="1500ms">About The Project</h6>
                     <h2 class="title mb-30 wow splt-txt" data-splitting> {{ $project->project_name }}</h2>
                     <p class="text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{{ $project->short_description }}</p>
                 </div>
                 <a class="btn-two" href="{{ $project->website }}">Visit Website <i class="fas fa-angle-right"></i></a>
             </div>
             <div class="col-xl-3 offset-xl-1 col-lg-4">
                 <div class="project-details__content-right mt-0">
                     <div class="project-details__details-box rounded-0">
                         <ul class="list-unstyled project-details__details-list">
                             <li>
                                 <h4 class="project-details__name mb-2">Clients</h4>
                                 <p class="project-details__client">{{ $project->project_location }}</p>
                             </li>
                             <li>
                                 <h4 class="project-details__name mb-2">Project Type</h4>
                                 <p class="project-details__client">{{ $project->project_type }}</p>
                             </li>
                             <li>
                                 <h4 class="project-details__name mb-2">Date</h4>
                                 <p class="project-details__client">{{ date('Y-m-d', strtotime($project->established_date)) }}</p>
                             </li>
                             <li>
                                 <h4 class="project-details__name mb-2">Website</h4>
                                 <p class="project-details__client"><a href="{{ $project->website }}" target="_blank">{{ $project->website }}</a></p>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row mb-5 mb-lg-0">
             <div class="col-lg-4 col-md-6">
                 <div class="project-details__top mt-5">
                     <div class="project-details__img"> <img class="rounded-0" src="{{ asset($project->gallery[0]) }}" alt="" style="max-height: 400px;"> </div>
                 </div>
             </div>
             <div class="col-lg-8 col-md-6">
                 <div class="project-details__top mt-5">
                     <div class="project-details__img"> <img class="rounded-0" src="{{ asset($project->gallery[1]) }}" alt="" style="max-height: 400px;"> </div>
                 </div>
             </div>
         </div>
         {!! $project->detail_text !!}
         <div class="row">
             @foreach($project->gallery as $image)
             <div class="col-md-6">
                 <div class="project-details__top mt-5">
                     <div class="project-details__img" style="max-height: 400px;"> <img class="rounded-0" src="{{ asset($image) }}" alt=""> </div>
                 </div>
             </div>
             @endforeach
         </div>

     </div>
 </section>
 <!--Project Details End-->
 @endsection