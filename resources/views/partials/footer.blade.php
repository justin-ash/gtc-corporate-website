<!-- Footer area start here -->
<footer class="main-footer footer-style-one">
  <div class="outer-box">

    <div class="footer-left">
      <div class="logo">
        <a href="{{ route('home') }}"><img src="{{ asset(config('settings.logo')) }}" alt="Logo"></a>
      </div>
      <button class="back-top-btn mobile-nav-toggler">
        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="1.5" cy="1.5" r="1.5" fill="white" />
          <circle cx="1.5" cy="9.5" r="1.5" fill="white" />
          <circle cx="1.5" cy="17.5" r="1.5" fill="white" />
          <circle cx="9.5" cy="1.5" r="1.5" fill="white" />
          <circle cx="9.5" cy="9.5" r="1.5" fill="white" />
          <circle cx="9.5" cy="17.5" r="1.5" fill="white" />
          <circle cx="17.5" cy="1.5" r="1.5" fill="white" />
          <circle cx="17.5" cy="9.5" r="1.5" fill="white" />
          <circle cx="17.5" cy="17.5" r="1.5" fill="white" />
        </svg>
      </button>
    </div>

    <div class="row g-0 w-100">
      <div class="col-xl-8 left-column order-2 order-xl-1">

        <div class="footer-top">
          <div class="row g-4">
            <div class="col-lg-4">
              <div class="info-item">
                <ul>
                  <li><i class="fa-sharp fa-solid fa-phone"></i></li>
                  <li>
                    <span>Call Us:</span>
                    <h5 class="title">+1-2345-2345-54</h5>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item">
                <ul>
                  <li><i class="fa-sharp fa-solid fa-envelope"></i></li>
                  <li>
                    <span>Email Us:</span>
                    <h5 class="title"><a href="#" class="__cf_email__">{{config('settings.email')}}</a></h5>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item">
                <ul>
                  <li><i class="fa-sharp fa-solid fa-location-dot"></i></li>
                  <li>
                    <span>Hours:</span>
                    <h5 class="title">Daily: 8 AM to 5 PM</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="widgets-section">

          <div class="row g-4">
            <div class="col-lg-4 footer-column">
              <div class="footer-widget links-widget">
                <h4 class="widget-title">Services</h4>
                <div class="widget-content">
                  <ul class="user-links">
                    <li><a href="#0">Digital Marketing</a></li>
                    <li><a href="#0">Innovation Space</a></li>
                    <li><a href="#0">Competitive Analysis</a></li>
                    <li><a href="#0">Market Research</a></li>
                    <li><a href="#0">HR Management</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-4 footer-column">
              <div class="footer-widget links-widget">
                <h4 class="widget-title">Pages</h4>
                <div class="widget-content">
                  <ul class="user-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('services') }}">Our Services</a></li>
                    <li><a href="{{ route('projects') }}">Projects</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-4 footer-column">
              <div class="footer-widget links-widget">
                <h4 class="widget-title">Signup Newsletter</h4>
                <div class="input-feild">
                  <form id="newsletter_form" action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf

                    <input type="email" name="email" placeholder="Enter your email">
                    <span class="error-text email_error"></span>

                    <button class="btn-one-rounded" id="newsletter_button" type="button">Sign up now <i class="fa-regular fa-angle-right"></i></button>

                    <div class="success-message"></div>
                  </form>
                  <!-- <input type="text" placeholder="Email Address">
                  <a href="#0"></a> -->
                </div>
                <ul class="footer-nav">
                  <li><a href="{{config('settings.facebook')}}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                  <li><a href="{{config('settings.instagram')}}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                  <li><a href="{{config('settings.twitter')}}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                  <li><a href="{{config('settings.linkedin')}}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

        </div>

        <div class="footer-bottom">
          <p class="copyright-text">© Copyright 2025. All Right by <a href="https://leafcodes.in">LeafCodes.in</a></p>
        </div>

      </div>
      <div class="col-xl-4 right-column order-1 order-xl-2">
        <div class="inner-column">
          <h3 class="title">{{$widgets['FOOTER_HAVE_PROJECT']['title']}}</h3>
          <a class="circle-btn" href="{{ route('contact') }}">Contact Us <i class="fa-regular fa-arrow-up-right"></i></a>
          <div class="mt-10">
            {!!$widgets['CONTACT_TIMING']['description'] !!}
          </div>
        </div>
        <div class="shape">
          <img src="{{ asset('images/shape/footer-one-shape.png') }}" alt="Image">
        </div>
      </div>
    </div>


  </div>
</footer>
@push('scripts')
<script>
  $(document).ready(function() {

    $('#newsletter_button').on('click', function(e) {
      e.preventDefault();

      let form = $('#newsletter_form');

      // Clear messages
      $('.error-text').text('');
      $('.success-message').text('');

      $.ajax({
        url: form.attr('action'),
        type: "POST",
        data: form.serialize(),

        success: function(response) {
          if (response.status) {
            $('.success-message').text(response.message);
            form.trigger("reset");
          }
        },

        error: function(xhr) {
          let errors = xhr.responseJSON.errors;

          $.each(errors, function(key, value) {
            $('.' + key + '_error').text(value[0]);
          });
        }
      });

    });

  });
</script>
@endpush
<!-- Footer area end here -->