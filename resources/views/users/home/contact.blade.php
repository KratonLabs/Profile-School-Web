  <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
      </div><!-- End Section Title -->

      <!-- Google Maps -->
      <div class="container mb-5" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
              <div class="col-12">
                  <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.7351184861123!2d106.82863421616127!3d-6.175394562215421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e99c9941f7%3A0x54a46e7b3b9fc93b!2sMonas%20(Monumen%20Nasional)!5e0!3m2!1sen!2sid!4v1615790733345!5m2!1sen!2sid"
                      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
              </div>
          </div>
      </div>
      <!-- End Google Maps -->

      <div class="container" data-aos="fade" data-aos-delay="100">
          <div class="row gy-4">

              <!-- Info Items -->
              <div class="col-lg-4">
                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                      <i class="bi bi-geo-alt flex-shrink-0"></i>
                      <div>
                          <h3>Alamat</h3>
                          <p>Kota Tangerang, Banten (kode pos 15118)</p>
                      </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                      <i class="bi bi-telephone flex-shrink-0"></i>
                      <div>
                          <h3>Telepon</h3>
                          <p>+1 5589 55488 55</p>
                      </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                      <i class="bi bi-envelope flex-shrink-0"></i>
                      <div>
                          <h3>Email</h3>
                          <p>azizul@example.com</p>
                      </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                    <div class="social-links d-flex justify-content-center" >
                      <a href=""><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-skype"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
              </div>

              <!-- Contact Form -->
              <div class="col-lg-8">
                  <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                      data-aos-delay="200">
                      <div class="row gy-4">

                          <div class="col-md-6">
                              <input type="text" name="name" class="form-control" placeholder="Your Name"
                                  required="">
                          </div>

                          <div class="col-md-6 ">
                              <input type="email" class="form-control" name="email" placeholder="Your Email"
                                  required="">
                          </div>

                          <div class="col-md-12">
                              <input type="text" class="form-control" name="subject" placeholder="Subject"
                                  required="">
                          </div>

                          <div class="col-md-12">
                              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                          </div>

                          <div class="col-md-12 text-center">
                              <div class="loading">Loading</div>
                              <div class="error-message"></div>
                              <div class="sent-message">Your message has been sent. Thank you!</div>

                              <button type="submit">Send Message</button>
                          </div>

                      </div>
                  </form>
              </div><!-- End Contact Form -->

          </div>
      </div>

  </section>


  {{-- <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Contact Us</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <p>info@example.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section> --}}
