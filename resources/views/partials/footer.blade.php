<!-- Footer area start here -->
<footer class="main-footer footer-style-one">
  <div class="outer-box">

    <div class="footer-left">
      <div class="logo">
        <a href="index.html"><img src="images/logo-light.png" alt="Logo"></a>
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
                    <h5 class="title"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4f262129200f272a233f612c2022">[email&#160;protected]</a></h5>
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
                    <li><a href="#0">Our Blog</a></li>
                    <li><a href="#0">Success Stories</a></li>
                    <li><a href="#0">Customers Review</a></li>
                    <li><a href="#0">Contact Us</a></li>
                    <li><a href="#0">About Us</a></li>
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
                  <li><a href="#0"><i class="fa-brands fa-facebook-f"></i></a></li>
                  <li><a href="#0"><i class="fa-solid fa-x"></i></a></li>
                  <li><a href="#0"><i class="fa-brands fa-vimeo-v"></i></a></li>
                  <li><a href="#0"><i class="fa-brands fa-pinterest-p"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

        </div>

        <div class="footer-bottom">
          <p class="copyright-text">© Copyright 2025. All Right by <a href="#0">Kodesolution</a></p>
        </div>

      </div>
      <div class="col-xl-4 right-column order-1 order-xl-2">
        <div class="inner-column">
          <h3 class="title">Have a Project in
            your Mind?</h3>
          <a class="circle-btn" href="{{ route('contact') }}">Contact Us <i class="fa-regular fa-arrow-up-right"></i></a>
          <div class="mt-10">
            <h5 class="time">09 : 00 AM - 10 : 30 PM</h5>
            <h5 class="date">Saturday - Thursday</h5>
          </div>
        </div>
        <div class="shape">
          <img src="images/shape/footer-one-shape.png" alt="Image">
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