<?php
 session_start();
?>


<?php
$conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    mysqli_select_db($conn, 'marketf7_mailspot');
if(isset($_POST['Update']) )
{
$id=$_POST['id'];
//$trn_date = date("Y-m-d H:i:s");

$patient_name =$_POST['patient_name'];
$patient_age =$_POST['patient_age'];
$patient_city =$_POST['patient_city'];
$location =$_POST['location'];
$symptoms =$_POST['symptoms'];

$oxygen_cylinder =$_POST['oxygen_cylinder'];
$level =$_POST['level'];
$hospital_visit =$_POST['hospital_visit'];
$hospital_bed =$_POST['hospital_bed'];
$hospital_name =$_POST['hospital_name'];
$ward_numner =$_POST['ward_numner'];
$covid_test =$_POST['covid_test'];
$pvt_govt =$_POST['pvt_govt'];
$bed_type =$_POST['bed_type'];
$attender_no =$_POST['attender_no'];
$patient_relation =$_POST['patient_relation'];
$srf =$_POST['srf'];
$bu_number =$_POST['bu_number'];
$condition_type =$_POST['condition_type'];
$doctor_name =$_POST['doctor_name'];
$remarks =$_POST['remarks'];
$date =$_POST['date'];
$ip_address =$_POST['ip_address'];



//$submittedby = $_SESSION["username"];
$update="update iim_gethelp_details set   patient_name='".$patient_name."' , patient_age='".$patient_age."' , patient_city='".$patient_city."' , location='".$location."' ,  symptoms='".$symptoms."' , oxygen_cylinder='".$oxygen_cylinder."' , level='".$level."' , hospital_visit='".$hospital_visit."' , hospital_bed='".$hospital_bed."' , hospital_name='".$hospital_name."' , ward_numner='".$ward_numner."' , covid_test='".$covid_test."' , pvt_govt='".$pvt_govt."' , bed_type='".$bed_type."' , attender_no='".$attender_no."' , patient_relation='".$patient_relation."' , srf='".$srf."', bu_number='".$bu_number."' , condition_type='".$condition_type."', doctor_name='".$doctor_name."' , remarks='".$remarks."' , date='".$date."' , ip_address='".$ip_address."'    where id='".$id."'";
 if(mysqli_query($conn, $update)){
         $_SESSION['record_update'] = "Record Updated Successfully...";
//          header("Location: https://www.livclinic.com/dashboard/schedule-an-appointment-v1");
       echo "<script type='text/javascript'>
    window.location.href= 'https://iimnet.com/dashboard/get_help_details_view';
   </script>";
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
}

 ?>