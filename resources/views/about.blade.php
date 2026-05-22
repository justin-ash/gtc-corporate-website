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
                 <h2>Building the <em>backbone</em> of the Kingdom since 1977</h2>
                 <p class="hero-lead">ISO-certified industrial contractors delivering civil, electrical, mechanical, piping, cathodic protection, and IT services across Saudi Arabia and the GCC.</p>
                 <div class="hero-stats">
                     <div class="stat">
                         <div class="stat-num">47+</div>
                         <div class="stat-label">Years Operating</div>
                     </div>
                     <div class="stat">
                         <div class="stat-num">170+</div>
                         <div class="stat-label">Projects Done</div>
                     </div>
                     <div class="stat">
                         <div class="stat-num">20+</div>
                         <div class="stat-label">Major Clients</div>
                     </div>
                     <div class="stat">
                         <div class="stat-num">3</div>
                         <div class="stat-label">ISO Certifications</div>
                     </div>
                 </div>
             </div>
             <div class="since-badge"><span>Since</span><span>1977</span></div>
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
                         <h2 class="title wow splt-txt" data-splitting>{!!$widgets['ABOUT_AREA']['title']!!}</h2>
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
                                 <p class="comment-text">"We value commitment, integrity, employee morale, and loyalty — embracing the spirit of innovation that transforms our vision into reality."</p>
                                 <p class="panel-author">— Green Top Vision Statement</p>
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
                 <h2 class="title text-white wow splt-txt" data-splitting>Vision, Mission & Goals</h2>
             </div>
         </div>
         <div class="row g-5">
             <div class="col-md-4">
                 <div class="growth-block1">
                     <h3 class="title">Vision</h3>
                     <p class="text">To be the most preferred vendor within our service range, delivering value-added solutions through commitment, integrity, and innovation.</p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="growth-block1">
                     <h3 class="title">Mission</h3>
                     <p class="text">
                     <ul>
                         <li>Excellence and innovation in every project</li>
                         <li>Safety and environmental responsibility</li>
                         <li>Sustainable, profitable growth</li>
                         <li>Attract and reward top talent</li>
                     </ul>
                     </p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="growth-block1">
                     <h3 class="title">Goals</h3>
                     <p class="text">
                     <ul>
                         <li>On-time project delivery</li>
                         <li>100% client satisfaction</li>
                         <li>Professional approach always</li>
                         <li>Continuous improvement</li>
                     </ul>
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
                 <h2 class="title wow splt-txt" data-splitting>{!!$widgets['PROCESS']['title']!!}</h2>
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
             <h2 class="title wow splt-txt" data-splitting>Trusted by industry leaders
             </h2>
         </div>

         <p class="section-body">Registered vendors with the Kingdom's most prestigious organizations — proof of our quality and technical capability.</p>
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
                 <h2 class="title wow splt-txt" data-splitting>HSE and Quality commitment</h2>
             </div>
             <div class="row">
                 <div class="col-md-6">
                     <div class="saftey">
                         <h3>Health, Safety & Environment</h3>
                         <p>Safety is our top priority. Our HSE programs cover Hazard Identification, Risk Assessment, Emergency Response, and Incident Investigation — driven from management down to every site worker. We foster an accident-free culture through continuous training and robust safety protocols.</p>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="saftey">
                         <h3>Quality Policy</h3>
                         <p>Fully compliant with ISO 9001:2015, we deliver defect-free work on time and within budget. Our Quality Control Program ensures every activity conforms to approved drawings and international standards, with complete as-built documentation and material certificates for every project.</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Process area end here -->
 @endsection