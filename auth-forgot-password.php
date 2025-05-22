<!DOCTYPE html>
<?php
include 'db.php';

session_start();
if (isset($_SESSION['uname'])) {   //already login
  header('Location:index.php');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$reset_token){
  require('PHPMailer\PHPMailer.php');
  require('PHPMailer\SMTP.php');
  require('PHPMailer\Exception.php');

  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'toshitsharma316@gmail.com';                     //SMTP username
    $mail->Password   = 'dybl dfll rlbv edde';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('toshitsharma316@gmail.com', 'MyThing');
    $mail->addAddress($email);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password Reset Link from MyThing';
    $mail->Body    = "We got a request from you to reset your password! <br>
      Click the link below: <br>
      <a href='http://localhost/miniproject/My/ressetpswd.php?email=$email&resettoken=$reset_token'>
        Reset Password
      </a>";

    $mail->send();
    return true;
  } catch (Exception $e) {
      return false;
    }
}

$msg = "";
$check = "";
if(isset($_POST['submit'])){
  $query ="SELECT * FROM `user_details` WHERE `email`='$_POST[email]'";
  $result = mysqli_query($conn,$query);
  if($result){
    if(mysqli_num_rows($result)==1){
      $reset_token=bin2hex(random_bytes(16));
      date_default_timezone_set('Asia/kolkata');
      $date=date("Y-m-d");
      $query="UPDATE `user_details` SET `resettoken`='$reset_token', `resettokenexpired`='$date' WHERE `email`='$_POST[email]'";
      if(mysqli_query($conn,$query) && sendMail($_POST['email'],$reset_token)){
        $check = "Password reset link sent to mail";
      }else{
        $msg = "Server down! try again later";
      }
    }else{
      $msg = "Email not found";
    }
  }else{
    $msg = "Cannot run query";
  }
}


?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Forgot Password &mdash; MyThing</title>

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
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="assets/img/mt.png" alt="logo" width="60">
            </div>

            <div class="card card-dark">
              <div class="card-header">
                <h4>Forgot Password</h4>
              </div>

              <div class="card-body">
                <p class="text-muted">We will send you a Reset Password Link through Mail.</p>
                <form method="POST">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                  </div>

                  <div class="form-group">
                    <p style="color: red;"><?php echo $msg; ?></p>
                    <p style="color: green;"><?php echo $check; ?></p>
                    <input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" tabindex="4" value="Forgot Password">
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

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>