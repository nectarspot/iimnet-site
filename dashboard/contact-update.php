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

$name =$_POST['name'];
$email =$_POST['email'];
$phone_number =$_POST['phone_number'];
$time_to_call =$_POST['time_to_call'];
$description =$_POST['description'];


//$submittedby = $_SESSION["username"];
$update="update iimnet_contact set   name='".$name."' , email='".$email."' , phone_number='".$phone_number."' ,  time_to_call='".$time_to_call."' , description='".$description."'   where id='".$id."'";
 if(mysqli_query($conn, $update)){
         $_SESSION['record_update'] = "Record Updated Successfully...";
//          header("Location: https://www.livclinic.com/dashboard/schedule-an-appointment-v1");
       echo "<script type='text/javascript'>
    window.location.href= 'https://iimnet.com/dashboard/contact-view';
   </script>";
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
}

 ?>