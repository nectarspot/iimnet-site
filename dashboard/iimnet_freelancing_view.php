<?php
    session_start();
    if(!isset($_SESSION["login_user"])) {
        header("Location:index");
        exit();
    }
?>


<?php include 'header.php' ?>

<title>Freelancing | Iimnet</title>


    <style>
    .hide{

visibility: hidden

}
.btn-primary{
    width: 85px;
padding: 8px 1px;
}

.drop-list{
  display: flex;
}
.drop-list .dropdown{
  padding:10px;
}

/*.dropbtn {*/
/*  background-color: #4CAF50;*/
/*  color: white;*/
/*  width: 85px; */
/*  padding: 11px 1px;*/
/*  font-size: 11px;*/
/*  border: none;*/
/*}*/

/*.dropdown {*/
/*  position: relative;*/
/*  display: inline-block;*/
/*}*/

/*.dropdown-content {*/
/*  display: none;*/
/*  position: absolute;*/
/*  background-color: #f1f1f1;*/
/*  min-width: 160px;*/
/*  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
/*  z-index: 1;*/
/*}*/

/*.dropdown-content a {*/
/*  color: black;*/
/*  padding: 12px 16px;*/
/*  text-decoration: none;*/
/*  display: block;*/
/*}*/

/*.dropdown-content input:hover {background-color: red;}*/

/*.dropdown:hover .dropdown-content {display: block;}*/

/*.dropdown:hover .dropbtn {background-color: #3e8e41;}*/
.approved{
    width: 173px;
    padding: 16px 1px;
    font-size: 8px;
}

.table-striped tbody tr td {
    font-size: 14px;
    color: #212529;
}

.left-sidebar {
position: absolute;
width: 210px;
height: 100%;
top: 0;
z-index: 10;
padding-top: 64px;
background: #fff;
}
#main-wrapper[data-layout=vertical][data-sidebartype=full] .page-wrapper {
margin-left: 210px;
}
.table-responsive thead th {
color: #000000 !important;
font-weight: 600 !important;
font-size: 14px !important;
}




/*.dt-buttons{margin:-34px 80px !important}*/
/*.bb{*/
/*    margin: 8px 18px;*/
/*background-color: #1848b2;*/
/*color: #fff;*/
/*border: none;*/
/*padding: 3px 6px;*/
/*}*/
/*#checkAl{margin-left:-8px;margin-right:7px}*/
/*@media screen and (max-width:320px){ .bb {*/
/*margin: 8px 5px;*/
/*}}*/
/*@media screen and (max-width:767px){ */
/*    .bb {*/
/*margin: 8px 32px;*/
/*}*/
/*    .dt-buttons {*/
/*margin: -35px -60px 0 0!important;*/
/*}*/
/*}*/

.btn-default {
    background-color: #a9adb2 !important;
}
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 7rem;
    padding: .5rem 0;
    /*margin: 0.125rem -60px 4px;*/
    font-size: .875rem;
    color: #6a7a8c;
    text-align: left;
    background-color: #1b48b2;
    border: 1px solid #1b48b2;
    border-radius: 2px;
    opacity:1px;
}
.drp-dwn-btn {
    background-color: #1b48b2 !important;
    margin-left: 5px !important;
}
.ul-drp-dwn-menu {
    padding-left: 16px;
}
.ul-drp-dwn-menu-li {
    padding-bottom: .5rem;
}
.display-flex {
    display: flex;
    padding-left: 10px !important;
    align-items: center;
}
body table.dataTable thead .display-flex .sorting_asc {
    background-image: none !important;
}
.container {
  ...
  display: flex;
  justify-content: center;
}
.container1 {
  ...
  display: flex;
  justify-content: center;
}
.dataTables_wrapper .dataTables_filter input::-webkit-search-cancel-button {
  -webkit-appearance: button !important;
  -moz-appearance: button !important; 
  cursor: pointer !important;
}
.sidebar-nav ul .sidebar-item {
    width: 210px !important;
}
#main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin5], #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin5] .sidebar-nav ul, #main-wrapper[data-layout=vertical] .topbar .navbar-collapse[data-navbarbg=skin5], #main-wrapper[data-layout=vertical] .topbar[data-navbarbg=skin5], #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin5], #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin5] .sidebar-nav ul, #main-wrapper[data-layout=horizontal] .topbar .navbar-collapse[data-navbarbg=skin5], #main-wrapper[data-layout=horizontal] .topbar[data-navbarbg=skin5] {
    background: #1b48b2;
}
.sidebar-nav>#sidebarnav>.sidebar-item>.sidebar-link:hover {
    background: #ffffff;
    color: #000000;
}
.page-breadcrumb {
    padding: 20px 20px;
    background-color: #1b48b2;
    color:#000000;
}
.page-breadcrumb .page-title {
    margin-bottom: 0;
    font-weight: 500;
    font-size: 21px;
    color: #ffffff;
}

.btn-primary, .btn-sm {
    background-color: #1b48b2 !important;
    border: #1b48b2 !important;
}

#main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin5], #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin5] {
    background: #1b48b2 !important;
}
.topbar .top-navbar .navbar-header .navbar-brand {
    display: flex;
    align-items: center;
    margin: 0;
    padding: 0 10px;
    justify-content: space-between;
}

	
.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover, .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    border: 1px solid #1b48b2 !important;
    background: #1b48b2;
    color: #fff !important;
}
form{
    margin-bottom:0;
}
.bu{
    font-size: 11px; !important
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
                                <img src="data:image/png;base64,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" alt="homepage" class="light-logo" style="height: auto; width: 69px;"/>
                                <!--<h2 style="height: auto; width: 92px;"><b>IIMNET</b></h2>-->
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
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
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
                        <?php if(isset($_SESSION['record_delete'])): ?>
                     <div class="col-sm-4 alert alert-danger alert-dismissible fade show container1">
        <strong>Success!</strong>  <?php echo   $_SESSION["record_delete"]; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
     <?php endif; ?>
<?php unset($_SESSION['record_delete']); ?>
   
   
   
    
    <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 5000);
    
    </script>
    
     <?php if(isset($_SESSION['record_update'])): ?>
                     <div class="col-sm-4 alert alert-success alert-dismissible fade show container1">
        <strong>Success!</strong>  <?php echo   $_SESSION["record_update"]; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
     <?php endif; ?>
<?php unset($_SESSION['record_update']); ?>
   
   
   
    
    <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 5000);
    
    </script>
     <b>  <?php echo   $_SESSION["login_user"]; ?>(Admin)</b>
              <button class="button btn-primary" style="margin-left:10px;"> <a href="logout.php" style="color:#ffffff;"> Logout</a></button>         
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       <?php include 'nav_menu.php' ?>
        <!-- ==========nav_menu.php==================================================== -->
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
                        <h4 class="page-title">Freelancing Details</h4>
                        
                         <!--<span class="blue-font">( Click on download button to the download file )</span>-->
                          <?php if(isset($_SESSION['error'])): ?>
                     <div class="col-sm-4 alert alert-danger alert-dismissible fade show container">
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
            
           <table id="example" class="table-striped"> 
             <thead>
                 


                <th>S.No</th>
                <th>View</th>
               <th>First Name</th>
             
                <th>File</th>
                <th>File Download</th>
                 <th class="hide">Link</th>
                <th>Status</th>
              
                <th>Confirm/Onhold/Hire/Reject</th>
                <th>Action</th>
                
              </thead>

              <tbody>
            


           

                  <?php
                       
            $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

            $sql = "SELECT * FROM iim_freelancing order by id desc";
            $result = mysqli_query($conn, $sql);

            $files = mysqli_fetch_all($result, MYSQLI_ASSOC);


                  
                  $i=1;
      foreach ($files as $file): ?>
    <tr>
    
     
      <td><?=$i++?></td>
          <td>
  <div class="btn-group" style="width:30px;"><a class="btn btn-primary btn_toggle" data-toggle="modal" href="#Modal_View_<?php echo $file['id']; ?>" ><i class="fa fa-eye" aria-hidden="true"></i></a>
  </div></td>
                 <td><?php echo $file['first_name']; ?></td>
           <td><?php echo $file['file_name']; ?></td>
          <td>
  <div class="btn-group">
  &nbsp;<a class="btn btn-primary" style="background-color:blue;width:30px;"  href="freelancing_file_download.php?filename=<?php echo $file['file_name'];?>"><i class="fa fa-download" aria-hidden="true"></i></a></div></td>
            <td class="hide">https://iimnet.com/dashboard/freelancing_file_download/<?php echo $file['file_name']; ?></td>
           <td><?php echo $file['status']; ?></td>
     
 
      
   </form>
<td>
   
                            <form method="post" action="freelancing_status_change" id="form" class="mb-0">
                                <input type="hidden" name="id" value="<?php echo $file['id']; ?>" />
                                 <input type="hidden" name="email" value="<?php echo $file['first_name']; ?>" />
                                  <input type="hidden" name="status" value="<?php echo $file['last_name']; ?>" />
                                   <input type="hidden" name="name" value="<?php echo $file['email']; ?>" />
                                   <input type="hidden" name="date" value="<?php echo $file['phone_number']; ?>" />
                                   <input type="hidden" name="time" value="<?php echo $file['status']; ?>" />
                                  
                                <input type="submit" id="one" class="btn btn-primary" value="Confirm" name="approved" style="min-width: 61px; padding: 7px 0px;"  />
                               <input type="submit" id="two" class="btn btn-info" value="OnHold" name="onhold"  />
                               <input type="submit" id="two" class="btn btn-success" value="Hire" name="hired" style="min-width:61px;" />
                               <input type="submit" id="two" class="btn btn-danger" value="Reject" name="rejected" style="min-width:61px;" />
                               
                               
                            </form>
                        </td>
     
     
 
      
   

                       
                        
                       
                         <td>
                            <a class="btn btn-primary btn_toggle edit br1 " data-toggle="modal" style="width: 31px; padding: 7px 0px; " href="#Modal_Edit_<?php echo $file['id']; ?>" ><i class="fa fa-edit"></i></a>
			
		
				<a href="freelancing-delete.php?id=<?php echo $file['id']; ?>" class="btn btn-danger btn-sm1 " style="width:28px; padding: 6px 0px; "><i class="fa fa-trash"></i></a>
                        </td>
    </tr>
    
    
    <div id="Modal_View_<?php echo $file['id']; ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content modal-lg">
          <div class="modal-header">
            <h4 class="modal-title">View  Details</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true" style="color:#000000;">&times;</span>
                    </button>
          </div>
          <div class="modal-body">
           
              <div class="row">
        <div class="col-sm-12">
             <div class="form-group">
            <label for="" style="color:black;">First Name</label>
           
            <input type="text" name="first_name" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['first_name']; ?>" disabled>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Last Name</label>
           
            <input type="text" name="last_name" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['last_name']; ?>" disabled>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Email</label>
           <input type="text" name="email" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['email']; ?>" disabled>
          </div>
          
           <div class="form-group">
            <label for="" style="color:black;">Phone </label>
            <input type="text" name="phone_number" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['phone_number']; ?>" disabled>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">City</label>
            <input type="text" name="city" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['city']; ?>" disabled>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Freelancing</label>
           <input type="text" name="freelancing" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['freelancing']; ?>" disabled>
          </div>
           <div class="form-group">
            <label for="" style="color:black;"> Freelancing Type</label>
            <input type="text" name="freelancing_type" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['freelancing_type']; ?>" disabled>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Start Date</label>
            <input type="text" name="start_date" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['start_date']; ?>" disabled>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">End Date</label>
            <input type="text" name="end_date" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['end_date']; ?>" disabled>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Brief description about yourself</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['answer']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Brief description about dream internship</label>
            <input type="text" name="answer1" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['answer1']; ?>" disabled>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Internship Position</label>
            <input type="text" name="position" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['position']; ?>" disabled>
          </div>
         
         
            <div class="form-group">
            <label for="" style="color:black;">Dropbox, Google Drive link</label>
            <input type="text" name="drive_link" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['drive_link']; ?>" disabled>
          </div>
          
          <div class="form-group">
            <label for="" style="color:black;">Status</label>
            <input type="text" name="status" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['status']; ?>" disabled>
          </div>
         
        
          
          

         
          
          
      
      </div>
          
          </div>
        </div>
      </div>
    </div>
</div>
  
<div id="Modal_Edit_<?php echo $file['id']; ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content modal-lg">
          <div class="modal-header">
            <h4 class="modal-title">Get Help Edit  Details</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true"  style="color:#000000;">&times;</span>
                    </button>
          </div>
          <div class="modal-body">
            <form method="post" action="freelancing-update" id="form">
               <div class="row">
        <div class="col-sm-12">
             <div class="form-group">
            <label for="" style="color:black;">First Name</label>
           <input type="hidden" name="id" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['id']; ?>" >
            <input type="text" name="first_name" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['first_name']; ?>" >
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Last Name</label>
           
            <input type="text" name="last_name" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['last_name']; ?>" >
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Email</label>
           <input type="text" name="email" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['email']; ?>" >
          </div>
          
           <div class="form-group">
            <label for="" style="color:black;">Phone </label>
            <input type="text" name="phone_number" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['phone_number']; ?>" >
          </div>
           <div class="form-group">
            <label for="" style="color:black;">City</label>
            <input type="text" name="city" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['city']; ?>" >
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Freelancing</label>
           <input type="text" name="freelancing" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['freelancing']; ?>" >
          </div>
           <div class="form-group">
            <label for="" style="color:black;"> Freelancing Type</label>
            <input type="text" name="freelancing_type" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['freelancing_type']; ?>" >
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Start Date</label>
            <input type="text" name="start_date" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['start_date']; ?>" >
          </div>
           <div class="form-group">
            <label for="" style="color:black;">End Date</label>
            <input type="text" name="end_date" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['end_date']; ?>" >
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Brief description about yourself</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" ><?php echo $file['answer']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Brief description about dream internship</label>
             <textarea name="answer1" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" ><?php echo $file['answer1']; ?></textarea>
           
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Internship Position</label>
            <input type="text" name="position" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['position']; ?>" >
          </div>
         
         
            <div class="form-group">
            <label for="" style="color:black;">Dropbox, Google Drive link</label>
            <input type="text" name="drive_link" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['drive_link']; ?>" >
          </div>
          
          <div class="form-group">
            <label for="" style="color:black;">Status</label>
            <input type="text" name="status" class="form-control" id="help-you" placeholder=""   value="<?php echo $file['status']; ?>" >
          </div>
        
          <div class="form-group">
           <input type="submit" id="one" class="btn btn-primary" value="Update" name="Update" style="width: 128px; padding: 7px;"  />
          </div>
          

         
          
          
      
      </div>
          
          </div>
          </form>
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