@extends('layout.app')

@section('content')
<!-- Banner area start here -->
<section class="banner-section">
  <div class="arry"><img class="animation__arryLeftRight" src="images/shape/banner-arry.png" alt="Image"></div>
  <div class="sec-shape"><img src="images/shape/banner-shape.png" alt="Image"></div>
  <button class="goBottom-btn">
    <svg class="animation__arryUpDown" width="16" height="36" viewBox="0 0 16 36" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M13.8328 6.33334C13.8328 5.17961 13.4907 4.0518 12.8497 3.09251C12.2088 2.13322 11.2977 1.38555 10.2318 0.944039C9.16591 0.502527 7.99302 0.387008 6.86146 0.612088C5.72991 0.837169 4.69051 1.39274 3.8747 2.20855C3.0589 3.02435 2.50332 4.06375 2.27824 5.19531C2.05316 6.32686 2.16868 7.49975 2.61019 8.56566C3.05171 9.63156 3.79938 10.5426 4.75867 11.1836C5.71795 11.8245 6.84577 12.1667 7.99949 12.1667C9.54602 12.1648 11.0287 11.5496 12.1222 10.4561C13.2158 9.3625 13.831 7.87986 13.8328 6.33334ZM3.83283 6.33334C3.83283 5.50925 4.0772 4.70366 4.53504 4.01846C4.99287 3.33325 5.64362 2.7992 6.40498 2.48384C7.16634 2.16847 8.00412 2.08596 8.81237 2.24673C9.62062 2.4075 10.3631 2.80434 10.9458 3.38706C11.5285 3.96978 11.9253 4.71221 12.0861 5.52046C12.2469 6.32871 12.1644 7.16649 11.849 7.92785C11.5336 8.68921 10.9996 9.33995 10.3144 9.79779C9.62916 10.2556 8.82358 10.5 7.99949 10.5C6.89474 10.499 5.83552 10.0597 5.05434 9.27849C4.27316 8.49731 3.83385 7.43809 3.83283 6.33334ZM15.2554 27.4108C15.3327 27.4882 15.3941 27.58 15.436 27.6811C15.4779 27.7822 15.4995 27.8905 15.4995 28C15.4995 28.1094 15.4779 28.2177 15.436 28.3188C15.3941 28.4199 15.3327 28.5118 15.2554 28.5891L8.58869 35.2558C8.51133 35.3332 8.41948 35.3946 8.31839 35.4365C8.2173 35.4783 8.10895 35.4999 7.99953 35.4999C7.8901 35.4999 7.78175 35.4783 7.68066 35.4365C7.57957 35.3946 7.48772 35.3332 7.41036 35.2558L0.743692 28.5891C0.591894 28.432 0.507898 28.2215 0.509797 28.003C0.511696 27.7845 0.599336 27.5755 0.753843 27.421C0.90835 27.2664 1.11736 27.1788 1.33586 27.1769C1.55436 27.175 1.76486 27.259 1.92203 27.4108L7.16616 32.655V18C7.16616 17.779 7.25396 17.567 7.41024 17.4107C7.56652 17.2545 7.77848 17.1667 7.99949 17.1667C8.22051 17.1667 8.43247 17.2545 8.58875 17.4107C8.74503 17.567 8.83283 17.779 8.83283 18V32.655L14.077 27.4109C14.1543 27.3334 14.2462 27.272 14.3473 27.2302C14.4484 27.1883 14.5567 27.1667 14.6661 27.1667C14.7756 27.1667 14.8839 27.1882 14.985 27.2301C15.0861 27.272 15.178 27.3334 15.2554 27.4108Z" fill="white" />
    </svg>
  </button>

  <div class="swiper banner-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-bg" data-background="images/banner/banner-image1.jpg"></div>
        <div class="container">
          <div class="outer-box">
            <div class="row g-0 align-items-end">
              <div class="col-lg-8 content-column">
                <div class="inner-column">
                  <h6 class="sub-title" data-animation="fadeInUp" data-delay=".3s">Growth, Innovation, and Success
                  </h6>
                  <h1 class="title" data-animation="fadeInUp" data-delay=".5s">transforming
                    <span>business growth</span>
                    Drive Success
                  </h1>
                  <a class="btn-one" data-animation="fadeInUp" data-delay=".8s" href="{{ route('contact') }}">free consultation</a>
                </div>
              </div>

              <div class="col-lg-4">
                <p class="text" data-animation="fadeInUp" data-delay=".9s">Take your brand to new heights Agency offering everything from strategy business.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-bg" data-background="images/banner/banner-image2.jpg"></div>
        <div class="container">
          <div class="outer-box">
            <div class="row g-0 align-items-end">
              <div class="col-lg-8 content-column">
                <div class="inner-column">
                  <h6 class="sub-title" data-animation="fadeInUp" data-delay=".3s">Growth, Innovation, and Success
                  </h6>
                  <h1 class="title" data-animation="fadeInUp" data-delay=".5s">transforming
                    <span>business growth</span>
                    Drive Success
                  </h1>
                  <a class="btn-one" data-animation="fadeInUp" data-delay=".8s" href="{{ route('contact') }}">free consultation</a>
                </div>
              </div>

              <div class="col-lg-4">
                <p class="text" data-animation="fadeInUp" data-delay=".9s">Take your brand to new heights Agency offering everything from strategy business.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-bg" data-background="images/banner/banner-image3.jpg"></div>
        <div class="container">
          <div class="outer-box">
            <div class="row g-0 align-items-end">
              <div class="col-lg-8 content-column">
                <div class="inner-column">
                  <h6 class="sub-title" data-animation="fadeInUp" data-delay=".3s">Growth, Innovation, and Success
                  </h6>
                  <h1 class="title" data-animation="fadeInUp" data-delay=".5s">transforming
                    <span>business growth</span>
                    Drive Success
                  </h1>
                  <a class="btn-one" data-animation="fadeInUp" data-delay=".8s" href="{{ route('contact') }}">free consultation</a>
                </div>
              </div>

              <div class="col-lg-4">
                <p class="text" data-animation="fadeInUp" data-delay=".9s">Take your brand to new heights Agency offering everything from strategy business.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Banner area end here -->

<!-- About area start here -->
<section class="about-section pt-120 pb-120 paralax__animation">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 image-column wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="inner-column">
          <div data-depth="0.01" class="image1 overlay-anim">
            <img src="images/about/about-image1.jpg" alt="Image">
          </div>
          <div class="info animation__arryLeftRight">
            <img src="images/about/about-info.png" alt="Image">
          </div>
          <div class="image2 overlay-anim" data-depth="0.05">
            <img src="images/about/about-image2.jpg" alt="Image">
          </div>
        </div>
      </div>

      <div class="col-lg-6 content-column">
        <div class="inner-column">
          <div class="content-box">
            <div class="sec-title">
              <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">ABOUT US</h6>
              <h2 class="title wow splt-txt" data-splitting>The Journey Behind Our Business Success</h2>
              <p class="text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Consultez is the go-to hub for early adopters and innovation enthusiasts, offering cutting-edge technology</p>
            </div>
            <div class="about-block wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
              <div class="inner-box">
                <div class="icon">
                  <svg width="51" height="55" viewBox="0 0 51 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M3.80346 0.784813C1.98124 0.784813 0.498352 2.26681 0.498352 4.08903C0.498352 5.91125 1.98124 7.39414 3.80346 7.39414C5.31663 7.39414 6.58221 6.36547 6.97231 4.97431H17.3597C12.1976 7.3407 8.24056 11.8838 6.69799 17.5544C6.24199 19.194 6.01132 20.9245 6.01132 22.6986C6.01132 23.135 6.01756 23.7131 6.06654 24.3169C6.20013 25.8016 6.48335 27.2203 6.90195 28.5215C8.19157 32.7013 10.9222 36.3724 14.6005 38.8662C15.842 39.6846 16.6124 41.1916 16.6124 42.8V45.325C16.6124 45.8175 17.0105 46.2156 17.5031 46.2156H18.4391V51.2432C18.4391 52.8846 19.7742 54.2196 21.4147 54.2196H29.5977C31.2392 54.2196 32.5742 52.8846 32.5742 51.2432V46.2156H33.4889C33.9814 46.2156 34.3795 45.8175 34.3795 45.325V42.8107C34.3795 41.2085 35.1321 39.7122 36.3478 38.9018C40.0323 36.408 42.7879 32.7226 44.1087 28.526C44.5585 27.0965 44.8337 25.6733 44.9254 24.3223C44.9913 23.6391 45.0136 22.948 44.9913 22.2658C44.9468 20.6315 44.7125 19.0453 44.2939 17.5544C42.7362 11.9506 38.6794 7.34961 33.5281 4.97342H44.0303C44.4204 6.36369 45.6851 7.39325 47.1992 7.39325C49.0214 7.39325 50.5043 5.91036 50.5043 4.08814C50.5043 2.26592 49.0214 0.783922 47.1992 0.783922C45.6896 0.783922 44.4275 1.80725 44.0339 3.19217H28.6715C28.2796 1.80636 27.0167 0.78125 25.5062 0.78125C23.9957 0.78125 22.7248 1.80636 22.332 3.19217H6.96874C6.57509 1.80725 5.31307 0.784813 3.80346 0.784813ZM3.80346 5.61289C2.9636 5.61289 2.2796 4.92889 2.2796 4.08903C2.2796 3.24917 2.9636 2.56606 3.80346 2.56606C4.64332 2.56606 5.31841 3.24205 5.32554 4.07656C5.32554 4.07923 5.32376 4.08102 5.32376 4.08369C5.32376 4.08725 5.32554 4.09081 5.32554 4.09438C5.32287 4.93245 4.64154 5.61289 3.80346 5.61289ZM30.7912 51.2432C30.7912 51.9022 30.255 52.4384 29.596 52.4384H21.4129C20.7547 52.4384 20.2186 51.9022 20.2186 51.2432V46.2156H30.7903V51.2432H30.7912ZM42.5759 18.0344C42.9562 19.3873 43.1682 20.8283 43.2083 22.3183V22.3228C43.227 22.9302 43.2083 23.5456 43.1477 24.178C43.064 25.4133 42.8146 26.6958 42.4067 27.9925C41.207 31.808 38.6999 35.1585 35.3521 37.4242C33.626 38.574 32.5956 40.5886 32.5956 42.8116V44.4352H31.6978C31.6916 44.4352 31.6863 44.4317 31.6809 44.4317H26.3906V25.5967H29.905C30.3975 25.5967 30.7956 25.1986 30.7956 24.7061C30.7956 24.2136 30.3975 23.8155 29.905 23.8155H21.0941C20.6015 23.8155 20.2034 24.2136 20.2034 24.7061C20.2034 25.1986 20.6015 25.5967 21.0941 25.5967H24.6085V44.4317H19.3271C19.3208 44.4317 19.3155 44.4352 19.3101 44.4352H18.3919V42.8009C18.3919 40.6011 17.3142 38.5242 15.59 37.3859C12.2555 35.1264 9.77421 31.7919 8.59948 27.9854C8.21651 26.7991 7.9609 25.5112 7.83977 24.1646C7.80504 23.7496 7.7899 23.2971 7.7899 22.6986C7.7899 21.0857 7.9992 19.5164 8.41334 18.0273C10.2204 11.3859 15.6639 6.44563 22.4033 5.24684C22.4264 5.30919 22.4594 5.36619 22.4861 5.42586C22.5137 5.48731 22.5395 5.54877 22.5698 5.60755C22.6331 5.73045 22.7061 5.84623 22.7836 5.95934C22.8121 6.00031 22.8352 6.04395 22.8655 6.08314C22.9777 6.23098 23.1006 6.36903 23.236 6.4955C23.2654 6.52311 23.3001 6.54627 23.3304 6.57298C23.44 6.66828 23.554 6.75823 23.6751 6.83928C23.7285 6.87491 23.7846 6.90519 23.8399 6.93814C23.9476 7.00138 24.0589 7.05838 24.1738 7.10914C24.2362 7.13675 24.2985 7.16258 24.3626 7.18573C24.4856 7.23116 24.6111 7.26589 24.7394 7.29706C24.7991 7.31131 24.8569 7.32823 24.9175 7.33981C25.1081 7.37366 25.3023 7.39592 25.5018 7.39592C25.7004 7.39592 25.8936 7.37366 26.0833 7.33981C26.1448 7.32913 26.2036 7.31131 26.265 7.29617C26.3897 7.26589 26.5117 7.23205 26.6302 7.18841C26.7005 7.16258 26.7691 7.13408 26.8377 7.1038C26.9366 7.06016 27.031 7.01028 27.1245 6.95773C27.2002 6.91498 27.275 6.87402 27.3462 6.82592C27.4113 6.78228 27.4709 6.73241 27.5324 6.68342C27.9973 6.32183 28.3571 5.84713 28.5691 5.30206C28.5735 5.28959 28.5807 5.27891 28.586 5.26733C35.1918 6.44919 40.7555 11.4892 42.5742 18.0344H42.5759ZM47.1965 2.56606C48.0364 2.56606 48.7204 3.24917 48.7204 4.08903C48.7204 4.92889 48.0364 5.61289 47.1965 5.61289C46.3566 5.61289 45.6753 4.93067 45.6735 4.0917C45.6735 4.08903 45.6753 4.08725 45.6753 4.08458C45.6753 4.0828 45.6753 4.08191 45.6753 4.08013C45.6806 3.24472 46.3593 2.56606 47.1965 2.56606ZM25.5044 2.56339C26.3425 2.56339 27.0256 3.24561 27.0256 4.08369L27.0167 4.20214C26.9642 4.9948 26.2998 5.61556 25.5044 5.61556C24.6975 5.61556 24.0287 4.98945 23.9824 4.18878C23.9806 4.14692 23.9824 4.12466 23.9734 4.08369C23.9734 3.24561 24.6601 2.56339 25.5044 2.56339Z"
                      fill="black" />
                  </svg>
                </div>
                <div class="content">
                  <h4 class="title">Creative Solutions</h4>
                  <p class="text">In today's competitive business landscape, the need for efficient IT solutions has been more critical.</p>
                </div>
              </div>
            </div>

            <div class="about-block wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
              <div class="inner-box">
                <div class="icon">
                  <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M37.0891 13.1461L37.2094 13.0086L38.2922 11.9258L40.2516 9.96641C41.1453 9.07266 41.6438 7.88672 41.6438 6.63203C41.6438 5.37734 41.1453 4.19141 40.2516 3.29766L39.7016 2.74766C37.9141 0.960156 34.8203 0.960156 33.0328 2.74766L31.0735 4.70703L3.2297 32.5508L3.04064 32.7398L1.09845 41.9008L10.2594 39.9586L37.0891 13.1461ZM34.2531 3.95078C35.3875 2.83359 37.3469 2.81641 38.4813 3.95078L39.0485 4.51797C39.6156 5.08516 39.925 5.82422 39.925 6.63203C39.925 7.43984 39.6156 8.17891 39.0485 8.74609L37.0891 10.7055L32.2938 5.91016L34.2531 3.95078ZM31.0735 7.13047L32.861 8.91797L6.83907 34.9398L5.05157 33.1523L31.0735 7.13047ZM3.33282 39.6664L4.34689 34.8883L8.11095 38.6523L3.33282 39.6664ZM9.84689 37.9477L8.05939 36.1602L34.0813 10.1383L35.8688 11.9258L9.84689 37.9477ZM12.425 20.932L0.239075 8.74609L8.74689 0.238281L20.9328 12.4242L17.2375 16.0336L16.0172 14.8133L18.4406 12.3898L16.0172 9.94922L12.4078 13.5758L11.1875 12.3555L14.7969 8.74609L12.3734 6.30547L9.93283 8.74609L8.71251 7.52578L11.1531 5.08516L8.7297 2.66172L2.64532 8.74609L13.6281 19.7289L12.4078 20.932H12.425ZM42.761 34.2523L34.2531 42.7602L22.0672 30.5742L23.2875 29.3711L34.2531 40.3367L40.3375 34.2523L37.9141 31.8289L34.2875 35.4383L33.0672 34.218L36.6938 30.5914L34.2531 28.168L31.8297 30.5914L30.6094 29.3711L33.0328 26.9305L30.5922 24.507L26.9828 28.1164L25.7625 26.8961L30.5578 22.032L42.7438 34.218L42.761 34.2523Z"
                      fill="black" />
                  </svg>
                </div>
                <div class="content">
                  <h4 class="title">Actionable Solutions</h4>
                  <p class="text">Innovation is the key to staying ahead in a changing world. We harness cutting-edge technology</p>
                </div>
              </div>
            </div>
          </div>

          <div class="progress mt-30">
            <div class="progress-single">
              <h5 class="progress-title">Business Success</h5>
              <div class="bar">
                <div class="bar-inner count-bar" data-percent="80%">
                  <div class="count-text">88%</div>
                </div>
              </div>
            </div>
          </div>

          <div class="info mt-50">
            <a href="{{ route('projects') }}" class="btn-two">Find Services</a>
            <div class="user">
              <div class="image">
                <img src="images/about/about-user.png" alt="Image">
              </div>
              <div>
                <img src="images/about/signature.png" alt="Image">
                <p class="sub-title">Founder</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- About area end here -->

<!-- Case area start here -->
<section class="case-section have-combine pt-120 pb-120" style="background-color: #1A4137;">
  <div class="outer-box">
    <div class="sec-title center mb-50">
      <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Portfolio</h6>
      <h2 class="title wow splt-txt" data-splitting style="color: white;">Showcasing Project & Solutions <br> for Clients case study.</h2>
    </div>
    <div class="swiper case-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image1.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">Cyber Security</span>
                <h4 class="title"><a href="page-case.html">Revolutionizing Brand Strategy</a></h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">Cyber Security</span>
                <h4 class="title"><a href="page-case-details.html">Revolutionizing Brand Strategy</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image2.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">IT Solution</span>
                <h4 class="title"><a href="page-case.html">Technology and artificial Maintenance</a></h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">IT Solution</span>
                <h4 class="title"><a href="page-case-details.html">Technology and artificial Maintenance</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image3.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">Business Consultation</span>
                <h4 class="title"><a href="page-case.html">Business Strategy to Cut Costs by 30%</a>
                </h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">Business Consultation</span>
                <h4 class="title"><a href="page-case-details.html">Business Strategy to Cut Costs by 30%</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image4.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">Digital Agency</span>
                <h4 class="title"><a href="page-case.html">Transforming Legacy Systems</a></h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">Digital Agency</span>
                <h4 class="title"><a href="page-case-details.html">Transforming Legacy Systems</a></h4>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image1.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">Cyber Security</span>
                <h4 class="title"><a href="page-case.html">Revolutionizing Brand Strategy</a></h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">Cyber Security</span>
                <h4 class="title"><a href="page-case-details.html">Revolutionizing Brand Strategy</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image2.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">IT Solution</span>
                <h4 class="title"><a href="page-case.html">Technology and artificial Maintenance</a></h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">IT Solution</span>
                <h4 class="title"><a href="page-case-details.html">Technology and artificial Maintenance</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image3.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">Business Consultation</span>
                <h4 class="title"><a href="page-case.html">Business Strategy to Cut Costs by 30%</a>
                </h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">Business Consultation</span>
                <h4 class="title"><a href="page-case-details.html">Business Strategy to Cut Costs by 30%</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="case-block">
            <div class="inner-box">
              <figure class="image">
                <img src="images/case/case-image4.jpg" alt="Image">
              </figure>
              <div class="content-box">
                <span class="sub-title">Digital Agency</span>
                <h4 class="title"><a href="page-case.html">Transforming Legacy Systems</a></h4>
              </div>
              <a class="arry-btn" href="page-case-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
              <div class="hover-content">
                <span class="sub-title">Digital Agency</span>
                <h4 class="title"><a href="page-case-details.html">Transforming Legacy Systems</a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Case area end here -->

<!-- Choose area start here -->
<section class="choose-section pt-120 pb-120">
  <div class="container">
    <div class="row g-4">
      <div class="col-xl-6 content-column">
        <div class="inner-column">
          <div class="sec-title mb-30">
            <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Mission & Vision</h6>
            <h2 class="title wow splt-txt" data-splitting>we handle complexities, so you can drive growth and success.</h2>
          </div>

          <div class="choose-tab">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> About Us</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> Our Mission</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> Our Vision</button>
              </li>
            </ul>
          </div>

          <div class="tab-content mt-30" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="content-box">
                <p class="text"> At veroeos accusamus dignissimos ducimus blanditiis volupta delenite atque corrupti quos dolores et quas molestias excepturi sint occaecatie</p>
                <div class="list mt-30 mb-50">
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
                <a href="page-about.html" class="btn-two">Discover More</a>
              </div>
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="content-box">
                <p class="text"> At veroeos accusamus dignissimos ducimus blanditiis volupta delenite atque corrupti quos dolores et quas molestias excepturi sint occaecatie</p>
                <div class="list mt-30 mb-50">
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
                <a href="page-about.html" class="btn-two">Discover More</a>
              </div>
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="content-box">
                <p class="text"> At veroeos accusamus dignissimos ducimus blanditiis volupta delenite atque corrupti quos dolores et quas molestias excepturi sint occaecatie</p>
                <div class="list mt-30 mb-50">
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
                <a href="page-about.html" class="btn-two">Discover More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 image-column">
        <div class="inner-column">
          <figure class="image">
            <img class="wow imageUpToDown" src="images/choose/choose-image1.jpg" alt="Image">
            <div class="outer-box">
              <div class="choose-block">
                <!-- pie-graph -->
                <div class="pie-graph">
                  <div class="graph-outer">
                    <input type="text" class="dial" data-fgColor="#000" data-bgColor="#FFFFFF33" data-width="70" data-height="70" data-linecap="normal" value="90">
                  </div>
                  <i class="fa-solid icon fa-arrow-up-right"></i>
                </div>
                <div class="content-box">
                  <div class="inner-text count-box"><span class="count-text" data-stop="95" data-speed="2000"></span>%</div>
                  <h5 class="title">Project Done</h5>
                </div>
              </div>
              <div class="choose-block">
                <!-- pie-graph -->
                <div class="pie-graph">
                  <div class="graph-outer">
                    <input type="text" class="dial" data-fgColor="#000" data-bgColor="#FFFFFF33" data-width="70"
                      data-height="70" data-linecap="normal" value="70">
                  </div>
                  <i class="fa-solid icon fa-arrow-up-right"></i>
                </div>
                <div class="content-box">
                  <div class="inner-text count-box"><span class="count-text" data-stop="50" data-speed="2000"></span>% </div>
                  <h5 class="title">Complete Project</h5>
                </div>
              </div>
            </div>
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Choose area end here -->
<!-- Growth area start here -->
<section class="growth-section pt-120 pb-120" data-background="images/bg/growth-bg.jpg">
  <div class="sec-shape">
    <img class="sway_Y__animation" src="images/shape/growth-shape.png" alt="Image">
  </div>
  <div class="container">
    <div class="sec-title pb-50 mb-50">
      <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Growth Rate</h6>
      <div class="flex-content">
        <h2 class="title text-white wow splt-txt" data-splitting>Building Connections for grow <br> Limitless Opportunities.</h2>
        <a class="btn-one-light border-0 rounded-0 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" href="page-about.html">Discover More</a>
      </div>
    </div>
    <div class="row g-5">
      <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="growth-block">
          <!-- pie-graph -->
          <div class="pie-graph">
            <div class="graph-outer">
              <input type="text" class="dial" data-fgColor="#C6D936" data-bgColor="#fff" data-width="120"
                data-height="120" data-linecap="normal" value="90">
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

      <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
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

      <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
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

<!-- Processing area start here -->
<section class="processing-section pt-120 pb-120">
  <div class="shape">
    <img class="animation__rotate" src="images/shape/dual-circle.png" alt="Image">
  </div>
  <div class="container">
    <div class="sec-title center mb-50">
      <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">How It Works</h6>
      <h2 class="title wow splt-txt" data-splitting>Connect, Collaborate, & Create <br> Limitless Opportunities.
      </h2>
    </div>

    <div class="outer-box">
      <div class="row g-0">
        <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
          <div class="processing-block">
            <div class="inner-box">
              <h3 class="number">01</h3>
              <h4 class="title">Strategic Growth</h4>
              <p class="text">Your Source for Market Trends & Business Intelligence</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
          <div class="processing-block">
            <div class="inner-box">
              <h3 class="number">02</h3>
              <h4 class="title">Fuel Innovation</h4>
              <p class="text">Sparking Innovation, Shaping Tomorrow successful</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
          <div class="processing-block">
            <div class="inner-box">
              <h3 class="number">03</h3>
              <h4 class="title">Financial Planning</h4>
              <p class="text">Helping You Stay on Track with Accurate Estimates</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
          <div class="processing-block">
            <div class="inner-box last-block">
              <h3 class="number">04</h3>
              <h4 class="title">Sustainable Success</h4>
              <p class="text">Amazing Support! with lot of ele
                demos to choose from top</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h5 class="sec-text mt-50 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">Embrace Innovation, Adapt Quickly, and Lead with Confidence. <a href="{{ route('contact') }}">Consult Now</a></h5>
  </div>
</section>
<!-- Processing area end here -->


<!-- Testimonial area start here -->
<section class="testimonial-section">
  <div class="outer-box">
    <figure class="shape">
      <img src="images/shape/testimonial-shape.png" alt="Image">
    </figure>
    <div class="swiper testimonial-slider">
      <div class="swiper-wrapper">
        @foreach($testimonials as $t)
        <div class="swiper-slide">
          <div class="testimonial-block">
            <div class="inner-box">
              <div class="image-box">
                <div class="quate">
                  <svg width="33" height="26" viewBox="0 0 33 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M29.1965 2.87439C30.9987 4.85084 32.0801 7.00696 32.0801 10.6005C32.0801 16.8892 27.5745 22.4592 21.2666 25.334L19.6446 22.9982C25.592 19.764 26.8536 15.6314 27.214 12.9363C26.3129 13.4753 25.0513 13.655 23.7897 13.4753C20.5457 13.116 18.0225 10.6005 18.0225 7.18663C18.0225 5.56954 18.7434 3.95245 19.8248 2.69472C21.0864 1.43698 22.5282 0.897949 24.3304 0.897949C26.3129 0.897949 28.1151 1.79633 29.1965 2.87439ZM11.174 2.87439C12.9763 4.85084 14.0576 7.00696 14.0576 10.6005C14.0576 16.8892 9.55198 22.4592 3.24412 25.334L1.6221 22.9982C7.56951 19.764 8.83109 15.6314 9.19153 12.9363C8.29041 13.4753 7.02884 13.655 5.76727 13.4753C2.52322 13.116 7.62939e-05 10.6005 7.62939e-05 7.18663C7.62939e-05 5.56954 0.720974 3.95245 1.80232 2.69472C2.88367 1.43698 4.50569 0.897949 6.30794 0.897949C8.29041 0.897949 10.0927 1.79633 11.174 2.87439Z"
                      fill="#163839" />
                  </svg>
                </div>
                <figure class="image">
                  @if($t->image)
                  <img src="{{ asset($t->image) }}" alt="Image">
                  @else
                  <img src="{{ asset('images/shape/user.png') }}" alt="Image">
                  @endif
                </figure>
                <div class="star">
                  @for ($i = 1; $i <= 5; $i++)
                    <i class="fa-solid fa-star {{ $i <= $t->rating ? 'active' : '' }}"></i>
                    @endfor
                </div>
              </div>
              <div class="content-box">
                <h3 class="text">{!!$t->message !!}</h3>
                <h4 class="title">{{ $t->name}} / <span>{{ $t->role}}</span></h4>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <div class="swiper-arry">
        <button class="testimonial-prev"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="testimonial-next"><i class="fa-solid fa-arrow-right"></i></button>
      </div>
    </div>
  </div>
</section>
<!-- Testimonial area end here -->

@endsection