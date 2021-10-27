<?php
include('db.php');
include('header.php');
error_reporting(0);
if($_GET['delete']) { 

  $id = $_GET['delete'];

 $res = $db_handle->runQuery("DELETE FROM bot_course WHERE id=$id");


 echo '<script>alert(" Deleted successfully"); 
 window.location.href="bot_course.php";</script>';

 }
?>
<style>
      .table {
    width: 87%;
    margin-bottom: 1rem;
    color: #212529;
     margin-left: auto;
  margin-right: auto;
}
.button{
    border: none;
padding: 6px;
    padding-right: 6px;
    padding-left: 6px;
padding-left: 23px;
padding-right: 23px;
background: #9b7bff;
border-radius: 4px 4px 4px 4px;
float: right;
color:#fff;
font-weight:600;
}
</style>
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
						    <a href="bot_add1.php"><button class="button">ADD</button></a>
			                <table class="table table-striped table-bordered sourced-data">
							        <thead>
							            <tr>
							                <th>S.No</th>
							                <th>Category</th>
							                <th>Course Title</th>
							                <th>Price</th>
							                <th>Details</th>
                              <th>description</th>
                              <th>image</th>
                              <th>Action</th>
							            </tr>
							        </thead>
                      <?php
$result = $db_handle->runQuery("select * from bot_course");
foreach($result as $row) { ?>
                        <tr>
                           <th><?php echo $row['id'];?></th>
							                <th>
                                
                             <?php 
                           
                           $res = $db_handle->runQuery("select * from bot_category where id='".$row['course_category']."'");
                           foreach($res as $r) {  
                           
                           echo $r['category']; 
                           } ?> 
                              
                              
                              </th>
							                <th><?php echo $row['course'];?></th>
							                <th><?php echo $row['price'];?></th>
							                <th><?php echo $row['details'];?></th>
                              <th><?php echo $row['description'];?></th>
                              <th><img src="<?php echo $row['image'];?>" style="height:50px;width:50px;"></th>
                              <th><a href="bot_edit1.php?id=<?php echo $row['id']; ?>"><i style="font-size: 20px;padding-right: 10px;" class="ft-edit"></i></a> 
                              <a href="?delete=<?php echo $row['id'];?>"><i style="font-size: 20px;" class="ft-trash-2"></i></a></th>
                    
                    
                            </tr>





                      <?php } ?>
							        <tfoot>
							            <tr>
							               <th>S.No</th>
							                <th>Category</th>
							                <th>Course Title</th>
							                <th>Price</th>
							                <th>Details</th>
                              <th>description</th>
                              <th>image</th>
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