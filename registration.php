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
                <h4 class="title">Register Now</h4>
              </div>
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="candidate-tab" data-bs-toggle="pill" data-bs-target="#candidate" type="button" role="tab" aria-controls="candidate" aria-selected="true"><i class="icofont-businessman"></i> Candidate</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="employer-tab" data-bs-toggle="pill" data-bs-target="#employer" type="button" role="tab" aria-controls="employer" aria-selected="false"><i class="icofont-bag-alt"></i> Employer</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="candidate" role="tabpanel" aria-labelledby="candidate-tab">

                  <?php

                    include_once("backend/database.php");
                    if (isset($_POST["Register"])) {
                      $name = $_POST["Name"];
                      $email = $_POST["Email"];
                      $password = $_POST["Password"];



                      $passwordhash = password_hash($password, PASSWORD_DEFAULT);
                      $errors = array();

                      if (empty($name) or empty($email) or empty($passwordhash)) {
                        array_push($errors, "All fields are required");
                      }
                      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        array_push($errors, "Email is not Valid");
                      }
                      if (strlen($password) < 8) {
                        array_push($errors, "password must be at least 8 characters long");
                      }

                      if (count($errors) > 0) {
                        foreach ($errors as $error) {
                          echo "<div class='alert alert-danger'>$error</div>";
                        }
                      } else {
                        $sql = "INSERT INTO `users`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$password')";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                          echo "OKASSSS";
                        }
                      }
                    }
                  ?>


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
                          <button type="submit" name="Register" class="btn-theme">Register Now</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="employer" role="tabpanel" aria-labelledby="employer-tab">


                <?php 
                  include_once("backend/database.php");

                  if (isset($_POST["employ"])) {
                    $name = $_POST["Name"];
                    $email = $_POST["Email"];
                    $password = $_POST["Password"];

                    $passwordhash = password_hash($password, PASSWORD_DEFAULT);
                    $errors = array();

                    if (empty($name) or empty($email) or empty($passwordhash)) {
                      array_push($errors, "All fields are required");
                    }
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      array_push($errors, "Email is not valid");
                    }
                    if (strlen($password) <8) {
                      array_push($errors, "Password must be al least 8 characters long");
                    }
                    if (count($errors) >0) {
                      foreach ($errors as $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                  }else {
                    $sql = "INSERT INTO `employers`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$password')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                      echo "Sent";
                    }
                  }
                }
                ?>


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