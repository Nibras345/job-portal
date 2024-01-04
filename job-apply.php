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
                        <h2 class="title">Register Page</h2>
                        <nav class="breadcrumb-area">
                            <ul class="breadcrumb justify-content-center">
                                <li><a href="index.php">Home</a></li>
                                <li class="breadcrumb-sep">//</li>
                                <li>Pages</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Login Area Wrapper ==-->
    <section class="account-login-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-7 col-xl-6">
                    <div class="login-register-form-wrap register-form-wrap">
                        <div class="login-register-form">
                            <div class="form-title">
                                <h4 class="title">Apply Now</h4>
                            </div>
                            <!-- <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="candidate-tab" data-bs-toggle="pill" data-bs-target="#candidate" type="button" role="tab" aria-controls="candidate" aria-selected="true"><i class="icofont-businessman"></i> Candidate</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="employer-tab" data-bs-toggle="pill" data-bs-target="#employer" type="button" role="tab" aria-controls="employer" aria-selected="false"><i class="icofont-bag-alt"></i> Employer</button>
                                </li>
                            </ul> -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="candidate" role="tabpanel" aria-labelledby="candidate-tab">
                                    <form action="backend/appliers.php" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="Name" type="Name" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="Lname" type="Name" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="email" type="Email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="phone" type="number" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="position" type="text" placeholder="Applied Position">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <i class="fa fa-upload"></i>Upload Resume
                                                    <input type="file" name="resume_file" class="file-input">
                                                </div>
                                            </div>
                                            <!-- <div class="col-12">
                                                <div class="form-group">
                                                    <i class="fa fa-upload"></i>Certificate, Domical etc.
                                                    <input type="file"  class="file-input">
                                                </div>
                                            </div> -->
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="remember-forgot-info">
                                                        <div class="remember">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">Aaccept our terms and conditions and privacy policy.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <button type="submit" name="apply" class="btn-theme">Apply Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="employer" role="tabpanel" aria-labelledby="employer-tab">
                                    <form action="registration.php" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="Name" type="Name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="Email" type="Email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="Password" type="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="remember-forgot-info">
                                                        <div class="remember">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">Aaccept our terms and conditions and privacy policy.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <button type="submit" name="employ" class="btn-theme">Register Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="login-register-form-info">
                                <p>Already have an account? <a href="login.php">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Login Area Wrapper ==-->
</main>

<?php
include_once("include/footer.php");
?>