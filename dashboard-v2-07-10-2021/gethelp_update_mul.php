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
$looking_for = $_POST['looking_for'];
$description = $_POST['description'];
$date = $_POST['date'];
$ipaddress = $_POST['ip_address'];

$status = $_POST['status'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE iim_gethelp SET first_name='$first_name[$i]', last_name='$last_name[$i]',email='$email[$i]', phone_number='$phone_number[$i]', city='$city[$i]' , whatsup_number='$whatsup_number[$i]' ,  language='$language[$i]' , category_type='$category_type[$i]' , description='$description[$i]' , date='$date[$i]' , ip_address='$ipaddress[$i]' , status='$status[$i]' WHERE id=".$id[$i]);
}
header("Location: https://iimnet.com/dashboard/get-help-view");
?>