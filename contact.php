<?php 
  include_once("include/navbar.php");
?>
  
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.png">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Contact Us</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Contact</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Contact Area Wrapper ==-->
    <section class="contact-area contact-page-area">
      <div class="container">
        <div class="row contact-page-wrapper">
          <div class="col-lg-12">
            <div class="contact-info-wrap">
              <div class="info-item">
                <div class="icon">
                  <img src="assets/img/icons/c1.png" alt="Image" width="42" height="42">
                </div>
                <div class="info">
                  <h5 class="title">Call Us:</h5>
                  <p>
                    <a href="tel://568975468">(+92) 325 022 5825</a><br>
                    <a href="tel://+88465748937">+92 303 555 8563</a>
                  </p>
                </div>
              </div>
              <div class="info-item">
                <div class="icon">
                  <img src="assets/img/icons/c2.png" alt="Image" width="43" height="73">
                </div>
                <div class="info">
                  <h5 class="title">Email:</h5>
                  <p>
                    <a href="mailto://youremail@gmail.com">mnibras345@gmail.com</a><br>
                    <a href="mailto://demomail@gmail.com">mnibras345@gmail.com</a>
                  </p>
                </div>
              </div>
              <div class="info-item">
                <div class="icon">
                  <img src="assets/img/icons/c3.png" alt="Image" width="36" height="46">
                </div>
                <div class="info">
                  <h5 class="title">Address:</h5>
                  <p>
                    BC Towr near GC Unversity<br>
                    Faisalabad.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <!--== Start Contact Form ==-->
            <div class="contact-form">
              <h4 class="contact-form-title">Get in Touch</h4>
              <form id="contact-form" action="backend/contact.php" method="POST">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" type="text" name="name" placeholder="Name:">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" type="email" name="email" placeholder="Email:">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" type="text" name="subject" placeholder="Subject:">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb--0">
                      <button class="btn-theme d-block w-100" type="submit" name="msg">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!--== End Contact Form ==-->

            <!--== Message Notification ==-->
            <div class="form-message"></div>
          </div>
          <div class="col-lg-6">
            <div class="map-area">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1912972.6636523942!2d144.28416561146162!3d-38.05127959850456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sbd!4v1634028820404!5m2!1sen!2sbd"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Area Wrapper ==-->
  </main>

<?php 
  include_once("include/footer.php");
?>