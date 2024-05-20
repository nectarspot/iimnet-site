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

$first_name =$_POST['first_name'];
$last_name =$_POST['last_name'];
$email =$_POST['email'];
$phone_number =$_POST['phone_number'];
$city =$_POST['city'];

$internship =$_POST['internship'];
$internship_type =$_POST['internship_type'];
$start_date =$_POST['start_date'];
$end_date =$_POST['end_date'];
$answer =$_POST['answer'];
$answer1=$_POST['answer1'];
$position =$_POST['position'];
$drive_link =$_POST['drive_link'];
$status =$_POST['status'];



//$submittedby = $_SESSION["username"];
$update="update iimnet_internship set   first_name='".$first_name."' , last_name='".$last_name."' , email='".$email."' , phone_number='".$phone_number."' ,  city='".$city."' , internship='".$internship."' , internship_type='".$internship_type."' , start_date='".$start_date."' , end_date='".$end_date."' , answer='".$answer."' , answer1='".$answer1."' , position='".$position."' , drive_link='".$drive_link."' , status='".$status."'    where id='".$id."'";
 if(mysqli_query($conn, $update)){
         $_SESSION['record_update'] = "Record Updated Successfully...";
//          header("Location: https://www.livclinic.com/dashboard/schedule-an-appointment-v1");
       echo "<script type='text/javascript'>
    window.location.href= 'https://iimnet.com/dashboard/iimnet_internship_view';
   </script>";
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
}

 ?> 