<?php

?>

<?php
$message="";
$valid='true';
include("db_config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email_reg=mysqli_real_escape_string($dbconfig,$_POST['email']);
    $details=mysqli_query($dbconfig,"SELECT fullname,email FROM iimnet_login WHERE email='$email_reg'");
    if (mysqli_num_rows($details)>0) { //if the given email is in database, ie. registered
        $message_success=" Please check your email inbox or spam folder and follow the steps";
        //generating the random key
        $key=md5(time()+123456789% rand(4000, 55000000));
        //insert this temporary key into database
        $sql_insert=mysqli_query($dbconfig,"INSERT INTO iimnet_forgot_password(email,temp_key) VALUES('$email_reg','$key')");
        //sending email about update
        
      require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';



$mail = new PHPMailer;
//$mail->isSMTP();
$mail->Host ='smtp.gmail.com';
$mail->Port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username='info@marketenomicsdigital.com';
$mail->Password='Allthebest@123';

$mail->setFrom('info@marketenomicsdigital.com');
$mail->addAddress( $email_reg);
//$mail->addReplyTo('livclinic2021@gmail.com');


$mail->isHTML(true);
$mail->Subject='Re:Forgot Password';
$mail->Body="Click the link to Reset your password:". "\r\n"."https://iimnet.com/dashboard/forgot_password_reset.php?key=".$key."&email=".$email_reg;

if(!$mail->send()){
    //echo "message could not be sent";
}else{
    //echo "Message has benn sent!";
}
    }
    else{
        $message="Sorry! no account associated with this email";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
       <title>Forgot Password</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
label {
            color: #1b48b2;
        }
        .logo-text {
            font-weight: 700;
    font-size: 25px;
color: #1b48b2;
    margin: 16px 0;
}
/*.logo-text::after {*/
/*    border-bottom: 2px solid #000;*/
/*    content: " ";*/
/*    display: block;*/
/*    width: 36%;*/
/*}*/
.btn-primary {
    font-weight: 700;
    color: #fff;
    border-color: #1b48b2;
    background-color: #1b48b2;
}
.center-block {
    margin: 0 auto;
    display: table;
}
.btn-primary:hover, .btn-primary.focus, .btn-primary:focus, .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover {
    color: #fff;
    background-color: #1b48b2;
    border-color: #1b48b2;
}
.blue-font {
    color: #1b48b2;
}
    </style>

  </head>
  <body>
    <div class="container">
      <div class="row"><br><br><br>
        <div class="col-md-4"></div>
        <div class="col-md-4" style="border-radius:15px;box-shadow: 2.5px 4.33px 15px 0 rgb(0 0 0 / 15%);-webkit-box-shadow: 2.5px 4.33px 15px 0 rgb(0 0 0 / 15%);-moz-box-shadow: 2.5px 4.33px 15px 0 rgba(0, 0, 0, .15);-webkit-appearance: none; width:auto; ">
          <br><br>
          <form role="form" method="POST">
            <div class="form-group">
              <label>Please enter your email to recover your password</label><br><br>
              <input  class="form-control" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" placeholder="Email" >
            </div>
            
            <?php if (isset($error)) {
                      echo"<div class='alert alert-danger' role='alert'>
                      <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                      <span class='sr-only'>Error:</span>".$error."</div>";
                 } ?>
            <?php if ($message<>"") {
                      echo"<div class='alert alert-danger' role='alert'>
                      <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                      <span class='sr-only'>Error:</span>".$message."</div>";
                } ?>
            <?php if (isset($message_success)) {
                      echo"<div class='alert alert-success' role='alert'>
                      <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
                      <span class='sr-only'>Error:</span>".$message_success."</div>";
                  } ?>
              <button type="submit" class="btn btn-primary pull-right" name="submit" style="display: block; width: 100%;">Send Email</button>
              <br><br>
              <center><a href="index.php" class="blue-font">Back to Login</a></center>
              <br>
          </form>
        </div>
        
      </div>
    </div>
  </body>
</html>
