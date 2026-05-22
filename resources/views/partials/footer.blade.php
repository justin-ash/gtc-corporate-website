<!-- Footer area start here -->
<footer class="main-footer footer-style-one">
  <div class="outer-box">
    <div class="row g-0 w-100">
      <div class="widgets-section">

        <div class="row">
          <div class="col-md-3 footer-column">
            <div class="footer-widget links-widget">
              <a href="{{ route('home') }}"><img src="{{ asset(config('settings.logo')) }}" alt="Logo"></a>

              <div class="widget-content">
                <p class="footer-text">Delivering innovative and sustainable solutions since 1977</p>
                <ul class="footer-nav">
                  <li><a href="{{config('settings.facebook')}}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                  <li><a href="{{config('settings.instagram')}}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                  <li><a href="{{config('settings.twitter')}}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                  <li><a href="{{config('settings.linkedin')}}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-2 footer-column">
            <div class="footer-widget links-widget">
              <h4 class="widget-title">Quick links</h4>
              <div class="widget-content">
                <ul class="user-links">
                  <li><a href="{{ route('home') }}">Home</a></li>
                  <li><a href="{{ route('about') }}">About GTC</a></li>
                  <li><a href="{{ route('services') }}">Services</a></li>
                  <li><a href="{{ route('contact') }}">Contact</a></li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-2 footer-column">
            <div class="footer-widget links-widget">
              <h4 class="widget-title">Certifications</h4>
              <div class="widget-content">
                <ul class="user-links">
                  <li><a href="#0">ISO 9001:2015</a></li>
                  <li><a href="#0">ISO 14001:2015</a></li>
                  <li><a href="#0">ISO 45001:2018</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-2 footer-column">
            <div class="footer-widget links-widget">
              <h4 class="widget-title">Contact Info</h4>
              <div class="widget-content">
                <div class="info-item">
                  <ul>
                    <li><i class="fa-sharp fa-solid fa-phone"></i><span> {{config('settings.phone')}}</span></li>
                    <li><i class="fa-sharp fa-solid fa-envelope"></i><span> {{config('settings.email')}}</span></li>
                    <li><i class="fa-sharp fa-solid fa-location-dot"></i><span> {{config('settings.address')}}</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 footer-column">
            <div class="footer-widget links-widget">
              <h4 class="widget-title">Signup Newsletter</h4>
              <p class="text">Stay updated with our latest news and insights.</p>
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

            </div>
          </div>
        </div>

      </div>

      <div class="footer-bottom">
        <p class="copyright-text">© 2026 Green Top Contracting Co. Ltd. All Rights Reserved</p>
        <p class="copyright-text"><a href="">Privacy Policy</a> | <a href="">Terms & Conditions</a></p>
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