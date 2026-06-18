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

 <section class="about-section-three pt-120 pb-120 history-section">
     <div class="container">
         <div class="row g-5 g-xxl-0">
             <div class="container" style="position:relative;z-index:2;">
                 <p class="hero-eyebrow">Green Top Contracting Co. Ltd. — Al Khobar, KSA</p>
                 <h3>{!!$widgets['ABOUT_START']['title']!!}</h3>
                 <p class="hero-lead">{!!$widgets['ABOUT_START']['description']!!}</p>
             </div>
             <div class="since-badge"><span>Since</span><span>1951</span></div>
         </div>
     </div>
 </section>
 <!-- end main-content -->

 <!-- About area start here -->
 <section class="about-section-three pt-120 pb-120">
     <div class="container">
         <div class="row g-5 g-xxl-0">
             <div class="col-xl-6 content-column">
                 <div class="inner-column">
                     <div class="sec-title">
                         <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Who we are</h6>
                         <h3 class="title wow splt-txt" data-splitting>{!!$widgets['ABOUT_AREA']['title']!!}</h3>
                     </div>
                     <div class="about-block-three mt-20">
                         <div class="row g-0">
                             <div class="col-sm-12 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                 <div class="content-bo">
                                     <p class="text mt-30 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{!!$widgets['ABOUT_AREA']['description']!!}</p>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-6 image-column">
                 <div class="inner-column">
                     <div class="row g-0">
                         <div class="col-md-12">
                             <div class="comment">
                                 <p class="comment-text">{!!$widgets['ABOUT_VISION_STATEMENT']['description']!!}</p>
                                 <p class="panel-author">{!!$widgets['ABOUT_VISION_STATEMENT']['title']!!}</p>
                                 </p>
                             </div>
                         </div>
                     </div>

                     <div class="row g-0 mt-50">
                         <div class="col-md-12">
                             <div class="labels">
                                 <label>ISO 9001 : 2015</label><label>ISO 14001 : 2015 </label><label>ISO 45001 : 2018</label><label>Aramco Approved</label>
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
             <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Our Purpose</h6>
             <div class="flex-content">
                 <h3 class="title text-white wow splt-txt" data-splitting>Vision, Mission & Goals</h3>
             </div>
         </div>
         <div class="row g-5">
             <div class="col-md-4">
                 <div class="growth-block1">
                     <h4 class="title">{!!$widgets['ABOUT_VISION']['title']!!}</h4>
                     <p class="text">{!!$widgets['ABOUT_VISION']['description']!!}</p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="growth-block1">
                     <h4 class="title">{!!$widgets['ABOUT_MISSION']['title']!!}</h4>
                     <p class="text">
                         {!!$widgets['ABOUT_MISSION']['description']!!}
                     </p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="growth-block1">
                     <h4 class="title">{!!$widgets['ABOUT_GOALS']['title']!!}</h4>
                     <p class="text">
                         {!!$widgets['ABOUT_GOALS']['description']!!}
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Growth area end here -->

 <!-- Process area end here -->
 <section class="process-section-four pt-120 pb-120 timeline-section">
     <div class="container">


         <div class="outer-box">
             <div class="sec-title center mb-50">
                 <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Our Journey</h6>
                 <h3 class="title wow splt-txt" data-splitting>{!!$widgets['PROCESS']['title']!!}</h3>
             </div>
             <div class="timeline">

                 <!-- Item -->
                 @foreach($milestones as $key => $milestone)
                 <div class="timeline-item {{ $key %2 == 0 ? 'right' : 'left' }}">
                     <div class="timeline-dot"></div>

                     <div class="timeline-content">
                         <div class="year">{{ $milestone->year }}</div>
                         <h3 class="milestone-title">{{ $milestone->title }}</h3>
                         <p class="milestone-desc">
                             {{ $milestone->description }}
                         </p>
                     </div>
                 </div>
                 @endforeach

             </div>

         </div>

     </div>
 </section>

 <section class="processing-section pt-70 pb-70">

     <div class="container">
         <div class="sec-title center mb-50">
             <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Our Partners</h6>
             <h3 class="title wow splt-txt" data-splitting>{!!$widgets['ABOUT_PARTNERS']['title']!!}</h3>
         </div>

         <p class="section-body">{!!$widgets['ABOUT_PARTNERS']['description']!!}</p>
         <div class="clients-wrapper">
             <p class="clients-label" style="margin-top:28px;">Vendor Registrations</p>
             <div class="row">
                 <div class="col-md-3">
                     <div class="clients-grid">
                         <span class="client-pill">Saudi Aramco</span>
                         <span class="client-pill">Saudi Electricity Company</span>
                         <span class="client-pill">SABIC</span>
                         <span class="client-pill">Petrokemya</span>
                         <span class="client-pill">MAADEN</span>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="clients-grid">

                         <span class="client-pill">NESMA</span>
                         <span class="client-pill">El-Seif</span>
                         <span class="client-pill">KBR</span>
                         <span class="client-pill">L&amp;T Energy Hydrocarbon</span>
                         <span class="client-pill">DANWAY</span>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="clients-grid">
                         <span class="client-pill">LINXON</span>
                         <span class="client-pill">SOGEC</span>
                         <span class="client-pill">SICIM</span>
                         <span class="client-pill">NSH</span>
                         <span class="client-pill">SISCO</span>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="clients-grid">
                         <span class="client-pill">Royal Commission Jubail &amp; Yanbu</span>
                         <span class="client-pill">National Water Company</span>
                         <span class="client-pill">SIPCHEM</span>
                         <span class="client-pill">MARAFIQ</span>
                         <span class="client-pill">Gulf Chemicals</span>
                     </div>
                 </div>
                 <div class="clients-grid">



                 </div>
             </div>
         </div>
 </section>
 <section class="process-section-four pt-120 pb-120 timeline-section">
     <div class="container">


         <div class="outer-box">
             <div class="sec-title center mb-50">
                 <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Safety & Quality</h6>
                 <h3 class="title wow splt-txt" data-splitting>HSE and Quality commitment</h3>
             </div>
             <div class="row">
                 <div class="col-md-6">
                     <div class="saftey">
                         <h4>{!!$widgets['ABOUT_SAFETY']['title']!!}</h4>
                         <p>{!!$widgets['ABOUT_SAFETY']['description']!!}</p>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="saftey">
                         <h4>{!!$widgets['ABOUT_QUALITY']['title']!!}</h4>
                         <p>{!!$widgets['ABOUT_QUALITY']['description']!!}</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Process area end here -->
 @endsection