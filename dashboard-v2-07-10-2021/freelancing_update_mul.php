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
$freelancing = $_POST['freelancing'];
$freelancing_type = $_POST['freelancing_type'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$answer = $_POST['answer'];
$answer1 = $_POST['answer1'];
$position = $_POST['position'];

$drive_link = $_POST['Drive_link'];
$file_name = $_POST['file_name'];
$date = $_POST['date'];
$ip_address = $_POST['ip_address'];

$status = $_POST['status'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE iim_freelancing SET first_name='$first_name[$i]', last_name='$last_name[$i]',email='$email[$i]', phone_number='$phone_number[$i]', city='$city[$i]' , freelancing='$freelancing[$i]' ,  freelancing_type='$freelancing_type[$i]' , start_date='$start_date[$i]' , end_date='$end_date[$i]' , answer='$answer[$i]' , answer1='$answer1[$i]' , position='$position[$i]' , drive_link='$drive_link[$i]',  file_name='$file_name[$i]', date='$date[$i]',  ip_address='$ip_address[$i]', status='$status[$i]' WHERE id=".$id[$i]);
}
header("Location: https://iimnet.com/dashboard/iimnet_freelancing_view");
?>