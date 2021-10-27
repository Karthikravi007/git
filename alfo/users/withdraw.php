<?php
include('../admin/db.php');
session_start();
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
  </style>
  <!-- END: Head-->

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <section>
      <div class="container" style="margin-top: 5%;margin-bottom: 5%;">
        <div class="row">
          <div class="col-md-6">
              <div class="user">
              <h4 class="text-center">PAYMENT DETAILS</h4>
              <hr>
              
            </div>
            <div class="row" style="margin-top:10%">
            <?php 
              $store = $_SESSION['alfouser_id'];
  $result = $db_handle->runQuery("select * from `refreal` WHERE  `referedId` = '$store'");

$referal =0;
foreach($result as $key=>$row)
{
   $referal+= $row['commision'];
} { ?>

            <h5>Current balance: <span><?php echo $referal;?></span></h5>
</div>

<?php } ?>
<?php
                
                // $invest =$_POST['amount'];
               
                // $percentToGet = 5;
                // $percentInDecimal = $percentToGet / 100;
                // $percent = $percentInDecimal * $invest;
                // echo $percent;
                  ?>
          </div>
        
          <div class="col-md-6">
            <div class="user">
              <h4 class="text-center">USER PROFILE UPLOAD</h4>
              <hr>
            </div>
            <form method="post" action="../admin/withdarwinsert.php" enctype="multipart/form-data">
              <div class="row">
                <div class="col">
                  <label for="validationServer05">Bank Name</label>
                  <input name="Bank_Name" type="text" class="form-control" placeholder="Bank Name" required>
                </div>
                <div class="col">
                  <label for="validationServer05">Account Number</label>
                  <input name="Account_Number" minlength="16" maxlength="16" type="text" class="form-control" placeholder="Account Number" required>
                </div>
              </div>
              <div class="row" style="margin-top: 5%;">
                <div class="col">
              
                
                  <label for="validationServer05">Reenter Number</label>
                  <input  name="Reenter_Number" minlength="16" maxlength="16" id="amt" type="text" class="form-control" placeholder="Reenter Number" required>
                </div>
                <div class="col">
                  <label for="validationServer05">IFSC Code</label>
                  <input name="ifsc" type="text" class="form-control" placeholder="IFSC Code" required>
                </div>
              </div>
<button style="margin-top:2%;float: right;margin-right:24px;" type="submit" name="upload" class="btn btn-primary">submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- END: Content-->


    <footer class="footer footer-static footer-light navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2022  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">ALFO</a></span>
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