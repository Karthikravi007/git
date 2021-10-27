<?php
include('db.php');
include('header.php');
error_reporting(0);
if($_GET['decline']) { 

  $id = $_GET['decline'];

 $res = $db_handle->runQuery("update  `investor` set `status`='2' WHERE id='$id'");


 echo '<script>alert(" decline successfully"); 
 window.location.href="investor.php";</script>';

 }
 if($_GET['accept']) { 

  $id = $_GET['accept'];

 $res = $db_handle->runQuery("update  `investor` set `status`='1' WHERE id='$id'");


 echo '<script>alert(" Accepted successfully"); 
 window.location.href="investorcom.php";</script>';

 }
?>  
<!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">ALFOO Data Table</h3>
          </div>
        </div>
        <div class="content-body"><!-- HTML (DOM) sourced data -->
<section id="html">
	<div class="row">
	    <div class="col-12">
	        <div class="card">
	            
	            <div class="card-content  collapse show">
	                <div class="card-body card-dashboard">
						<div class="table-responsive">
			                <table class="table table-striped table-bordered sourced-data">
							        <thead>
							            <tr>
							                <th>id</th>
							                <th>Aadhar</th>
							                <th>Pan</th>
							                <th>Amount</th>
							                <th>Name</th>
                              <th>Proof</th>
                              <th>Mobile</th>
							                <th>Action</th>
							            </tr>
							        </thead>
                      <?php 
$result = $db_handle->runQuery("SELECT * from `investor` where `status` = '0' ");
foreach($result as $row) { ?>
                        <tr>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['Aadhar'];?></td>
                          <td><?php echo $row['pan'];?></td>
                          <td><?php echo $row['amount'];?></td>
                          <td><?php echo $row['name'];?></td>
                          <th><img src="../img/<?php echo $row['proof'];?>" style="height:50px;width:50px;"></th>
                          <td><?php echo $row['mobile'];?></td>
                          <th>
                                <a href="?accept=<?php echo $row['id'];?>"><button class="accept btn btn-primary">Accept</button> </a>
                                <a href="?decline=<?php echo $row['id'];?>"><button class="decline btn btn-danger">Decline</button></a>
                               </th>
                      </tr>
                      <?php } ?>
							        <tfoot>
                      <tr>
							                <th>id</th>
							                <th>Aadhar</th>
							                <th>Pan</th>
							                <th>Amount</th>
							                <th>Name</th>
                              <th>Proof</th>
                              <th>Mobile</th>
							                <th>Action</th>
							            </tr>
							        </tfoot>
							</table>
						</div>
					</div>
	            </div>
	        </div>
	    </div>
	</div>
</section>
<!--/ HTML (DOM) sourced data -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <footer class="footer footer-static footer-light navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2021  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">ALFOO</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">

        </ul>
      </div>
    </footer>

  
    <!-- BEGIN: Vendor JS-->
    <script src="./app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
    <script src="./app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="./app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>  
      <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="./app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="./app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="./app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="./app-assets/js/core/app.min.js" type="text/javascript"></script>
    <script src="./app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
    <script src="./app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="./app-assets/js/scripts/tables/datatables-extensions/datatables-sources.min.js" type="text/javascript"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

</html>