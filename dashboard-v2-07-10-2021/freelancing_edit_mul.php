<?php
	session_start();	
	error_reporting(0);

 //$conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

	 $DB_host = "localhost";
	 $DB_user = "marketf7_lokesh";
	 $DB_pass = "#Xka1ZJ$&QC[";
	 $DB_name = "marketf7_mailspot";
	 
	 $MySQLiconn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($MySQLiconn->connect_errno)
     {
         die("ERROR : -> ".$MySQLiconn->connect_error);
     }

	if(isset($_POST['chk'])=="")
	{
	    
	    $_SESSION["error"]=" At least one checkbox Must be Selected !!!";
		?>
        <script>
		//alert('At least one checkbox Must be Selected !!!');
		window.location.href='https://iimnet.com/dashboard/iimnet_freelancing_view';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>IIMnet</title>
<!--<link rel="shortcut icon" href="https://nectarspot.com/images/favicon.png">-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<body>


<div class="clearfix"></div>



<div class="clearfix"></div><br />

<div class="container">
<form method="post" action="freelancing_update_mul">

<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];			
	$res=$MySQLiconn->query("SELECT * FROM iim_freelancing WHERE id=".$id);
	while($row=$res->fetch_array())
	{
		?>
	<div class="modal-dialog">
        <div class="modal-content modal-lg">
          <div class="modal-header">
            <h4 class="modal-title">Edit  Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
           
              <div class="row">
        <div class="col-sm-12">
          
          <div class="form-group">
            <label for="" style="color:black;">First Name</label>
             <input type="hidden"  class="form-control" name="id[]" value="<?php echo $row['id']; ?>" />
            <input type="text" class="form-control" name="first_name[]" value="<?php echo $row['first_name']; ?>" />
          </div>
          
           <div class="form-group">
            <label for="" style="color:black;">Last Name</label>
             <input type="text" class="form-control" name="last_name[]" value="<?php echo $row['last_name']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Email</label>
             <input type="text" class="form-control" name="email[]" value="<?php echo $row['email']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Phone Number</label>
            <input type="text" class="form-control"name="phone_number[]" value="<?php echo $row['phone_number']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">City</label>
             <input type="text" class="form-control" name="city[]" value="<?php echo $row['city']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Internship</label>
             <input type="text" class="form-control" name="freelancing[]" value="<?php echo $row['freelancing']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Internship Type</label>
          <input type="text" class="form-control" name="freelancing_type[]" value="<?php echo $row['freelancing_type']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Start Date</label>
           <input type="text" class="form-control" name="start_date[]" value="<?php echo $row['start_date']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">End Date</label>
           <input type="text" class="form-control" name="end_date[]" value="<?php echo $row['end_date']; ?>" />
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Brief description about yourself</label>
           <input type="text" class="form-control" name="answer[]" value="<?php echo $row['answer']; ?>" />
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Brief description about dream internship</label>
           <input type="text" class="form-control" name="answer1[]" value="<?php echo $row['answer1']; ?>" />
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Internship Position</label>
           <input type="text" class="form-control" name="position[]" value="<?php echo $row['position']; ?>" />
          </div>
        
           <div class="form-group">
            <label for="" style="color:black;">Dropbox, Google Drive link</label>
           <input type="text" class="form-control" name="drive_link[]" value="<?php echo $row['drive_link']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">File</label>
           <input type="text" class="form-control" name="file_name[]" value="<?php echo $row['file_name']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Status</label>
           <input type="text" class="form-control" name="status[]" value="<?php echo $row['status']; ?>" />
          </div>
          
          <div class="form-group">
            <label for="" style="color:black;">Date</label>
           <input type="text" class="form-control" name="date[]" value="<?php echo $row['date']; ?>" />
          </div>
          <div class="form-group">
            <label for="" style="color:black;">IP Address</label>
           <input type="text" class="form-control" name="ip_address[]" value="<?php echo $row['ip_address']; ?>" />
          </div>
		<?php	
	}			
}
?>
<tr>
<td colspan="2">
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Update</button>&nbsp;
<a href="https://iimnet.com/dashboard/iimnet_freelancing_view" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; cancel</a>

</form>
</div>



          
          

         
          
          
      
      </div>
          
          </div>
        </div>
      </div>
    </div>


</body>
</html>