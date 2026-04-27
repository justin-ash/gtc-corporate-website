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
 <!-- end main-content -->

 <!-- About area start here -->
 <section class="about-section-three pt-120 pb-120">
     <div class="container">
         <div class="row g-5 g-xxl-0">
             <div class="col-xl-6 image-column">
                 <div class="inner-column">
                     <div class="shape">
                         <img class="animation__rotate" src="{{ asset('images/about/about-three-info.png') }}" alt="Image">
                     </div>
                     <figure class="image">
                         <img src="{{ asset('images/about/about-three-image.jpg') }}" alt="Image">
                     </figure>
                     <p class="text mt-30 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Consumers today increasingly rely on digital channels to research products. We analyze brands and their offerings, engaging with them accordingly. Meanwhile, 51% of consumers..</p>
                     <div class="info mt-50 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                         <a class="btn-one-rounded" href="#0">more about <i class="fa-regular fa-arrow-up-right"></i></a>
                         <div class="user">
                             <ul>
                                 <li><img src="{{ asset('images/about/about-two-user1.png') }}" alt="Image"></li>
                                 <li><img src="{{ asset('images/about/about-two-user2.png') }}" alt="Image"></li>
                                 <li><img src="{{ asset('images/about/about-two-user3.png') }}" alt="Image"></li>
                                 <li><img src="{{ asset('images/about/about-two-user4.png') }}" alt="Image"></li>
                             </ul>
                             <h6 class="title">10M+ Impact Across the World. <img src="images/about/about-two-line.png" alt="Image"></h6>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-xl-6 content-column">
                 <div class="inner-column">
                     <div class="sec-title">
                         <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">ABOUT US</h6>
                         <h2 class="title wow splt-txt" data-splitting>We provide brilliant idea to grow the <span class="font-weight-300">consulting</span> <span class="font-weight-300">agency</span> your sharp brand</h2>
                     </div>
                     <div class="about-block-three mt-50">
                         <div class="row g-0">
                             <div class="col-sm-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                 <div class="content-box">
                                     <div class="count-box"><span class="count-text" data-stop="15" data-speed="2000"></span>+</div>
                                     <p class="text">Experience Team Help you</p>
                                 </div>
                             </div>
                             <div class="col-sm-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                                 <div class="content-box margin-minus">
                                     <div class="count-box"><span class="count-text" data-stop="18" data-speed="2000"></span>M</div>
                                     <p class="text">We helped to get companies</p>
                                 </div>
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
             <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Growth Rate</h6>
             <div class="flex-content">
                 <h2 class="title text-white wow splt-txt" data-splitting>Building Connections for grow <br> Limitless Opportunities.</h2>
                 <a class="btn-one-light border-0 rounded-0 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" href="page-about.html">Discover More</a>
             </div>
         </div>
         <div class="row g-5">
             <div class="col-xl-4 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                 <div class="growth-block">
                     <!-- pie-graph -->
                     <div class="pie-graph">
                         <div class="graph-outer">
                             <input type="text" class="dial" data-fgColor="#C6D936" data-bgColor="#fff" data-width="120" data-height="120" data-linecap="normal" value="90">
                             <div class="inner-text count-box"><span class="count-text" data-stop="90" data-speed="2000"></span>%
                             </div>
                         </div>
                     </div>
                     <div class="content-box">
                         <h4 class="title">Scalable Solutions</h4>
                         <p class="text">End to end fiber optic cable nnectivity for stable</p>
                     </div>
                 </div>
             </div>

             <div class="col-xl-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                 <div class="growth-block">
                     <!-- pie-graph -->
                     <div class="pie-graph">
                         <div class="graph-outer">
                             <input type="text" class="dial" data-fgColor="#C6D936" data-bgColor="#fff" data-width="120" data-height="120" data-linecap="normal" value="95">
                             <div class="inner-text count-box"><span class="count-text" data-stop="95" data-speed="2000"></span>%</div>
                         </div>
                     </div>
                     <div class="content-box">
                         <h4 class="title">Automation Features</h4>
                         <p class="text">End to end fiber optic cable nnectivity for stable</p>
                     </div>
                 </div>
             </div>

             <div class="col-xl-4 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                 <div class="growth-block">
                     <!-- pie-graph -->
                     <div class="pie-graph">
                         <div class="graph-outer">
                             <input type="text" class="dial" data-fgColor="#C6D936" data-bgColor="#fff" data-width="120"
                                 data-height="120" data-linecap="normal" value="75">
                             <div class="inner-text count-box"><span class="count-text" data-stop="75" data-speed="2000"></span>%
                             </div>
                         </div>
                     </div>
                     <div class="content-box">
                         <h4 class="title">24/7 Support</h4>
                         <p class="text">End to end fiber optic cable nnectivity for stable</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Growth area end here -->

 <!-- Funfact area start here -->
 <section class="funfact-section-four">
     <div class="container">
         <div class="row g-5 align-items-center">
             <div class="col-xl-4">
                 <div class="sec-title">
                     <h2 class="title wow splt-txt" data-splitting>We Help real
                         People do more
                         Business Plan</h2>
                 </div>
             </div>
             <div class="col-xl-8">
                 <div class="row g-4">

                     <div class="col-sm-4">
                         <div class="funfact-block-four border-0">
                             <img src="images/shape/funface-four-shape.png" alt="Image">
                             <h2 class="title">90%</h2>
                             <h5 class="sub-title">Clients Satisfactions</h5>
                         </div>
                     </div>

                     <div class="col-sm-4">
                         <div class="funfact-block-four">
                             <img src="images/shape/funface-four-shape.png" alt="Image">
                             <h2 class="title">40%</h2>
                             <h5 class="sub-title">Decrease Expense</h5>
                         </div>
                     </div>

                     <div class="col-sm-4">
                         <div class="funfact-block-four">
                             <img src="images/shape/funface-four-shape.png" alt="Image">
                             <h2 class="title">7M</h2>
                             <h5 class="sub-title">Money Flow Users</h5>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Funfact area end here -->

 <!-- Process area end here -->
 <section class="process-section-four pt-120 pb-120">
     <div class="container">


         <div class="outer-box">
             <div class="sec-title center mb-50">
                 <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Process</h6>
                 <h2 class="title wow splt-txt" data-splitting>Ensure the success of <br> your business venture.</h2>
             </div>

             <div class="process-tab">
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item" role="presentation">
                         <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                             role="tab" aria-controls="home" aria-selected="true">
                             Business Analysis
                             <span class="number">01</span>
                         </button>
                     </li>
                     <li class="nav-item" role="presentation">
                         <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                             role="tab" aria-controls="profile" aria-selected="false">
                             Business Strategy
                             <span class="number">02</span>
                         </button>
                     </li>
                     <li class="nav-item" role="presentation">
                         <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                             role="tab" aria-controls="contact" aria-selected="false">
                             Final Execution
                             <span class="number">03</span>
                         </button>
                     </li>
                 </ul>
             </div>

             <div class="tab-content mt-30" id="myTabContent">
                 <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <div class="row g-5 align-items-center">
                         <div class="col-lg-7 content-column">
                             <div class="inner-column">
                                 <div class="sec-title mb-30">
                                     <h2 class="title">Essential Features for Time Management</h2>
                                     <p class="text fs-16">Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque laudantium totamto aperiame eaque ipsa quae ab illo inventore veritatis</p>
                                 </div>
                                 <div class="list">
                                     <ul>
                                         <li>
                                             <i class="fa-solid fa-check"></i> Optimized Sprint Planning
                                         </li>
                                         <li>
                                             <i class="fa-solid fa-check"></i> Continuous Improvement
                                         </li>
                                     </ul>
                                     <ul>
                                         <li>
                                             <i class="fa-solid fa-check"></i> Incremental Delivery Approach
                                         </li>
                                         <li>
                                             <i class="fa-solid fa-check"></i> Delivering Innovative
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-5 image-column">
                             <div class="inner-column">
                                 <figure class="image">
                                     <svg width="462" height="455" viewBox="0 0 462 455" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M459.997 221.079C454.897 264.279 435.197 314.479 395.797 337.579C336.297 372.479 341.297 426.079 225.097 449.379C206.997 452.979 189.797 454.579 173.597 454.279C164.897 454.079 156.497 453.379 148.297 452.179C74.3971 441.379 24.6971 390.079 6.49711 328.179C-17.5029 246.679 30.3971 193.379 62.1971 161.179C93.9971 129.079 117.197 28.8789 231.197 5.07893C248.597 1.47893 266.397 -0.421065 284.097 0.0789348C324.697 1.07893 368.897 14.3789 399.497 42.1789C401.797 44.2789 403.997 46.4789 406.197 48.6789C448.897 92.3789 466.897 162.179 459.997 221.079Z"
                                             fill="#1A4137" fill-opacity="0.1" />
                                     </svg>
                                     <div class="image1">
                                         <img src="images/process/image1.jpg" alt="Image">
                                     </div>
                                     <div class="image2">
                                         <img src="images/process/image2.jpg" alt="Image">
                                     </div>
                                 </figure>
                             </div>
                         </div>
                     </div>

                 </div>

                 <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <div class="row g-5 align-items-center">
                         <div class="col-lg-7 content-column">
                             <div class="inner-column">
                                 <div class="sec-title mb-30">
                                     <h2 class="title">Essential Features for
                                         Business Strategy</h2>
                                     <p class="text fs-16">Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque
                                         laudantium
                                         totamto aperiame
                                         eaque ipsa quae ab illo inventore veritatis</p>
                                 </div>
                                 <div class="list">
                                     <ul>
                                         <li>
                                             <i class="fa-solid fa-check"></i> Optimized Sprint Planning
                                         </li>
                                         <li>
                                             <i class="fa-solid fa-check"></i> Continuous Improvement
                                         </li>
                                     </ul>

                                     <ul>
                                         <li>
                                             <i class="fa-solid fa-check"></i> Incremental Delivery Approach
                                         </li>
                                         <li>
                                             <i class="fa-solid fa-check"></i> Delivering Innovative
                                         </li>
                                     </ul>

                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-5 image-column">
                             <div class="inner-column">
                                 <figure class="image">
                                     <svg width="462" height="455" viewBox="0 0 462 455" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M459.997 221.079C454.897 264.279 435.197 314.479 395.797 337.579C336.297 372.479 341.297 426.079 225.097 449.379C206.997 452.979 189.797 454.579 173.597 454.279C164.897 454.079 156.497 453.379 148.297 452.179C74.3971 441.379 24.6971 390.079 6.49711 328.179C-17.5029 246.679 30.3971 193.379 62.1971 161.179C93.9971 129.079 117.197 28.8789 231.197 5.07893C248.597 1.47893 266.397 -0.421065 284.097 0.0789348C324.697 1.07893 368.897 14.3789 399.497 42.1789C401.797 44.2789 403.997 46.4789 406.197 48.6789C448.897 92.3789 466.897 162.179 459.997 221.079Z"
                                             fill="#1A4137" fill-opacity="0.1" />
                                     </svg>
                                     <div class="image1">
                                         <img src="images/process/image1.jpg" alt="Image">
                                     </div>
                                     <div class="image2">
                                         <img src="images/process/image2.jpg" alt="Image">
                                     </div>
                                 </figure>
                             </div>
                         </div>
                     </div>

                 </div>

                 <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                     <div class="row g-5 align-items-center">
                         <div class="col-lg-7 content-column">
                             <div class="inner-column">
                                 <div class="sec-title mb-30">
                                     <h2 class="title">Essential Features for
                                         Final Execution</h2>
                                     <p class="text fs-16">Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque
                                         laudantium
                                         totamto aperiame
                                         eaque ipsa quae ab illo inventore veritatis</p>
                                 </div>
                                 <div class="list">
                                     <ul>
                                         <li>
                                             <i class="fa-solid fa-check"></i> Optimized Sprint Planning
                                         </li>
                                         <li>
                                             <i class="fa-solid fa-check"></i> Continuous Improvement
                                         </li>
                                     </ul>

                                     <ul>
                                         <li>
                                             <i class="fa-solid fa-check"></i> Incremental Delivery Approach
                                         </li>
                                         <li>
                                             <i class="fa-solid fa-check"></i> Delivering Innovative
                                         </li>
                                     </ul>

                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-5 image-column">
                             <div class="inner-column">
                                 <figure class="image">
                                     <svg width="462" height="455" viewBox="0 0 462 455" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M459.997 221.079C454.897 264.279 435.197 314.479 395.797 337.579C336.297 372.479 341.297 426.079 225.097 449.379C206.997 452.979 189.797 454.579 173.597 454.279C164.897 454.079 156.497 453.379 148.297 452.179C74.3971 441.379 24.6971 390.079 6.49711 328.179C-17.5029 246.679 30.3971 193.379 62.1971 161.179C93.9971 129.079 117.197 28.8789 231.197 5.07893C248.597 1.47893 266.397 -0.421065 284.097 0.0789348C324.697 1.07893 368.897 14.3789 399.497 42.1789C401.797 44.2789 403.997 46.4789 406.197 48.6789C448.897 92.3789 466.897 162.179 459.997 221.079Z"
                                             fill="#1A4137" fill-opacity="0.1" />
                                     </svg>
                                     <div class="image1">
                                         <img src="images/process/image1.jpg" alt="Image">
                                     </div>
                                     <div class="image2">
                                         <img src="images/process/image2.jpg" alt="Image">
                                     </div>
                                 </figure>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </section>
 <!-- Process area end here -->
 @endsection