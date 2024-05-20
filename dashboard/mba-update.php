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
$description =$_POST['description'];

$status =$_POST['status'];
$date =$_POST['date'];
$ip_address =$_POST['ip_address'];




//$submittedby = $_SESSION["username"];
$update="update iim_mba set   first_name='".$first_name."' , last_name='".$last_name."' , email='".$email."' , phone_number='".$phone_number."' ,  description='".$description."' , status='".$status."' , date='".$date."' , ip_address='".$ip_address."'  where id='".$id."'";
 if(mysqli_query($conn, $update)){
         $_SESSION['record_update'] = "Record Updated Successfully...";
//          header("Location: https://www.livclinic.com/dashboard/schedule-an-appointment-v1");
       echo "<script type='text/javascript'>
    window.location.href= 'https://iimnet.com/dashboard/mba_view';
   </script>";
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
}

 ?> 