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
$phone_number = mysqli_real_escape_string($link,  $_POST['phone_number']);
$city = mysqli_real_escape_string($link, $_POST['city']);
$patient_name = mysqli_real_escape_string($link, $_POST['patient_name']);
$patient_age = mysqli_real_escape_string($link,  $_POST['patient_age']);
$patient_city = mysqli_real_escape_string($link, $_POST['patient_city']);
$patient_phone = mysqli_real_escape_string($link, $_POST['patient_phone']);

$location = mysqli_real_escape_string($link, $_POST['location']);
$symptoms = mysqli_real_escape_string($link, $_POST['symptoms']);

$oxygen_cylinder = mysqli_real_escape_string($link, $_POST['oxygen_cylinder']);
$level = mysqli_real_escape_string($link, $_POST['level']);
$hospital_visit = mysqli_real_escape_string($link, $_POST['hospital_visit']);
$hospital_bed = mysqli_real_escape_string($link, $_POST['hospital_bed']);
$hospital_name = mysqli_real_escape_string($link, $_POST['hospital_name']);
$ward_numner = mysqli_real_escape_string($link, $_POST['ward_numner']);
$covid_test = mysqli_real_escape_string($link, $_POST['covid_test']);
$pvt_govt = mysqli_real_escape_string($link, $_POST['pvt_govt']);
$bed_type = mysqli_real_escape_string($link, $_POST['bed_type']);

$attender_no = mysqli_real_escape_string($link, $_POST['attender_no']);
$patient_relation = mysqli_real_escape_string($link, $_POST['patient_relation']);
$srf = mysqli_real_escape_string($link, $_POST['srf']);
$bu_number = mysqli_real_escape_string($link, $_POST['bu_number']);
$condition_type = mysqli_real_escape_string($link, $_POST['condition_type']);
$doctor_name = mysqli_real_escape_string($link, $_POST['doctor_name']);
$remarks = mysqli_real_escape_string($link, $_POST['remarks']);
$volunteer_no = mysqli_real_escape_string($link, implode(',', $_POST['volunteer_no']));


$status = mysqli_real_escape_string($link, $_POST['status']);



 
 
// Attempt insert query execution
$sql = "INSERT INTO iim_gethelp_details (name, email,  phone_number, city,patient_name,patient_age,patient_city,patient_phone,location,symptoms,oxygen_cylinder,level,hospital_visit,hospital_bed,hospital_name,ward_numner,covid_test,pvt_govt,bed_type,attender_no,patient_relation,srf,bu_number,condition_type,doctor_name,remarks,status, date, ip_address,volunteer_no)
 VALUES ('$name',   '$email',   '$phone_number', '$city', '$patient_name','$patient_age','$patient_city','$patient_phone','$location', '$symptoms','$oxygen_cylinder','$level','$hospital_visit','$hospital_bed','$hospital_name','$ward_numner','$covid_test','$pvt_govt','$bed_type','$attender_no','$patient_relation','$srf','$bu_number','$condition_type','$doctor_name','$remarks','$status', '$current_date', '$ipaddress','$volunteer_no')";
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

$message = "Thank you for your information, please find your details below: \n https://iimnet.com/helpline/get-help-details \n Name: $name \n Email: $email \n Phone Number: $phone_number \n City: $city \n Patient Name: $patient_name \n Patient Age: $patient_age \n Patient City: $patient_city \n Location: $location \n Symptoms: $symptoms \n Oxygen Cylinder: $oxygen_cylinder \n Oxygen Level: $level \n Hospital Visit: $hospital_visit \n Hospital Bed: $hospital_bed \n Hospital Name: $hospital_name \n Waed No/Name: $ward_numner \n Covid Test:$covid_test \n Govt/PVT/Any Hospital: $pvt_govt \n Type Of Bed: $bed_type \n Attender No: $attender_no \n SRF ID: $srf \n BU Number: $bu_number \n Co-morbid conditions(Critical condition): $condition_type \n Doctor Name: $doctor_name \n Other Remarks: $remarks\n Date: $current_date \n IP Address: $ipaddress \n Someone from our volunteer team will reach you out as soon as possible. ";

  $data = [
    'phone' => $phone_number, // Receivers phone
    'body' => $message, // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message

$url = 'https://api.chat-api.com/instance262353/message?token=w819s4m0tovgtjv0'; 
//$url1 = 'https://api.whatsapp.com/send?phone=919885677274&text=Hello%20Whatsapp%2C%20Testing%20Message';
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
//$context  = stream_context_create($options);
$result = file_get_contents($url, false, $options);

//valunteer message
$message1 = "Hello Volunteer, please find the covid patient information below: \n Name: $name \n Email: $email \n Phone Number: $phone_number \n City: $city \n Patient Name: $patient_name \n Patient Age: $patient_age \n Patient City: $patient_city \n Location: $location \n Symptoms: $symptoms \n Oxygen Cylinder: $oxygen_cylinder \n Oxygen Level: $level \n Hospital Visit: $hospital_visit \n Hospital Bed: $hospital_bed \n Hospital Name: $hospital_name \n Waed No/Name: $ward_numner \n Covid Test:$covid_test \n Govt/PVT/Any Hospital: $pvt_govt \n Type Of Bed: $bed_type \n Attender No: $attender_no \n SRF ID: $srf \n BU Number: $bu_number \n Co-morbid conditions(Critical condition): $condition_type \n Doctor Name: $doctor_name \n Other Remarks: $remarks\n Date: $current_date \n IP Address: $ipaddress \n Please help or support them as soon as possible. ";

  $data1 = [
    'phone' => +16309997768, // Receivers phone
    'body' => $message1, // Message
];
$json = json_encode($data1); // Encode data to JSON
// URL for request POST /message
$url = 'https://api.chat-api.com/instance262353/message?token=w819s4m0tovgtjv0'; 

// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
//$context  = stream_context_create($options);
$result = file_get_contents($url, false, $options);
print_r($result);

//patient message
$message2 = "Thank you for your information, $name fill your details below: \n Name: $name \n Email: $email \n Phone Number: $phone_number \n City: $city \n Patient Name: $patient_name \n Patient Age: $patient_age \n Patient City: $patient_city \n Location: $location \n Symptoms: $symptoms \n Oxygen Cylinder: $oxygen_cylinder \n Oxygen Level: $level \n Hospital Visit: $hospital_visit \n Hospital Bed: $hospital_bed \n Hospital Name: $hospital_name \n Waed No/Name: $ward_numner \n Covid Test:$covid_test \n Govt/PVT/Any Hospital: $pvt_govt \n Type Of Bed: $bed_type \n Attender No: $attender_no \n SRF ID: $srf \n BU Number: $bu_number \n Co-morbid conditions(Critical condition): $condition_type \n Doctor Name: $doctor_name \n Other Remarks: $remarks\n Date: $current_date \n IP Address: $ipaddress \n Please help or support them as soon as possible. ";

  $data2 = [
    'phone' => $patient_phone, // Receivers phone
    'body' => $message2, // Message
];
$json = json_encode($data2); // Encode data to JSON
// URL for request POST /message

$url = 'https://api.chat-api.com/instance262353/message?token=w819s4m0tovgtjv0'; 
//$url1 = 'https://api.whatsapp.com/send?phone=919885677274&text=Hello%20Whatsapp%2C%20Testing%20Message';
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request

$result = file_get_contents($url, false, $options);
//print_r($result);


 require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';


//$date = $_POST["date"];
//$time = $_POST["time"];

$email = $_POST["email"];
$fullname = $_POST["name"];

$mail = new PHPMailer;
//$mail->isSMTP();
$mail->Host ='smtp.gmail.com';
$mail->Port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';

$mail->Username='info@marketenomicsdigital.com';
$mail->Password='Allthebest@123';


$mail->setFrom('info@marketenomicsdigital.com');
 $mail->addAddress('lokesh@iim-jobs.com');

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
             Covid-19 Volunteer Helpline
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
               <p>$name  is interested to join us as Covid-19 Volunteer Helpline. Please find the details <a href='https://iimnet.com/dashboard/index'> here. </a></p>
              
              
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

   