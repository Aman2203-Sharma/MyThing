<!DOCTYPE html>
<?php

include 'db.php';

session_start();
if(isset($_SESSION['uname'])){   //already login
  header('Location:index.php');
}

$msg="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['submit'])){
        //store & validate
        $fname = trim(stripslashes(htmlspecialchars($_POST['firstname'])));
        $lname = trim(stripslashes(htmlspecialchars($_POST['lastname'])));
        $email = trim($_POST['email']);
        $mobile = trim($_POST['phone']);
        $uname = trim($_POST['username']);
        $pswd = trim($_POST['password']);
        $des = "";
        $profile = trim($_POST['profile']);


        if (empty($fname) && empty($email) && empty($mobile)) {
          echo "All values are required";      
        } else if(!preg_match("/^[a-zA-Z ]*$/",$fname) && !preg_match("/^[a-zA-Z ]*$/",$lname) && !filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[+]?[1-9][0-9]{9,14}$/",$mobile)) {
          echo "Provide valid values";
        } else {
          // Submit Code

          $sql = "INSERT INTO `user_details` (`firstname`, `lastname`, `designation`, `email`, `phone`, `profile`, `uname`, `pswd`)
          VALUES('$fname','$lname','','$email','$mobile','$profile','$uname','$pswd')";

          $query = mysqli_query($conn,$sql);

          if($query){
            // $msg = "Login successful";
            header('Location:auth-login.php');
          }else{
            $msg = "Password Incorrect.";
          }

      }
  }

}


?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Sign Up &mdash; MyThing</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">
  <!-- Fevicon -->
  <link rel="icon" href="mt.png">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css?v=2.0">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
            <img src="assets/img/mt.png" alt="logo" width="60">
            </div>

            <div class="card card-dark">
              <div class="card-header"><h4>Sign Up</h4></div>

              <div class="card-body">
                <form method="post">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input id="frist_name" type="text" class="form-control" name="firstname" autofocus required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="lastname">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input id="phone" type="text" class="form-control" name="phone" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <input type="hidden" name="profile" value="assets/img/avatar/avatar-1.png">
                  </div>

                  <div class="form-group">
                    <label for="username">Create Username</label>
                    <input id="username" type="text" class="form-control" name="username" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-12">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>

                  <?php
                  echo $msg;
                  ?>

                  <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" value="Sign Up">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>