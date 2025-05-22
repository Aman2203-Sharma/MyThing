<!DOCTYPE html>
<?php

?>
<?php
include 'db.php';

session_start();
if (isset($_SESSION['uname'])) {   //already login
  header('Location:index.php');
}



$npswd = "";
$cpswd = "";
$msg="";
$check = "";
if (isset($_POST['update'])) {
  $npswd = trim($_POST['npswd']);

  $sql = "SELECT * FROM user_details WHERE `email`='$_POST[email]'";
  $query = mysqli_query($conn, $sql);
  if (mysqli_num_rows($query) > 0) {
    while ($r = mysqli_fetch_assoc($query)) {
      if ($r['pswd'] === $npswd) {
        echo "New password shouldn't be same as the old one.";
      } else {
        $cpswd = trim($_POST['cpswd']);
        if ($npswd === $cpswd) {
          $update_query = "UPDATE user_details SET pswd='$npswd',`resettoken`=NULL,`resettokenexpired`=NULL WHERE `email`='$_POST[email]'";
          $update = mysqli_query($conn, $update_query);
          if ($update) {
            header('Location:auth-login.php');
          } else {
            echo "
            <script>
                alert('Failed to Change Password.');
            </script>
            ";
          }
        } else {
            echo "
            <script>
                alert('New password & Confirm password should be identical.');
            </script>
            ";
        }
      }
    }
  } else {
    echo "
    <script>
        alert('No user found.');
    </script>
    ";
  }
}






if(isset($_GET['email']) && isset($_GET['resettoken'])){
    date_default_timezone_set('Asia/kolkata');
    $date=date("Y-m-d");
    $query="SELECT * FROM `user_details` WHERE `email`='$_GET[email]' AND `resettoken`='$_GET[resettoken]' AND `resettokenexpired`='$date'";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result)==1){
            echo "
            <div id='app'>
    <section class='section'>
      <div class='container mt-5'>
        <div class='row'>
          <div class='col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4'>
            <div class='login-brand'>
              <img src='assets/img/mt.png' alt='logo' width='60'>
            </div>
            <div class='card card-dark'>
              <div class='card-header'>
                <h4>Reset Password</h4>
              </div>

              <div class='card-body'>
                <p class='text-muted'>Now you can change your password here.</p>
                <form method='POST'>
                  <div class='form-group'>
                    <label>Enter New Password</label>
                    <input type='password' class='form-control' name='npswd' tabindex='1' required autofocus>
                  </div>
                  <div class='form-group'>
                    <label>Confirm Password</label>
                    <input type='password' class='form-control' name='cpswd' tabindex='1' required autofocus>
                  </div>

                  <div class='form-group'>
                    <p style='color: red;'><?php echo $msg; ?></p>
                    <input type='submit' name='update' class='btn btn-dark btn-lg btn-block' tabindex='4' value='Reset Password'>
                    <input type='hidden' name='email' value='$_GET[email]'>
                  </div>
                </form>
              </div>
            </div>
               
          </div>
        </div>
      </div>
    </section>
  </div>
            ";
        }else{
            echo "
            <script>
                alert('Invalid or Expired Link');
                window.location.href='auth-forgot-password.php';
            </script>
            ";
        }
    }else{
        $msg="Server down! try again later";
    }
}

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Reset Password &mdash; MyThing</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Fevicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="mt.png">
    <link rel="icon" type="image/png" sizes="32x32" href="mt.png">
    <link rel="icon" type="image/png" sizes="16x16" href="mt.png">
    <link rel="manifest" href="site.webmanifest">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css?v=2.0">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  

</body>

</html>