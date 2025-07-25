<!DOCTYPE html>

<?php

include 'db.php';

session_start();
if(isset($_SESSION['uname'])){   //already login
  header('Location:index.php');
}

$msg="";
if(isset($_POST['submit'])){
  $username = trim($_POST['uname']);
  $password = trim($_POST['pswd']);

  $sql = "SELECT * FROM user_details WHERE uname='$username';";
  $query = mysqli_query($conn,$sql);
  if(mysqli_num_rows($query)>0){
    while($r=mysqli_fetch_assoc($query)){
      if($r['uname']===$username){
        if($r['pswd']===$password){
          $_SESSION['uname']=$r['uname'];
          header('Location:index.php');
        } else{
          $msg = "Password Incorrect.";
        }
        
      } else{
        $msg = "Username Incorrect.";
      }
    }
  } else{
    $msg = "No user found.";
  }
}

?>



<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; MyThing</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css">

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
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="assets/img/mt.png" alt="logo" width="60">
            </div>

            <div class="card card-dark">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="uname">Username</label>
                    <input id="email" type="text" class="form-control" name="uname" tabindex="1" required autofocus>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.php" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="pswd" tabindex="2" required>
                  </div>

                  <p style="color: red;"><?php echo $msg; ?></p>
                  


                  <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" tabindex="4" value="Login">
                  </div>
                </form>

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="auth-signup.php">Create One</a>
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

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>