<?php
if( $_POST){

$servername = "localhost";
$username = "marketf7_lokesh";
$password = "#Xka1ZJ$&QC[";
$dbname = "marketf7_mailspot";

// Create connection
 $link = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

 
// $name1 = mysqli_real_escape_string($link, $_POST['position']);

// $sa = (rand(0,9999));      
//  $invoiceid = $name1."-".$sa;
 
 $ipaddress = $_SERVER['REMOTE_ADDR'];

$ipdat = @json_decode(file_get_contents( 
    "http://www.geoplugin.net/json.gp?ip=" . $ipaddress)); 
    
     $current_date = date("m-d-Y ");
   
// $orgDate = mysqli_real_escape_string($link, $_POST['start_date']);;  
//     $start_date = date("m/d/Y", strtotime($orgDate)); 
    
//     $orgDate1 = mysqli_real_escape_string($link, $_POST['end_date']);;  
//     $end_date = date("m/d/Y", strtotime($orgDate1)); 
     
//Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);

$email = mysqli_real_escape_string($link, $_POST['email']);




 
 
// Attempt insert query execution
$sql = "INSERT INTO iim_get_update (name, email, date, ip_address)
 VALUES ('$name',   '$email',    '$current_date', '$ipaddress')";
 //$sql = mysql_insert_id();
if(mysqli_query($link, $sql)){
echo "<script type='text/javascript'>
    window.location.href= 'https://iimnet.com/thankyou';
    </script>";
//  echo '<script>document.querySelector(".submit").addEventListener("click", function(){
//   swal("Our First Alert", "With some body text and success icon!", "success");
// });</script>';
//  echo '<script type="text/javascript">alert("Form Submitted Successfully. Goto Checkout page.!"),setTimeout(function () {
//     window.location.href = "checkout.php";
// }, 1000);</script>';
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);




 require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';


//$date = $_POST["date"];
//$time = $_POST["time"];

$email = $_POST["email"];
$custom_website_url = $_POST["custom_website_url"];

$mail = new PHPMailer;
//$mail->isSMTP();
$mail->Host ='smtp.gmail.com';
$mail->Port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';

$mail->Username='info@marketenomicsdigital.com';
$mail->Password='Allthebest@123';


$mail->setFrom('info@marketenomicsdigital.com');
 $mail->addAddress('nectarspot@gmail.com');

// $mail->setFrom('info@iimnet.com');
//  $mail->addAddress('rakesh@iimnet.com');
// // $mail->addReplyTo('rakesh@iimnet.com');
//   $mail->addCC('rakesh@iim-jobs.com');
// $mail->addBCC('nectarspot.ticket@gmail.com')


$mail->isHTML(true);
$mail->Subject='Re:Subscriber Details';
$mail->Body="<html>
<head>
    <title>IIMnet</title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='format-detection' content='telephone=no'>
    <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no';>
  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <style >
        body {
            margin-left: auto;
            margin-top: 10px;
            margin-right: auto;
            margin-bottom: 10px;
            font-family: Open Sans, sans-serif;
            background-color: #ffa500;
            font-size: 18px !important;
            max-width: 800px;
        }

        h1,h2,h3,h4,h5,h6 {margin-top: 0; margin-bottom: 0}
              
        th {
            padding-top: 4px;
            padding-bottom: 4px;
        }

        .data-details {
    width: 100%;
}



.data-details tr:nth-child(even){background-color: #f2f2f2}
        
        @media screen and (max-width: 630px) {
            .content {
                max-width: inherit;
            }
            td {display: block; text-align: center;}
            .data-details td {display: table-cell; text-align: left;}
            span.title {display: inline-block !important; padding-top: 20px; max-width: inherit;}
            .shippmethod td {width: 100%;}
            .Paymentdetails td {display: inline;}
            .table-data td {display: block; text-align: left}
        }
    </style>
</head>

<body>
    <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%;' class='background'>
  <tr>
    <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;' bgcolor='#ffffff'>
      <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;'' class='wrapper'>
        <tr>
          <td align='left' style='font-family: sans-serif; padding:20px; color:#999999; font-size: 12px;'>
           
          </td>
          <td align='right' style='font-family: sans-serif; padding:20px;'>
            <a target='_blank' style='text-decoration: none;' href='#'>
          <h3 style='text-align: center;font-size: 50px; padding-left: -36px;margin-right: 89px;'>IIMnet</h3>
            </a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'>
      <table bgcolor='#1b48b2' border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
        <tr>
          <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 40px; font-size: 28px; font-weight: bold; color: #ffffff; font-family: sans-serif;' class='header'>
             Get Leatest Updates
          </td>
        </tr>
       </table>
     </td>
   </tr>
  <tr>
     <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-top: 5px;' bgcolor='#FFFFFF'>
       <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
         <tr>
           <td style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 20px 20px 0px 20px; font-family: sans-serif;'>
               <h2 style='margin:0; padding:0;'>Hello Admin,</h2>
               <p>$name  is interested to join us as Get Updates. Please find the details <a href='https://iimnet.com/dashboard/index'> here. </a></p>
              
              
           </td>
           
         </tr>
       </table>
     </td>
     </tr>
     <tr>
     <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-top: 5px;' bgcolor='#FFFFFF'>
       <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
        
       </table>
     </td>
  </tr>
  
		
	
	 <tr>
    <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'>
      <table bgcolor='#1b48b2' border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
        <tr>
          <td align='center' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 20px; color: #ffffff; font-family: sans-serif;'>
<p><a href='https://iimnet.com/'><span style='color:#FFFFFF;'>Home</span></a> | <a href='https://iimnet.com/internship/index'><span style='color:#FFFFFF;'>Internship</span></a> | <a href='https://iimnet.com/contact'><span style='color:#FFFFFF;'>Contact</span></a> © IIMnet 2021</p>

          </td>
        </tr>
      </table>
    </td>
  </tr>
	<tr>
		<td align='left' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;' class='footer'>
      <table bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
        <tr>
          <td align='left' style='font-family: sans-serif; padding:20px; font-size: 13px; font-family: sans-serif;'>
            <p>info@iimnet.com </p>
          </td>
          <td align='right' style='font-family: sans-serif; padding:20px; font-size: 13px; font-family: sans-serif;'>
            <p>All rights reserved </p>
          </td>
        </tr>
      </table>
		</td>
	</tr>
</table>
</body>

</html>";

if(!$mail->send()){
    echo "message could not be sent";
}else{
   // echo "Message has been sent!";
}

}
 

?>

   