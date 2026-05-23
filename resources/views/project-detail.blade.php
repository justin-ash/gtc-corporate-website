 @extends('layout.app')

 @section('content')
 <style>
     .gallery {
         width: 90%;
         margin: 60px auto;
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
         gap: 20px;
     }

     .gallery img {
         width: 100%;
         height: 250px;
         object-fit: cover;
         border-radius: 10px;
         cursor: pointer;
         transition: 0.3s;
         display: block;
     }

     .gallery img:hover {
         transform: scale(1.03);
     }

     /* CUSTOM MODAL */

     .custom-modal {
         position: fixed;
         inset: 0;
         width: 100%;
         height: 100%;
         background: #000;
         z-index: 999999;
         display: none;
         align-items: center;
         justify-content: center;
         overflow: hidden;
     }

     .custom-modal.active {
         display: flex;
     }

     /* IMAGE */

     .modal-image {
         max-width: 90%;
         max-height: 90vh;
         object-fit: contain;
         user-select: none;
     }

     /* CLOSE */

     .close-btn {
         position: absolute;
         top: 20px;
         right: 30px;
         color: #fff;
         font-size: 45px;
         cursor: pointer;
         z-index: 1000;
         line-height: 1;
     }

     /* NAVIGATION */

     .nav-btn {
         position: absolute;
         top: 50%;
         transform: translateY(-50%);
         width: 70px;
         height: 70px;
         border: none;
         background: rgba(255, 255, 255, 0.1);
         color: #fff;
         font-size: 50px;
         cursor: pointer;
         z-index: 1000;
         transition: 0.3s;
         backdrop-filter: blur(4px);
     }

     .nav-btn:hover {
         background: rgba(255, 255, 255, 0.25);
     }

     .prev-btn {
         left: 20px;
     }

     .next-btn {
         right: 20px;
     }

     /* MOBILE */

     @media(max-width:768px) {

         .nav-btn {
             width: 50px;
             height: 50px;
             font-size: 35px;
         }

         .close-btn {
             font-size: 35px;
             right: 20px;
         }

     }
 </style>
 <!-- Start main-content -->
 <section class="page-title" style="background-image: url( {{asset('images/background/page-title-bg.jpg')}});">
     <div class="auto-container">
         <div class="title-outer">
             <h1 class="title">{{ $project->project_name }}</h1>
             <ul class="page-breadcrumb">
                 <li><a href="{{ route('home') }}">Home</a></li>
                 <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                 <li>{{ $project->project_name }}</li>
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
                     <h6 class="sub-title wow fadeInUp bg-transparent ps-0" data-wow-delay="00ms" data-wow-duration="1500ms">About The Portfolio</h6>
                     <h2 class="title mb-30 wow splt-txt" data-splitting> {{ $project->project_name }}</h2>
                     <p class="text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{{ $project->short_description }}</p>
                 </div>
                 <a class="btn-two" href="{{ $project->website }}">Visit Website <i class="fas fa-angle-right"></i></a>
             </div>
             <div class="col-xl-3 offset-xl-1 col-lg-4">
                 <div class="project-details__content-right mt-0">
                     <div class="project-details__details-box rounded-0">
                         @if(Request::segment(2) == 'green-top-pest-control-cleaning')
                         <img src="{{ asset('images/service/bpca.jpeg') }}" alt="Project Image" class="mb-4 rounded-0" style="max-width: 100%; height: auto;">
                         <img src="{{ asset('images/service/npma.jpeg') }}" alt="Project Image" class="mb-4 rounded-0" style="max-width: 100%; height: auto;">

                         @else
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
                         @endif

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


     </div>
 </section>
 <section class="gallery-section">
     <div class="container">
         <div class="gallery">
             @foreach($project->gallery as $image)
             <img src="{{ asset($image) }}" alt="Gallery">
             @endforeach

         </div>
     </div>
 </section>
 <!-- Modal -->
 <div class="custom-modal" id="galleryModal">
     <span class="close-btn" id="closeModal">&times;</span>
     <button class="nav-btn prev-btn" id="prevBtn">&#10094;</button>
     <img src="" class="modal-image" id="modalImage">
     <button class="nav-btn next-btn" id="nextBtn">&#10095;</button>
 </div>

 @push('scripts')
 <script>
     const images = document.querySelectorAll('.gallery img');

     const modal = document.getElementById('galleryModal');

     const modalImage = document.getElementById('modalImage');

     const closeBtn = document.getElementById('closeModal');

     const prevBtn = document.getElementById('prevBtn');

     const nextBtn = document.getElementById('nextBtn');

     let currentIndex = 0;

     /* OPEN MODAL */

     images.forEach((img, index) => {

         img.addEventListener('click', () => {

             currentIndex = index;

             showImage();

             modal.classList.add('active');

             document.body.style.overflow = 'hidden';

         });

     });

     /* SHOW IMAGE */

     function showImage() {

         modalImage.src = images[currentIndex].src;

     }

     /* NEXT */

     nextBtn.addEventListener('click', () => {

         currentIndex++;

         if (currentIndex >= images.length) {
             currentIndex = 0;
         }

         showImage();

     });

     /* PREV */

     prevBtn.addEventListener('click', () => {

         currentIndex--;

         if (currentIndex < 0) {
             currentIndex = images.length - 1;
         }

         showImage();

     });

     /* CLOSE */

     closeBtn.addEventListener('click', closeModal);

     function closeModal() {

         modal.classList.remove('active');

         document.body.style.overflow = '';

     }

     /* ESC KEY */

     document.addEventListener('keydown', (e) => {

         if (!modal.classList.contains('active')) return;

         if (e.key === 'Escape') {
             closeModal();
         }

         if (e.key === 'ArrowRight') {
             nextBtn.click();
         }

         if (e.key === 'ArrowLeft') {
             prevBtn.click();
         }

     });

     /* CLICK OUTSIDE IMAGE */

     modal.addEventListener('click', (e) => {

         if (e.target === modal) {
             closeModal();
         }

     });
 </script>
 @endpush
 @endsection