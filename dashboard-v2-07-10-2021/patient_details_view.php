<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location:index.php");
        exit();
    }
?>
 
<html lang="en">

<head>
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


<!--<link href="dist/css/jquery.dataTables.min.css" rel="stylesheet">-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
   <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>  -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css"></script>
    <!-- Favicon icon -->
   
    <!-- Custom CSS -->
    <link href="dist/css/style1.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->


</head>
    <style>
    .hide{

visibility: hidden

}
.btn-primary{
    width: 85px;
padding: 8px 1px;
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  width: 61px; 
  padding: 11px 1px;
  font-size: 11px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content input:hover {background-color: red;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
.approved{
    width: 173px;
    padding: 16px 1px;
    font-size: 8px;
}
.drp-dwn-btn {
    background-color: #1b48b2 !important;
    margin-left: 15px !important;
        margin-top: -15px !important;
}
.ul-drp-dwn-menu {
    padding-left: 10px;
}
.ul-drp-dwn-menu-li {
    padding-bottom: .5rem;
}
.dr{
   
    position: absolute ;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 7rem;
    padding: .5rem 0;
    /* margin: 0.125rem -60px 4px; */
    font-size: .875rem;
    color: #6a7a8c;
    text-align: left;
    background-color: #1b48b2;
    border: 1px solid #1b48b2;
    border-radius: 2px;
    opacity: 1px;

}
.dropdown-menu {min-width: auto !important;}
.hold{
    background-color: #4c64af;
    color: white;
    width: 54px;
    padding: 10px 0px;
    font-size: 11px;
    border: none;
}
.reject{
    background-color: #f93913;
    color: white;
    width: 54px;
    padding: 10px 0px;
    font-size: 11px;
    border: none;
}
.btn-success:hover {
    color: #fff;
    background-color: #4c64af !important;
    border-color: #4c64af !important;
}

.close {
    float: right !important;
    font-size: 1.3125rem !important;
    line-height: 1 !important;
    color: #141212 !important;
    text-shadow: 0 1px 0 #fff !important;
    opacity: .5 !important;
}
.container {
  ...
  display: flex;
  justify-content: center;
}
.dataTables_wrapper .dataTables_filter input::-webkit-search-cancel-button {
  -webkit-appearance: button !important;
  -moz-appearance: button !important; 
}

</style>


<body>

   


    
    
    
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand" style="background-color: #ffffff;">
                        <a href="index.php" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <!--<img src="https://nectarspot.com/images/new-ns-clear-logo.png" alt="homepage" class="dark-logo" style="height: 40px; width: 200px; " />-->
                                <!-- Light Logo icon -->
                                <!--<img src="https://theindianharvest.com/images/logo1.png" alt="homepage" class="light-logo" style="height: 62px; width: 192px;"/>-->
                                <h2>IIMnet</h2>
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                           
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                    
                    </ul>
                      <?php if(isset($_SESSION['success'])): ?>
                     <div class="col-sm-4 alert alert-success alert-dismissible fade show container1">
        <strong>Success!</strong>  <?php echo   $_SESSION["success"]; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
     <?php endif; ?>
<?php unset($_SESSION['success']); ?>
   
   
   
    
    <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 5000);
    
    </script>
    
     <?php if(isset($_SESSION['success_status'])): ?>
                     <div class="col-sm-4 alert alert-success alert-dismissible fade show container1">
        <strong>Success!</strong>  <?php echo   $_SESSION["success_status"]; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
     <?php endif; ?>
<?php unset($_SESSION['success_status']); ?>
   
   
   
    
    <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 5000);
    
    </script>
             
                    
                     <b>  <?php //echo  $_SESSION["username"]; ?>(Admin)</b>
                    <!--<button class="button btn-primary" style="margin-left:10px;"> <a href="https://iimnet.com/dashboard/logout" style="color:#ffffff;"> Logout</a></button>-->
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://iimnet.com/dashboard/patient_details_view"
                                aria-expanded="false">
                                 <i class="fa fa-home" aria-hidden="true"></i>
                                <span class="hide-menu">IIMnet COVID_19 Patient Details</span>
                            </a>
                        </li>
                        
                        
                     
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <h4 class="page-title">COVID-19 Patient Details</h4>
                        
                         <span class="blue-font">( Click on VIEW button see the Patient Details )</span>
                         
   <?php if(isset($_SESSION['error'])): ?>
                     <div class="col-sm-5 alert alert-danger alert-dismissible fade show container">
        <strong>Error!</strong>  <?php echo   $_SESSION["error"]; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
     <?php endif; ?>
<?php unset($_SESSION['error']); ?>
    
   
    
    <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 5000);
    
    </script>
                     
                     

                    </div>
                  
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                    <div class="card">
                          
                           
        <div class="table-wrapper table-responsive">
             <form method="post" name="frm">
           <table id="example" class="table-striped"> 
             <thead>
                 
<!--<input type='submit' class="bb" value='Delete' name='but_delete'>-->
<!--    <th class="display-flex">-->
<!--        <input type="checkbox" class="select-all" />-->
<!--        <div class = "btn-group">-->
  
   
<!--   <button type = "button" class = "btn btn-default dropdown-toggle drp-dwn-btn" data-toggle = "dropdown">-->
<!--      <span class = "caret"></span>-->
<!--      <span class = "sr-only">Toggle Dropdown</span>-->
<!--   </button>-->
    
<!--   <ul class = "dropdown-menu ul-drp-dwn-menu dr" role = "menu">-->
<!--      <li onClick="edit_records();" class="ul-drp-dwn-menu-li"><span style="color:#ffffff;">Edit</span></li>-->
<!--       <li onClick="delete_records();" ><span style="color:#ffffff;">Delete</span></li>-->
      <!--<li ><a href="delete_mul_careers.php"><span style="color:#ffffff;">Delete</span></a></li>-->
     
      
     
<!--   </ul>-->
   
<!--</div></th>-->

                <th>View</th>
               <th>Name</th>
             <th>Email</th>
                <th>Phone</th>
                <th>City</th>
                 <th>Patient Name</th>
                 <th>Patient Age</th>
                 <th>Patient City</th>
                 <th>Patient Phone</th>
                <th>Date</th>
                <th>IP Address</th>
                
              </thead>

              <tbody>
            


           

                  <?php
                       
            $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

            $sql = "SELECT * FROM iim_gethelp_details order by id desc";
            $result = mysqli_query($conn, $sql);

            $files = mysqli_fetch_all($result, MYSQLI_ASSOC);


                  
                  $i=1;
      foreach ($files as $file): ?>
    <tr>
     <!--<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $file['id']; ?>" ></td>-->
     
       <td>
  <div class="btn-group" style="width:30px;"><a class="btn btn-primary btn_toggle" data-toggle="modal" href="#Modal_View_<?php echo $file['id']; ?>" ><i class="fa fa-eye" aria-hidden="true"></i></a>
  </div></td>
     <td><?php echo $file['name']; ?></td>
    
      <td><?php echo $file['email']; ?></td>
      <td><?php echo $file['phone_number']; ?></td>
       <td><?php echo $file['city']; ?></td>
        <td><?php echo $file['patient_name']; ?></td>
         <td><?php echo $file['patient_age']; ?></td>
          <td><?php echo $file['patient_city']; ?></td>
          <td><?php echo $file['patient_phone']; ?></td>
        <td><?php echo $file['date']; ?></td>
      <td><?php echo $file['ip_address']; ?></td>
    
  <!--        <td>-->
  <!--<div class="btn-group">-->
  <!--&nbsp;<a class="btn btn-primary" style="background-color:blue;width:30px;"  href="file_download?filename=<?php echo $file['file_name'];?>"><i class="fa fa-download" aria-hidden="true"></i></a></div></td>-->
  <!--          <td class="hide">https://iimnet.com/dashboard/file_download/<?php echo $file['file_name']; ?></td>-->
           <!--<td><?php echo $file['status']; ?></td>-->
     
  <!--    <td>-->
  <!--<div class="btn-group"><a class="btn btn-primary btn_toggle" data-toggle="modal" href="#Modal_View_<?php echo $file['id']; ?>" ><i class="fa fa-edit" aria-hidden="true"></i></a>-->
  <!--</div></td>-->
      
   </form>
<!--<td>-->
   
<!--                            <form method="post" action="status_change" id="form">-->
<!--                                <input type="hidden" name="id" value="<?php echo $file['id']; ?>" />-->
<!--                                 <input type="hidden" name="email" value="<?php echo $file['first_name']; ?>" />-->
<!--                                  <input type="hidden" name="status" value="<?php echo $file['last_name']; ?>" />-->
<!--                                   <input type="hidden" name="name" value="<?php echo $file['email']; ?>" />-->
<!--                                   <input type="hidden" name="date" value="<?php echo $file['phone_number']; ?>" />-->
<!--                                   <input type="hidden" name="time" value="<?php echo $file['status']; ?>" />-->
                                  
<!--                                <input type="submit" id="one" class="btn btn-primary" value="Confirm" name="approved" style="width: 61px; padding: 7px 0px;"  />-->
<!--                               <input type="submit" id="two" class="btn btn-info" value="OnHold" name="onhold"  />-->
<!--                               <input type="submit" id="two" class="btn btn-success" value="Hire" name="hired" style="width:62px;" />-->
<!--                               <input type="submit" id="two" class="btn btn-danger" value="Reject" name="rejected" style="width:62px;" />-->
                               
                               
<!--                            </form>-->
<!--                        </td>-->
    </tr>
  

   <div id="Modal_View_<?php echo $file['id']; ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content modal-lg">
          <div class="modal-header">
            <h4 class="modal-title">View  Details</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
          </div>
          <div class="modal-body">
           
              <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label for="" style="color:black;">Patient Name</label>
            <!--<textarea type="text" class="form-control" id="first_name_edit"name="first_name_edit" placeholder="Enter First Name" value="<?php echo $file['answer']; ?>" disabled></textarea>-->
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['patient_name']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Patient Age</label>
           <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['patient_age']; ?></textarea>
          </div>
          
           <div class="form-group">
            <label for="" style="color:black;">Patient City </label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['patient_city']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Area/Location/Address</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['location']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Symptoms</label>
           <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['symptoms']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Is Patient on Oxygen Cylinder?</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['oxygen_cylinder']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">SPO2 Level (Oxygen Level)</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['level']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">List of Hospitals Visited</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['hospital_visit']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Searching Hospital Bed Since?</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['hospital_bed']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Hospital name if admitted?</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['hospital_name']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Ward No/Name</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['ward_numner']; ?></textarea>
          </div>
         
          <div class="form-group">
            <label for="" style="color:black;">Covid Test Done?</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['covid_test']; ?></textarea>
          </div>
            <div class="form-group">
            <label for="" style="color:black;">Prefer/Govt/Pvt/Any Hospital? </label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['pvt_govt']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Type of bed required? </label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['bed_type']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Attender Mobile Number</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['attender_no']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Realation to the Patient </label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['patient_relation']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">SRF ID </label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['srf']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">BU Number </label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['bu_number']; ?></textarea>
          </div><div class="form-group">
            <label for="" style="color:black;">Co-morbid conditions </label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['condition_type']; ?></textarea>
          </div><div class="form-group">
            <label for="" style="color:black;">Doctor Name </label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['doctor_name']; ?></textarea>
          </div><div class="form-group">
            <label for="" style="color:black;">Other Remarks</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['remarks']; ?></textarea>
          </div><div class="form-group">
            <label for="" style="color:black;">Date </label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['date']; ?></textarea>
          </div><div class="form-group">
            <label for="" style="color:black;">IP Address </label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['ip_address']; ?></textarea>
          </div>
        
          
          

         
          
          
      
      </div>
          
          </div>
        </div>
      </div>
    </div>
</div>

           <?php endforeach;?>
                  
</tbody>

                   
              </table>

                           
                   


                        </div>
                    </div>
                    
                </div>
                
                </div>
               
                
            </div>
           
        </div>
       
    </div>
    
    
   
     
    
   
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>

    <script type="text/javascript">
        
$(document).ready(function() {
    $('#example').DataTable( {


        dom: 'Bfrtip',

        buttons: [
            'copy',
             { 
      extend: 'csv',
      text: 'Export'
   }, 
             'excel',
              'pdf' 
        ],
        initComplete: function () {
            var btns = $('.dt-button');
            btns.addClass('btn btn-success btn-sm');
            btns.removeClass('dt-button');

        }

        
    } );
} );

    </script>
   
    
 <script>
// $("#checkAl").click(function () {
// $('input:checkbox').not(this).prop('checked', this.checked);
// });

 $('document').ready(function()
{
    $(".select-all").click(function ()
    {
        $('.chk-box').attr('checked', this.checked)
    });
        
    $(".chk-box").click(function()
    {
        if($(".chk-box").length == $(".chk-box:checked").length)
        {
            $(".select-all").attr("checked", "checked");
        }
        else
        {
            $(".select-all").removeAttr("checked");
        }
    });
});


//  for select / deselect all


//  page redirect on user click edit/delete
function edit_records() 
{
	document.frm.action = "edit_mul";
	document.frm.submit();		
}
function delete_records() 
{
	document.frm.action = "delete_mul";
	document.frm.submit();
}
    </script>
    
    
</body>

</html>