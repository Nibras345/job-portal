<?php 
    include_once("include/navbar.php");
?>
  
  <main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="home-slider-container default-slider-container">
        <div class="home-slider-wrapper slider-default">
          <div class="slider-content-area" data-bg-img="assets/img/slider/slider-bg.png">
            <div class="container pt--0 pb--0">
              <div class="slider-container">
                <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-lg-8">
                    <div class="slider-content">
                      <h2 class="title"><span class="counter" data-counterup-delay="80">2,568</span> job available <br>You can choose your dream job</h2>
                      <p class="desc">Find great job for build your bright career. Have many job in this plactform.</p>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="job-search-wrap">
                      <div class="job-search-form">
                        <form action="backend/search-job.php" method="POST">
                          <div class="row row-gutter-10">
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <input type="text" class="form-control" name="job_keywords" placeholder="Job title or keywords">
                              </div>
                            </div>
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <select class="form-control" name="selected_city">
                                  <option value="1" selected><b>Choose City</b></option>
                                  <option value="2">Islamabad</option>
                                  <option value="3">Faisalabad</option>
                                  <option value="4">Lahore</option>
                                  <option value="5">Karachi</option>
                                  <option value="6">Rawalpindi</option>
                                  <option value="6">Multan</option>
                                  <option value="6">Peshawar</option>
                                  <option value="6">Quetta</option>
                                  <option value="6">Kashmir</option>
                                  <option value="6">Hyderabad</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <select class="form-control" name="selected_category">
                                  <option value="1" selected>Category</option>
                                  <option value="2">Web Designer</option>
                                  <option value="3">Web Developer</option>
                                  <option value="4">Graphic Designer</option>
                                  <option value="5">App Developer</option>
                                  <option value="6">UI &amp; UX Expert</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <button value="search" type="submit" name="ssbb" class="btn-form-search"><i class="icofont-search-1"></i></button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="play-video-btn">
              <a href="https://www.youtube.com/mcvqOUtcAJg" class="video-popup">
                <img src="assets/img/icons/play.png" alt="Image-HasTech">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="home-slider-shape">
        <img class="shape1" data-aos="fade-down" data-aos-duration="1500" src="assets/img/slider/vector1.png" width="270" height="234" alt="Image-HasTech">
        <img class="shape2" data-aos="fade-left" data-aos-duration="2000" src="assets/img/slider/vector2.png" width="201" height="346" alt="Image-HasTech">
        <img class="shape3" data-aos="fade-right" data-aos-duration="2000" src="assets/img/slider/vector3.png" width="276" height="432" alt="Image-HasTech">
        <img class="shape4" data-aos="flip-left" data-aos-duration="1500" src="assets/img/slider/vector4.png" width="127" height="121" alt="Image-HasTech">
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Job Category Area Wrapper ==-->
    <section class="job-category-area">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Popular Category</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-gutter-20" >
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.php">Accounting/Finance <span>(305)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.php"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.php">Production/Operation <span>(95)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.php"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.php">Education/Training <span>(212)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.php"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.php">Design/Creative <span>(93)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.php"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.php">Health & Fitness <span>(4)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.php"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.php">Research/Consultancy <span>(34)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.php"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.php">Engineer/Architects <span>(376)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.php"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.php">Telecommunication <span>(450)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.php"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.php">Data Entry/Operator <span>(25)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.php"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.php">Production/Operation <span>(95)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.php"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.php">Marketing/Sales <span>(666)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.php"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.php">Security/Support Service <span>(62)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.php"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Job Category Area Wrapper ==-->

    <!--== Start Recent Job Area Wrapper ==-->
    <section class="recent-job-area recent-job-inner-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.php"><img src="assets/img/companies/w1.png" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.php">Darkento Ltd.</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.php">Front-end Developer</a></h3>
                <h5 class="work-type">Full-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.php"><img src="assets/img/companies/w2.png" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.php">Inspire Fitness Co.</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.php">Senior UI Designer</a></h3>
                <h5 class="work-type" data-text-color="#ff7e00">Part-time</h5>
                <p class="desc">CSS, HTML, Javascript, Python ,PyQt</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.php"><img src="assets/img/companies/w3.png" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.php">Cogent Data</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.php">Graphic Designer</a></h3>
                <h5 class="work-type" data-text-color="#0054ff">Remote</h5>
                <p class="desc">CSS3, HTML5, Bootstrap, C++, Java</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.php"><img src="assets/img/companies/w4.png" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.php">Obelus Concepts</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.php">UX Researcher</a></h3>
                <h5 class="work-type">Full-time</h5>
                <p class="desc">Java, PHP, Objective-C and Swift</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.php"><img src="assets/img/companies/w5.png" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.php">Sanguine Skincare</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.php">Android App Developer</a></h3>
                <h5 class="work-type" data-text-color="#0054ff">Remote</h5>
                <p class="desc">Kotlin, Java, C++</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.php"><img src="assets/img/companies/w6.png" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.php">Flux Water Gear</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.php">Product Designer</a></h3>
                <h5 class="work-type">Full-time</h5>
                <p class="desc">CSS3, HTML5, Bootstrap, C++, UX</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.php"><img src="assets/img/companies/w7.png" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.php">Darkento Ltd.</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.php">Front-end Developer</a></h3>
                <h5 class="work-type">Full-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.php"><img src="assets/img/companies/w8.png" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.php">Inspire Fitness Co.</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.php">Senior UI Designer</a></h3>
                <h5 class="work-type" data-text-color="#ff7e00">Part-time</h5>
                <p class="desc">CSS, HTML, Javascript, Python ,PyQt</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.php"><img src="assets/img/companies/w9.png" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.php">Cogent Data</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.php">Graphic Designer</a></h3>
                <h5 class="work-type" data-text-color="#0054ff">Part-time</h5>
                <p class="desc">CCSS3, HTML5, Bootstrap, C++, Java</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="pagination-area">
              <nav>
                <ul class="page-numbers d-inline-flex">
                  <li>
                    <a class="page-number active" href="job.php">1</a>
                  </li>
                  <li>
                    <a class="page-number" href="job.php">2</a>
                  </li>
                  <li>
                    <a class="page-number" href="job.php">3</a>
                  </li>
                  <li>
                    <a class="page-number next" href="job.php">
                      <i class="icofont-long-arrow-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Recent Job Area Wrapper ==-->

    <!--== Start Work Process Area Wrapper ==-->
    <section class="work-process-area">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center" >
              <h3 class="title">How It Work?</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="working-process-content-wrap">
              <div class="working-col">
                <!--== Start Work Process ==-->
                <div class="working-process-item">
                  <div class="icon-box">
                    <div class="inner">
                      <img class="icon-img" src="assets/img/icons/w1.png" alt="Image-HasTech">
                      <img class="icon-hover" src="assets/img/icons/w1-hover.png" alt="Image-HasTech">
                    </div>
                  </div>
                  <div class="content">
                    <h4 class="title">Create an Account</h4>
                    <p class="desc">It is long established fact reader distracted readable content</p>
                  </div>
                  <div class="shape-arrow-icon">
                    <img class="shape-icon" src="assets/img/icons/right-arrow.png" alt="Image-HasTech">
                    <img class="shape-icon-hover" src="assets/img/icons/right-arrow2.png" alt="Image-HasTech">
                  </div>
                </div>
                <!--== End Work Process ==-->
              </div>
              <div class="working-col">
                <!--== Start Work Process ==-->
                <div class="working-process-item">
                  <div class="icon-box">
                    <div class="inner">
                      <img class="icon-img" src="assets/img/icons/w2.png" alt="Image-HasTech">
                      <img class="icon-hover" src="assets/img/icons/w2-hover.png" alt="Image-HasTech">
                    </div>
                  </div>
                  <div class="content">
                    <h4 class="title">CV/Resume</h4>
                    <p class="desc">It is long established fact reader distracted readable content</p>
                  </div>
                  <div class="shape-arrow-icon">
                    <img class="shape-icon" src="assets/img/icons/right-arrow.png" alt="Image-HasTech">
                    <img class="shape-icon-hover" src="assets/img/icons/right-arrow2.png" alt="Image-HasTech">
                  </div>
                </div>
                <!--== End Work Process ==-->
              </div>
              <div class="working-col">
                <!--== Start Work Process ==-->
                <div class="working-process-item">
                  <div class="icon-box">
                    <div class="inner">
                      <img class="icon-img" src="assets/img/icons/w3.png" alt="Image-HasTech">
                      <img class="icon-hover" src="assets/img/icons/w3-hover.png" alt="Image-HasTech">
                    </div>
                  </div>
                  <div class="content">
                    <h4 class="title">Find Your Job</h4>
                    <p class="desc">It is long established fact reader distracted readable content</p>
                  </div>
                  <div class="shape-arrow-icon">
                    <img class="shape-icon" src="assets/img/icons/right-arrow.png" alt="Image-HasTech">
                    <img class="shape-icon-hover" src="assets/img/icons/right-arrow2.png" alt="Image-HasTech">
                  </div>
                </div>
                <!--== End Work Process ==-->
              </div>
              <div class="working-col">
                <!--== Start Work Process ==-->
                <div class="working-process-item">
                  <div class="icon-box">
                    <div class="inner">
                      <img class="icon-img" src="assets/img/icons/w4.png" alt="Image-HasTech">
                      <img class="icon-hover" src="assets/img/icons/w4-hover.png" alt="Image-HasTech">
                    </div>
                  </div>
                  <div class="content">
                    <h4 class="title">Save & Apply</h4>
                    <p class="desc">It is long established fact reader distracted readable content</p>
                  </div>
                  <div class="shape-arrow-icon d-none">
                    <img class="shape-icon" src="assets/img/icons/right-arrow.png" alt="Image-HasTech">
                    <img class="shape-icon-hover" src="assets/img/icons/right-arrow2.png" alt="Image-HasTech">
                  </div>
                </div>
                <!--== End Work Process ==-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Work Process Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <section class="sec-overlay sec-overlay-theme bg-img" data-bg-img="assets/img/photos/bg1.png">
      <div class="container pt--0 pb--0">
        <div class="row justify-content-center divider-style1">
          <div class="col-lg-10 col-xl-7">
            <div class="divider-content text-center">
              <h4 class="sub-title" data-aos="fade-down">Trial Version Available</h4>
              <h2 class="title" data-aos="fade-down">Download Our Mobile App. <br>You Can Ready Resume & Apply Job.</h2>
              <div class="divider-btn-group">
                <a class="btn-divider" data-aos="fade-down" href="page-not-found.html">
                  <img src="assets/img/photos/google-play.png" width="201" height="63" class="icon" alt="Image-HasTech">
                </a>
                <a class="btn-divider btn-divider-app-store" data-aos="fade-down" href="page-not-found.php">
                  <img src="assets/img/photos/mac-os.png" width="201" height="63" class="icon" alt="Image-HasTech">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-layer-style1"></div>
      <div class="bg-layer-style2"></div>
    </section>
    <!--== End Divider Area Wrapper ==-->

    <!--== Start Team Area Wrapper ==-->
    <section class="team-area">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center" >
              <h3 class="title">Best Candidate</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="thumb">
                <a href="candidate-details.php">
                  <img src="assets/img/team/1.png" width="160" height="160" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h4 class="title"><a href="candidate-details.php">Lauran Benitez</a></h4>
                <h5 class="sub-title">Web Designer</h5>
                <div class="rating-box">
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                <a class="btn-theme btn-white btn-sm" href="candidate-details.php">View Profile</a>
              </div>
              <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
              <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech"></div>
            </div>
            <!--== End Team Item ==-->
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="thumb">
                <a href="candidate-details.php">
                  <img src="assets/img/team/2.png" width="160" height="160" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h4 class="title"><a href="candidate-details.php">Valentine Anders</a></h4>
                <h5 class="sub-title">UI/UX Designer</h5>
                <div class="rating-box">
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                <a class="btn-theme btn-white btn-sm" href="candidate-details.php">View Profile</a>
              </div>
              <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
              <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech"></div>
            </div>
            <!--== End Team Item ==-->
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="thumb">
                <a href="candidate-details.php">
                  <img src="assets/img/team/3.png" width="160" height="160" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h4 class="title"><a href="candidate-details.php">Shakia Aguilera</a></h4>
                <h5 class="sub-title">Web Designer</h5>
                <div class="rating-box">
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                <a class="btn-theme btn-white btn-sm" href="candidate-details.php">View Profile</a>
              </div>
              <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
              <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech"></div>
            </div>
            <!--== End Team Item ==-->
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="thumb">
                <a href="candidate-details.php">
                  <img src="assets/img/team/4.png" width="160" height="160" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h4 class="title"><a href="candidate-details.php">Assunta Manson</a></h4>
                <h5 class="sub-title">App. Developer</h5>
                <div class="rating-box">
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                <a class="btn-theme btn-white btn-sm" href="candidate-details.php">View Profile</a>
              </div>
              <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
              <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech"></div>
            </div>
            <!--== End Team Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Team Area Wrapper ==-->

    <!--== Start Brand Logo Area Wrapper ==-->
    <div class="brand-logo-area">
      <div class="container pt--0 pb--0" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="brand-logo-content" >
              <div class="swiper brand-logo-slider-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="assets/img/brand-logo/1.png" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="assets/img/brand-logo/2.png" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="assets/img/brand-logo/3.png" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="assets/img/brand-logo/4.png" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="assets/img/brand-logo/5.png" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="assets/img/brand-logo/6.png" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="assets/img/brand-logo/1.png" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                </div>
              </div>
              <!--== Add Swiper Arrows ==-->
              <div class="swiper-btn-wrap">
                <div class="brand-swiper-btn-prev">
                  <i class="icofont-long-arrow-left"></i>
                </div>
                <div class="brand-swiper-btn-next">
                  <i class="icofont-long-arrow-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Brand Logo Area Wrapper ==-->

    <!--== Start Testimonial Area Wrapper ==-->
    <section class="testimonial-area bg-color-gray">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center" >
              <h3 class="title">Our Happy Clients</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="swiper testi-slider-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                        <div class="testi-thumb">
                          <img src="assets/img/testimonial/1.png" width="75" height="75" alt="Image-HasTech">
                        </div>
                        <div class="testi-info">
                          <h4 class="name">Roselia Hamets</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                        <div class="rating-box">
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                        </div>
                        <div class="testi-quote"><img src="assets/img/icons/quote1.png" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                        <div class="testi-thumb">
                          <img src="assets/img/testimonial/2.png" width="75" height="75" alt="Image-HasTech">
                        </div>
                        <div class="testi-info">
                          <h4 class="name">Assunta Manson</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                        <div class="rating-box">
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                        </div>
                        <div class="testi-quote"><img src="assets/img/icons/quote1.png" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                        <div class="testi-thumb">
                          <img src="assets/img/testimonial/3.png" width="75" height="75" alt="Image-HasTech">
                        </div>
                        <div class="testi-info">
                          <h4 class="name">Amira Shepard</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                        <div class="rating-box">
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                        </div>
                        <div class="testi-quote"><img src="assets/img/icons/quote1.png" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                        <div class="testi-thumb">
                          <img src="assets/img/testimonial/4.png" width="75" height="75" alt="Image-HasTech">
                        </div>
                        <div class="testi-info">
                          <h4 class="name">Joshua George</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                        <div class="rating-box">
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                        </div>
                        <div class="testi-quote"><img src="assets/img/icons/quote1.png" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                        <div class="testi-thumb">
                          <img src="assets/img/testimonial/5.png" width="75" height="75" alt="Image-HasTech">
                        </div>
                        <div class="testi-info">
                          <h4 class="name">Rosie Patton</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                        <div class="rating-box">
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                        </div>
                        <div class="testi-quote"><img src="assets/img/icons/quote1.png" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
              </div>

              <!--== Add Swiper Pagination ==-->
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Testimonial Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area blog-home-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Recent News Articles</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row align-items-center post-home-style row-gutter-40">
          <div class="col-md-6 col-lg-4" data-aos="fade-right">
            <!--== Start Blog Post Item ==-->
            <div class="post-item">
              <div class="thumb">
                <a href="blog-details.php"><img src="assets/img/blog/1.png" alt="Image" width="370" height="270"></a>
              </div>
              <div class="content">
                <div class="author">By <a href="blog.php">Walter Houston</a></div>
                <h4 class="title"><a href="blog-details.php">It long established fact that reader will distracted the readable.</a></h4>
                <div class="meta">
                  <span class="post-date">03 April, 2022</span>
                  <span class="dots"></span>
                  <span class="post-time">10 min read</span>
                </div>
              </div>
            </div>
            <!--== End Blog Post Item ==-->
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-left">
            <!--== Start Blog Post Item ==-->
            <div class="post-item">
              <div class="thumb mb--0">
                <a href="blog-details.php"><img src="assets/img/blog/h1.png" alt="Image" width="370" height="440"></a>
              </div>
            </div>
            <!--== End Blog Post Item ==-->
          </div>
          <div class="col-lg-4" data-aos="fade-left">
            <div class="post-home-list-style">
              <!--== Start Blog Post Item ==-->
              <div class="post-item">
                <div class="content">
                  <div class="author">By <a href="blog.php">Walter Houston</a></div>
                  <h4 class="title"><a href="blog-details.php">Established fact and readeren will distracted the readable content.</a></h4>
                  <div class="meta">
                    <span class="post-date">03 April, 2022</span>
                    <span class="dots"></span>
                    <span class="post-time">10 min read</span>
                  </div>
                </div>
              </div>
              <!--== End Blog Post Item ==-->

              <!--== Start Blog Post Item ==-->
              <div class="post-item">
                <div class="content">
                  <div class="author">By <a href="blog.php">Walter Houston</a></div>
                  <h4 class="title"><a href="blog-details.php">With WooLentor's drag-and drop interface for creating...</a></h4>
                  <div class="meta">
                    <span class="post-date">03 April, 2022</span>
                    <span class="dots"></span>
                    <span class="post-time">10 min read</span>
                  </div>
                </div>
              </div>
              <!--== End Blog Post Item ==-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>

  <?php 
    include_once("include/footer.php");
  ?>