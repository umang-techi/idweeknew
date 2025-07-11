<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5">
        <h2 class="mb-3 element element2" data-aos="fade-right">IdWeek 2025</h2>
        <div class="stat-number2"><i class="fas fa-map-marker-alt"></i> Location</div>
        <div class="stat-label2">Georgia World Congress Center, <br>Atlanta, Georgia, USA</div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-3 col-md-6">
        <h5>Support</h5>
        <ul class="list-unstyled mt-2" data-aos="fade-left">
          <li><a href="index.php"><i class="fa-solid fa-house me-2"></i>Home</a></li>
          <li><a href="registration.php"><i class="fa-regular fa-registered me-2"></i>Register</a></li>
          <li><a href="housing.php"><i class="fa-solid fa-hotel me-2"></i>Housing</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5>Contact</h5>
        <ul class="list-unstyled mt-2" data-aos="fade-right">
          <li><a href="contact-us.php"><i class="fa-solid fa-address-book me-2"></i>Contact</a></li>
          <li><a href="about-us.php"><i class="fa-solid fa-eject me-2"></i>About</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom mt-4 text-center">
      <p class="mb-1">Copyright © 2025 IDWeek, All Rights Reserved</p>
    </div>
    <div id="preloader">
        <div class="loader">
            <div class="loader__ring"></div>
            <div class="loader__ring"></div>
            <div class="loader__ring"></div>
        </div>
    </div>

    <!-- Go to Top Button -->
    <button id="myBtn" class="tts_top_scroll" title="Go to top">
        <i class="fa fa-angle-up"></i>
    </button>
  </div>
</footer>

<!-- JS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript" src="assetsjs/jquery.maskedinput.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smart-form.js"></script>
<script src="assets/js/main.js"></script>

<script>
  // Preloader
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            const body = document.body;
            preloader.style.opacity = '0';
            preloader.style.visibility = 'hidden';
            body.classList.remove('preloader-active');
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 600);
        });

        // Go to Top Button
        const myButton = document.getElementById('myBtn');
        const preloader = document.getElementById('preloader');
        const body = document.body;

        // Show/hide button and preloader based on scroll position
        let isScrolling;
        window.addEventListener('scroll', function() {
            // Show Go to Top button
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                myButton.style.display = 'block';
            } else {
                myButton.style.display = 'none';
            }

            // Show preloader briefly during scroll
            preloader.style.display = 'flex';
            preloader.classList.add('active');
            body.classList.add('preloader-active');

            // Clear any existing timeout
            clearTimeout(isScrolling);

            // Hide preloader after scrolling stops
            isScrolling = setTimeout(function() {
                preloader.classList.remove('active');
                preloader.style.opacity = '0';
                preloader.style.visibility = 'hidden';
                body.classList.remove('preloader-active');
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 600);
            }, 200); // Reduced for snappier response
        });

        // Smooth scroll to top when button is clicked
        myButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        </script>

</body>
</html>
