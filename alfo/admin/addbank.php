<?php
include('db.php');
include('header.php');
error_reporting(0);
?>    

    <section style="padding-top:5%;">
        <h4 class="text-center">Bank Details</h4>
    <div class="card" style="width: 50%;padding: 13px;margin-left: 24%;">
<form id="signupform"  action="banksave.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputPassword1">Account No</label>
    <input type="text" class="form-control" name="accountno" id="exampleInputPassword1" placeholder="Course Title">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Bank Name</label>
    <input type="text" class="form-control" name="bankname" id="exampleInputPassword1" placeholder="Course Price">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">IFSC Code</label>
    <input type="text" class="form-control" name="ifsccode" id="exampleInputPassword1" placeholder="Course Details">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">City</label>
    <input type="text" class="form-control" name="city" id="exampleInputPassword1" placeholder="Course Description">
  </div>
  <button style="margin-top:2%;float: right;" name="upload" type="submit" class="btn btn-primary">Submit</button>
</form>
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