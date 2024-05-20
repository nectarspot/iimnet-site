<?php

$DB_host = "localhost";
	 $DB_user = "marketf7_lokesh";
	 $DB_pass = "#Xka1ZJ$&QC[";
	 $DB_name = "marketf7_mailspot";
	 
	 $MySQLiconn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($MySQLiconn->connect_errno)
     {
         die("ERROR : -> ".$MySQLiconn->connect_error);
     }

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$city = $_POST['city'];
$internship = $_POST['internship'];
$internship_type = $_POST['internship_type'];

$answer = $_POST['answer'];
$answer1 = $_POST['answer1'];
$position = $_POST['position'];

$drive_link = $_POST['Drive_link'];
$file_name = $_POST['file_name'];
$description = $_POST['description'];
$status = $_POST['status'];
$date = $_POST['date'];
$ip_address = $_POST['ip_address'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE iim_mba SET first_name='$first_name[$i]', last_name='$last_name[$i]',email='$email[$i]', phone_number='$phone_number[$i]', city='$city[$i]' , internship='$internship[$i]' ,  internship_type='$internship_type[$i]'  , answer='$answer[$i]' , answer1='$answer1[$i]' , position='$position[$i]' , description='$description[$i]', drive_link='$drive_link[$i]', file_name='$file_name[$i]', status='$status[$i]', date='$date[$i]',ip_address='$ip_address[$i]' WHERE id=".$id[$i]);
}
header("Location: https://iimnet.com/dashboard/mba_view");
?>