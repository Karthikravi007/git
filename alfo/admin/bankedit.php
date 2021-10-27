<?php
include('db.php');
include('header.php');
error_reporting(0);
?>  

<!-- END: Main Menu-->
    
    <section style="padding-top:5%;">
        <h4 class="text-center">Contant Change</h4>
    <div class="card" style="width: 50%;padding: 13px;margin-left: 24%;">
    <?php
    //echo $_GET['id'] ;
$result = $db_handle->runQuery("select * from bank_details where id='".$_GET['id']."' ");
foreach($result as $row) { ?>
<form  id="signupform" action="bankupdate.php" method="post" enctype="multipart/form-data">
   <div class="form-group">
    <label for="exampleInputPassword1">Account No</label>
    <input type="text" class="form-control" name="edit_account" value="<?php echo $row['account_no'];?>" required id="exampleInputPassword1" placeholder="Account No">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Bank Name</label>
    <input type="text" class="form-control" name="edit_bank" value="<?php echo $row['bank_name'];?>" required id="exampleInputPassword1" placeholder="Bank Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">IFSC Code</label>
    <input type="text" class="form-control" name="edit_ifsc" value="<?php echo $row['ifsc_code'];?>" required id="exampleInputPassword1" placeholder="IFSC Code">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">City</label>
    <input type="text" class="form-control" name="edit_city" value="<?php echo $row['city'];?>" required id="exampleInputPassword1" placeholder="City">
  </div>
  <input type="hidden" name="update_id" value="<?php echo $_REQUEST['id'];?>">
  <button style="margin-top:2%;" name="upload" type="submit" class="btn btn-primary">Submit</button>
</form>
<?php } ?>
</div>

</section>
    <!-- END: Content-->


    <footer class="footer footer-static footer-light navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2021  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">Alfo</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">

        </ul>
      </div>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
  
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