<?php include 'includes/header.php'; ?>

<div class="continess">
  <section class="contactpic">
    <span class="text1">Contact Us</span>
    <div class="breadcrumb">
      <p><a href="index.php">Home </a> <span>→</span> Contact Us</p>
    </div>
  </section>

  <div class="container py-5">
    <div class="row">
      <!-- Left: Form -->
      <div class="col-md-8" data-aos="fade-right">
        <div class="contform-section">
          <h2 class="mb-4">Get In Touch</h2>

          <form action="thanks.php" name="form6" id="form6" method="post">
							<div class="form-row row">
								<div class="form-group col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<input type="text" name="Name" id="ctxtName" class="form-control"
										placeholder="Full Name*" required>
								</div>
								<div class="form-group col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<input type="email" name="Email" id="ctxtEmail" class="form-control"
										placeholder="Email Address*" required>
								</div>
							</div>
							<div class="form-row row">
								<div class="form-group col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<input type="text" name="Mobile" id="ctxtMobile" class="form-control"
										placeholder="Phone*" required>
								</div>
								<div class="form-group col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<input type="text" name="Subject" id="txtsubject" class="form-control"
										placeholder="Subject*" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12">
									<textarea class="form-control" name="Message" rows="4" id="ctxtMsg"
										placeholder="Message*" required></textarea>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12">
								 <button type="submit" class="btn btn btn-slide-fill">Submit Message</button>
								</div>
							</div>
						</form>

          </div>
        </div>
   

      <!-- Right: Image Section -->
      <div class="col-md-4" data-aos="fade-left">
        <div class="image-section">
          <!-- You can place an image here if needed -->
        </div>
      </div>
    </div>
     

    <div class="row contact-container">
      <!-- Left: Google Map -->
      <div class="col-md-8">
        <div class="map-section">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.0938258364513!2d-84.39968102460304!3d33.758241233197865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f504818f955259%3A0xd22b449e2718746b!2sGeorgia%20World%20Congress%20Center!5e0!3m2!1sen!2sgr!4v1749498922330!5m2!1sen!2sgr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	     </div>
      </div>

      <!-- Right: Contact Info -->
      <div class="col-md-4">
        <div class="info-section">
          <h2>Conference Location</h2>
          <hr />
          <div class="info-item">
            <div class="icon-circle">    <i class="fas fa-map-marker-alt"></i></div>
            <div class="info-text">
              <strong>Conference Location</strong>
              Georgia World Congress Center
              285 Andrew Young International Blvd NW
              Atlanta, GA 30313
              United States
            </div>
          </div>
          <div class="info-item">
            <div class="icon-circle">  <i class="fas fa-calendar-alt"></i></div>
            <div class="info-text">
              <strong>Conference Dates</strong>
              October 19th - 22nd, 2025
            </div>
          </div>
          <div class="info-item">
            <div class="icon-circle">  <i class="fas fa-users"></i></div>
            <div class="info-text">
              <strong>Attendees</strong>
              20,000+
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
<?php include 'includes/footer.php'; ?>

<script>

  // IP fetch
  fetch("https://api.ipify.org?format=json")
    .then(res => res.json())
    .then(data => {
      document.getElementById("ip_address").value = data.ip;
    });

      </script>



