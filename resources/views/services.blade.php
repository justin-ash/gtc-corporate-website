 @extends('layout.app')

 @section('content')
 <style>
     .section-heading .sub-title {
         display: block;
         font-size: 14px;
         font-weight: 600;
         margin-bottom: 10px;
         text-transform: uppercase;
         padding-top: 10px;
         width: fit-content;
     }

     .section-heading h2 {
         font-size: 52px;
         font-weight: 700;
         margin-bottom: 20px;
     }

     .section-heading p {
         max-width: 900px;
         line-height: 1.5;
     }

     .division-card {
         border-left: 1px solid #b17a00;
         background: #fff;
     }

     .division-title {
         background: #01874a;
         color: #fff;
         font-size: 22px;
         font-weight: 700;
         padding: 18px 28px;
     }

     .division-body {
         padding: 25px 28px;
     }

     .division-body p {
         font-size: 18px;
         line-height: 1.6;
         margin-bottom: 15px;
     }

     .key-areas {
         color: #b17a00;
         font-size: 17px;
         margin-bottom: 10px;
         line-height: 1.7;
     }

     .key-areas strong {
         color: #8a5f00;
     }

     .key-areas span {
         margin: 0 10px;
     }

     .division-body a {
         color: #8a5f00;
         text-decoration: none;
         font-style: italic;
         font-size: 16px;
     }

     .division-body a:hover {
         text-decoration: underline;
     }


     /* Responsive */

     @media(max-width:991px) {

         .section-heading h2 {
             font-size: 40px;
         }

         .section-heading p {
             font-size: 20px;
         }

     }

     @media(max-width:767px) {

         .section-heading h2 {
             font-size: 32px;
         }

         .section-heading p {
             font-size: 17px;
         }

         .division-title {
             font-size: 20px;
             padding: 15px 20px;
         }

         .division-body {
             padding: 20px;
         }

         .division-body p {
             font-size: 16px;
         }

         .key-areas {
             font-size: 15px;
         }

     }

     .growth-block1 td {
         background: rgba(0, 0, 0, 0.5);
         color: #fff;
         border: none;
     }

     .growth-block1 tr {
         border: none;
     }

     .services-section {
         padding: 80px 0;
     }

     .section-subtitle {
         color: #01874a;
         font-weight: 700;
         text-transform: uppercase;
         letter-spacing: 1px;
         margin-bottom: 10px;
     }

     .section-title {
         font-size: 52px;
         font-weight: 800;
         color: #111827;
         margin-bottom: 20px;
     }

     .section-description {
         color: #6b7280;
         max-width: 700px;
         margin: auto;
         line-height: 1.8;
         font-size: 18px;
     }

     .service-card {
         background: #fff;
         border-radius: 18px;
         overflow: hidden;
         margin-top: 40px;
         transition: 0.3s;
         box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
     }

     .service-card:hover {
         transform: translateY(-5px);
     }

     .service-image {
         width: 100%;
         height: 100%;
         object-fit: cover;
         max-height: 350px;
         min-height: 350px;
         overflow: hidden;
     }
     }

     .service-content {
         padding: 60px;
     }

     .service-number {
         color: #01874a;
         font-size: 32px;
         font-weight: 800;
         margin-bottom: 15px;
     }

     .service-title {
         font-size: 42px;
         font-weight: 800;
         color: #111827;
         margin-bottom: 20px;
     }

     .service-line {
         width: 70px;
         height: 4px;
         background: #01874a;
         border-radius: 10px;
         margin-bottom: 25px;
     }

     .service-description {
         color: #6b7280;
         line-height: 1.9;
         font-size: 18px;
         margin-bottom: 30px;
     }

     .service-btn {
         background: #01874a;
         color: #fff;
         border: none;
         padding: 14px 28px;
         border-radius: 10px;
         text-decoration: none;
         display: inline-flex;
         align-items: center;
         gap: 10px;
         font-weight: 600;
         transition: 0.3s;
     }

     .service-btn:hover {
         background: #01874a;
         color: #fff;
         transform: translateY(-2px);
     }

     @media(max-width:991px) {

         .service-content {
             padding: 35px;
         }

         .service-title {
             font-size: 32px;
         }

         .section-title {
             font-size: 38px;
         }

     }

     @media(max-width:767px) {

         .service-image {
             min-height: 250px;
         }

         .service-content {
             padding: 30px 25px;
         }

         .service-title {
             font-size: 28px;
         }

         .section-title {
             font-size: 32px;
         }

     }

     /* .service-content .service-number,
     .service-content .service-title,
     .service-content .service-line,
     .service-content .service-description,
     .service-content .service-btn {
         padding-left: 10em;

     } */
     .service-content {
         padding: 50px
     }
 </style>
 <!-- Start main-content -->
 <section class="page-title" style="background-image: url(images/background/page-title-bg.jpg);">
     <div class="auto-container">
         <div class="title-outer">
             <h1 class="title">Service</h1>
             <ul class="page-breadcrumb">
                 <li><a href="{{ route('home') }}">Home</a></li>
                 <li>Service </li>
             </ul>
         </div>
     </div>
 </section>

 <!-- end main-content -->
 <section class="about-section-three pt-120 pb-120 ">
     <div class="container">
         <div class="row g-5 g-xxl-0">
             <div class="container" style="position:relative;z-index:2;">
                 <div class="sec-title">
                     <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">COMPANY OVERVIEW</h6>
                 </div>
                 <h2>Trusted Excellence Since 1977</h2>
                 <p class="hero-lead">Established in 1977 ,Green Top Contracting (GTC) Group is a leading multi-disciplinary contractor
                     in the Kingdom of Saudi Arabia. We deliver high-performance solutions for the Kingdom's most
                     demanding industries by combining decades of local expertise with international technical
                     standards.</p>
                 <p class="hero-lead">Every project we undertake is executed with precision, safety, and a commitment to long-term value
                     — on time and within scope, from concept through to handover.</p>
             </div>
         </div>
     </div>
 </section>
 <!-- Growth area start here -->
 <section class="growth-section pt-120 pb-120" data-background="images/bg/growth-bg.jpg">
     <div class="container">
         <div class="sec-title pb-50 mb-50">
             <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Accreditations and Approvals</h6>
             <div class="flex-content">
                 <h2 class="title text-white wow splt-txt" data-splitting>Certifications</h2>
             </div>
         </div>
         <div class="row g-5">
             <div class="col-md-2">

             </div>
             <div class="col-md-8">
                 <div class="">
                     <table class="table growth-block1 table-bordered">
                         <tbody>
                             <tr>
                                 <td>ISO 9001 : 2015</td>
                                 <td>Quality Management System</td>
                             </tr>
                             <tr>
                                 <td>ISO 14001 : 2015 </td>
                                 <td>Environmental Management System</td>
                             </tr>
                             <tr>
                                 <td>ISO 45001 : 2018</td>
                                 <td>Occupational Health and Safety Management System</td>
                             </tr>
                             <tr>
                                 <td>Aramco Approved</td>
                                 <td>Saudi Aramco Vendor Qualification</td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
             <div class="col-md-2">

             </div>
         </div>
     </div>
 </section>
 <section class="services-section">

     <div class="container">
         <div class="section-heading mb-5">
             <div class="sec-title">
                 <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">OUR DIVISIONS</h6>
             </div>
             <h2>Five Disciplines. One Group.</h2>

             <p>
                 Each GTC division operates with dedicated expertise,
                 specialized equipment, and fully qualified teams —
                 delivering end-to-end project excellence across every sector.
             </p>
         </div>
         @foreach($services as $key=> $service)

         <div class="service-card">

             <div class="row g-0 align-items-center flex-lg-row-reverse">
                 @if($key % 2 == 0)
                 <div class="col-lg-4">
                     <img src="{{ asset($service->thumbnail_path) }}" alt="Service Image"
                         class="service-image">
                 </div>
                 @endif

                 <div class="col-lg-8">

                     <div class="service-content">

                         <div class="service-number">0{{$key+1}}</div>

                         <h3 class="service-title">
                             {{ $service->title }}
                         </h3>

                         <div class="service-line"></div>

                         <p class="service-description">
                             {!! $service->description !!}
                         </p>

                         <a href="{{ $service->link }}" class="service-btn">
                             Learn More
                             <i class="bi bi-arrow-right"></i>
                         </a>

                     </div>


                 </div>
                 @if($key % 2 == 1)
                 <div class="col-lg-4">
                     <img src="{{ asset($service->thumbnail_path) }}" alt="Service Image"
                         class="service-image">
                 </div>
                 @endif

             </div>

         </div>

         @endforeach
     </div>

 </section>
 <!-- <section class="division-section py-5">
     <div class="container">

         <div class="section-heading mb-5">
             <div class="sec-title">
                 <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">OUR DIVISIONS</h6>
             </div>
             <h2>Five Disciplines. One Group.</h2>

             <p>
                 Each GTC division operates with dedicated expertise,
                 specialized equipment, and fully qualified teams —
                 delivering end-to-end project excellence across every sector.
             </p>
         </div>

 @foreach($services as $key=> $service)
 <div class="division-card mb-4">

     <div class="division-title">
         {{$key+1}}. {{ $service->title }}
     </div>

     <div class="division-body">

         <p>
             {!! $service->description !!}
         </p>

         <div class="key-areas">
             <strong>Key Areas:</strong>
             {{ $service->icon }}
         </div>
         <a href="{{ $service->link }}" target="_blank">
             {{ $service->link }}
         </a>
     </div>


 </div>
 @endforeach
 </div>
 </section> -->
 @endsection