  @extends('layout.app')

  @section('content')
  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('images/background/page-title-bg.jpg') }});">
      <div class="auto-container">
          <div class="title-outer">
              <h1 class="title">Gallery</h1>
              <ul class="page-breadcrumb">
                  <li><a href="{{ route('home') }}">Home</a></li>
                  <li>Gallery</li>
              </ul>
          </div>
      </div>
  </section>
  <!-- end main-content -->
  <section class="project-gallery py-5">
      <div class="container">

          <div class="section-title  mb-5">
              <h4 class="subtitle mb-20">PROJECT GALLERY</h4>
              <h2>Our Project Gallery</h2>
              <p>
                  Explore completed projects across infrastructure,
                  protection and communication networks.
              </p>
          </div>



          <!-- POWER -->
          <div class="gallery-section category-block"
              data-category="power">

              <div class="row g-4 align-items-start">

                  <div class="col-xl-3 col-lg-4">

                      <div class="category-info">

                          <div class="icon-circle">
                              <i class="fa-solid fa-tower-broadcast"></i>
                          </div>

                          <h3>
                              Over Head Power Lines(OHPL)
                          </h3>

                          <p>
                              Reliable power transmission solutions
                              across the Kingdom.
                          </p>

                      </div>

                  </div>

                  <div class="col-xl-9 col-lg-8">

                      <div class="row g-3">

                          <div class="gallery">

                              <img src="./uploads/gallery/oh.jpg"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/oh2.jpg"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/oh3.jpg"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/oh4.jpg"
                                  class="gallery-image gallery-slider-item">

                          </div>

                      </div>

                  </div>

              </div>

              <hr class="category-divider">

          </div>

          <!-- CATHODIC -->
          <div class="gallery-section category-block"
              data-category="cathodic">

              <div class="row g-4 align-items-start">

                  <div class="col-xl-3 col-lg-4">

                      <div class="category-info">

                          <div class="icon-circle">
                              <i class="fa-solid fa-shield-halved"></i>
                          </div>

                          <h3>
                              Cathodic Protection (CP)
                          </h3>

                          <p>
                              Advanced corrosion protection
                              for pipelines and structures.
                          </p>



                      </div>

                  </div>

                  <div class="col-xl-9 col-lg-8">

                      <div class="row g-3">

                          <div class="gallery">
                              <img src="./uploads/gallery/CP.jpg"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/cp2.jpg"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/cp4.jpg"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/cp3.jpg"
                                  class="gallery-image gallery-slider-item">

                          </div>

                      </div>

                  </div>

              </div>

              <hr class="category-divider">

          </div>

          <!-- FIBER -->
          <div class="gallery-section category-block"
              data-category="fiber">

              <div class="row g-4 align-items-start">

                  <div class="col-xl-3 col-lg-4">

                      <div class="category-info">

                          <div class="icon-circle">
                              <i class="fa-solid fa-wave-square"></i>
                          </div>

                          <h3>
                              Fiber Optic Communications (FOC)
                          </h3>

                          <p>
                              High-speed connectivity solutions
                              for modern infrastructure.
                          </p>


                      </div>

                  </div>

                  <div class="col-xl-9 col-lg-8">

                      <div class="row g-3">
                          <div class="gallery">
                              <img src="./uploads/gallery/fo.jpg"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/fo2.jpeg"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/fo3.jpg"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/fo4.jpg"
                                  class="gallery-image gallery-slider-item">

                          </div>

                      </div>

                  </div>

              </div>
              <hr class="category-divider">
          </div>
          <div class="gallery-section category-block"
              data-category="fiber">

              <div class="row g-4 align-items-start">

                  <div class="col-xl-3 col-lg-4">

                      <div class="category-info">

                          <div class="icon-circle">
                              <i class="fa-solid fa-gauge-high"></i>
                          </div>

                          <h3>
                              Electrical & Instrumental works (E&I)
                          </h3>

                          <p>
                              High-speed connectivity solutions
                              for modern infrastructure.
                          </p>


                      </div>

                  </div>

                  <div class="col-xl-9 col-lg-8">

                      <div class="row g-3">
                          <div class="gallery">
                              <img src="./uploads/gallery/ei.jpg"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/ei2.jpg"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/ei3.png"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/ei4.jpg"
                                  class="gallery-image gallery-slider-item">
                          </div>

                      </div>

                  </div>

              </div>
              <hr class="category-divider">
          </div>
          <div class="gallery-section category-block"
              data-category="fiber">

              <div class="row g-4 align-items-start">

                  <div class="col-xl-3 col-lg-4">

                      <div class="category-info">

                          <div class="icon-circle">
                              <i class="fa-solid fa-person-digging"></i>
                          </div>

                          <h3>
                              Civil Works
                          </h3>

                          <p>
                              High-speed connectivity solutions
                              for modern infrastructure.
                          </p>


                      </div>

                  </div>

                  <div class="col-xl-9 col-lg-8">

                      <div class="row g-3">
                          <div class="gallery">
                              <img src="./uploads/gallery/C1.png"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/C2.png"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/C3.png"
                                  class="gallery-image gallery-slider-item">
                              <img src="./uploads/gallery/C4.png"
                                  class="gallery-image gallery-slider-item">

                          </div>

                      </div>

                  </div>

              </div>

          </div>
  </section>

  <div class="custom-modal" id="galleryModal">
      <span class="close-btn" id="closeModal">&times;</span>
      <button class="nav-btn prev-btn" id="prevBtn">&#10094;</button>
      <img src="" class="modal-image" id="modalImage">
      <button class="nav-btn next-btn" id="nextBtn">&#10095;</button>
  </div>
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

      .project-gallery {
          background: #fff;
      }

      .subtitle {
          color: #fff;
          font-size: 14px;
          letter-spacing: 1px;
          background-color: #198754;
          padding: 5px 15px;
          border-radius: 25px;
          width: fit-content;
      }

      .gallery-filters {
          display: flex;
          justify-content: center;
          flex-wrap: wrap;
          gap: 12px;
      }

      .filter-btn {
          border: 1px solid #198754;
          background: #fff;
          color: #198754;
          padding: 12px 24px;
          border-radius: 8px;
          cursor: pointer;
      }

      .filter-btn.active {
          background: #198754;
          color: #fff;
      }

      .category-info {
          padding-right: 20px;
      }

      .icon-circle {
          width: 70px;
          height: 70px;
          border-radius: 50%;
          border: 1px solid #d7e7df;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 28px;
          margin-bottom: 20px;
      }

      .category-info h3 {
          font-size: 30px;
          font-weight: 700;
          margin-bottom: 15px;
      }

      .category-info p {
          color: #666;
          margin-bottom: 20px;
      }

      .category-info a {
          color: #198754;
          text-decoration: none;
          font-weight: 600;
      }

      .gallery-image {
          width: 100%;
          height: 220px;
          object-fit: cover;
          border-radius: 12px;
          cursor: pointer;
          transition: .3s;
      }

      .gallery-image:hover {
          transform: translateY(-5px);
      }

      .category-divider {
          opacity: .15;
      }

      @media(max-width:991px) {

          .category-info {
              text-align: center;
              padding-right: 0;
              margin-bottom: 25px;
          }

          .icon-circle {
              margin: auto auto 20px;
          }
      }

      .gallery-nav {
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          width: 55px;
          height: 55px;
          border: none;
          border-radius: 50%;
          background: rgba(0, 0, 0, .6);
          color: #fff;
          font-size: 28px;
      }

      .gallery-prev {
          left: 20px;
      }

      .gallery-next {
          right: 20px;
      }

      #modalImage {
          max-height: 80vh;
          object-fit: contain;
      }

      @media(max-width:768px) {

          .gallery-nav {
              width: 45px;
              height: 45px;
              font-size: 22px;
          }

      }
  </style>

  <!-- <section class="featured-projects py-5">
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

            

         </div>

         <div class="row g-4">
             @foreach($projects as $project)
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
 </section> -->
  <!-- End Case Section -->
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