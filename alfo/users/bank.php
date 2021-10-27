<?php
include('../admin/db.php');
include('header.php');
error_reporting(0);
?>

  <style>
    .text-center{
text-align: center;
font-size: 20px;
font-weight: 600;
letter-spacing: 0.5px;
    }
    hr{
      width: 28%;
border-color: #7796ff;
border-width: 3px;
    }
    /* .button{
      margin: 0;
position: absolute;
top: 62%;
left: 50%;
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -62%);
padding: 10px;
border: none;
background: #5caafe;
font-size: 14px;
border-radius: 4px 4px 4px 4px;
font-weight: 600;
color: #fff;
    } */
    .details{
  padding:15px;
  color:#000066;
  font-family: "Times New Roman", Times, serif;
  font-weight: 900;
  font-size: 18px;

}
.details span{
  color:#000;
  font-weight:600;
}
.text-center{
text-align: center;
font-size: 20px;
font-weight: 600;
letter-spacing: 0.5px;
    }
    hr{
      width: 24%;
border-color: #7796ff;
border-width: 3px;
    }
    .user{
      margin-left: -90px;
    }
  </style>
  <!-- END: Head-->

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <section>
<div class ="container">
<div class="row">
<div class="col-md-4">
<img src="./assets/logo.png" width="77%" height="77%" style="margin-top:50px;">
</div>
<div class="col-md-8" style="margin-top:5%;">
<div class="user">
              <h4 class="text-center">PAYMENT DETAILS</h4>
              <hr>
            </div>
<div class="row">
<div class="col-md-6">
<h5 class="details">Account No : <span>9876543567278</span></h5>
<h5 class="details">Bank Name : <span>Bank of Baroda</span></h5>
</div>
<div class="col-md-6">
<h5  class="details">IFSC Code: <span>375473648</span></h5>
  <h5  class="details">City : <span>Dindigul</span></h5>
</div>
</div>
<div class="user">
              <h4 class="text-center">COURSE DETAILS</h4>
              <hr>
            </div>
<div class="row">
<div class="col-md-6">
<h5 class="details"> Course Category: <span>Bitcoin</span></h5>
<h5 class="details">Course Name : <span>Mini Bitcoin</span></h5>
</div>
<div class="col-md-6">
<h5  class="details">Course Price: <span>2000</span></h5>
  <h5  class="details">Course Details : <span>Online Investment</span></h5>
</div>
</div>
</div>
</div>
</div>
    </section>
    <!-- END: Content-->


    <footer class="footer footer-static footer-light navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2022  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">ALFOTRO</a></span>
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