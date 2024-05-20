<?php
  session_start();
?>

<?php
    if(isset($_POST['approved']))
    {
        $msg = "Approved";
        $status=$_POST['approved'];
    }
    
     if(isset($_POST['onhold']))
    {
        $msg = "onhold";
        $status=$_POST['onhold'];
    }
     if(isset($_POST['hired']))
    {
        $msg = "hired";
        $status=$_POST['hired'];
    }
    
    if(isset($_POST['rejected']))
    {
        $msg = "Rejected";
        $status=$_POST['rejected'];
    }
    $id=$_POST['id'];
    $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    mysqli_select_db($conn, 'marketf7_mailspot');

    $sql = "UPDATE iim_mba SET status = '$status' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
        $_SESSION['success_status'] = "Status Changed Successfully...";
       echo "<script type='text/javascript'>
    window.location.href= 'https://iimnet.com/dashboard/mba_view.php';
  </script>";
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
    ?>