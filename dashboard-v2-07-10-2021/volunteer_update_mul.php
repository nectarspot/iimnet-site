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
$whatsup_number = $_POST['whatsup_number'];
$language = $_POST['language'];
$category_type = $_POST['category_type'];
$age_group = $_POST['age_group'];
$volunteer_timeline = $_POST['volunteer_timeline'];
$description = $_POST['description'];
$status = $_POST['status'];
$date = $_POST['date'];
$ip_address = $_POST['ip_address'];

$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE iim_volunteer SET first_name='$first_name[$i]', last_name='$last_name[$i]',email='$email[$i]', phone_number='$phone_number[$i]', city='$city[$i]' , whatsup_number='$whatsup_number[$i]' ,  language='$language[$i]' , category_type='$category_type[$i]' , age_group='$age_group[$i]' , volunteer_timeline='$volunteer_timeline[$i]' , description='$description[$i]' , status='$status[$i]' , date='$date[$i]', ip_address='$ip_address[$i]' WHERE id=".$id[$i]);
}
header("Location: https://iimnet.com/dashboard/volunteer_view");
?>