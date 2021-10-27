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
$result = $db_handle->runQuery("select * from `bank_details`");
//echo "select * from `bank_details`";exit;
foreach($result as $row) { ?>
<div class="col-md-6">
<h5 class="details" style="margin-top:10%;font-family: sans-serif;font-size: 18px;">Account No : <span><?php echo $row['account_no'];?></span></h5>
<!--<h5 class="details">Bank Name : <span><?php echo $row['bank_name'];?></span></h5>-->
 <h5  class="details" style="margin-top:10%;font-family: sans-serif;font-size: 18px;">City : <span><?php echo $row['city'];?></span></h5>
</div>
<div class="col-md-6">
<h5  class="details" style="margin-top:10%;font-family: sans-serif;font-size: 18px;">IFSC Code: <span><?php echo $row['ifsc_code'];?></span></h5>
  <h5  class="details" style="margin-top:10%;font-family: sans-serif;font-size: 18px;">City : <span><?php echo $row['city'];?></span></h5>
</div>
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
            <form method="post" action="investoradd.php" enctype="multipart/form-data">
              <div class="row">
                <div class="col">
                  <label for="validationServer05">Aadhar No</label>
                  <input name="aadhar" minlength="12" maxlength="12" type="text" class="form-control" placeholder="Aadhar Number" required>
                </div>
                <div class="col">
                  <label for="validationServer05">Pan No</label>
                  <input name="pan" minlength="10" maxlength="10" type="text" class="form-control" placeholder="Pan Number" required>
                </div>
              </div>
              <div class="row" style="margin-top: 5%;">
                <div class="col">
              
                
                  <label for="validationServer05">Investment Amount</label>
                  <input  name="amount" id="amt" type="text" oninput="invests()" class="form-control" placeholder="Investment Amount" required>
                  <input type="text" name="commissioin" value="" id="commission">
                  <input type="hidden" name ="UserId" value="<?php echo $_SESSION['alfouser_id']?>" id="userID">
                    <p>Investment Commission Amount : <span  style="color: #0d8b0d;font-weight:600" id="value">₹<?php echo $percent ;?></span> </p>
                </div>
                <div class="col">
                  <label for="validationServer05">Name</label>
                  <input name="name" type="text" class="form-control" placeholder="Name" required>
                </div>
              </div>
              <div class="row" style="margin-top: 5%;">
                <div class="col">
                  <label for="validationServer05">Proof</label>
                  <div class="custom-file">
                    <input name="image" type="file" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>                </div>
                <div class="col">
                  <label for="validationServer05">Mobile </label>
                  <input name="mobile" minlength="10" maxlength="10" type="text" class="form-control" placeholder="Mobile No" required>
                </div>
              </div>
               <div class="row" style="margin-top: 5%;">
                <div class="col">
                  <label for="validationServer05">Referal Code</label>
                  <?php
            
            // $sq = $db_handle->runQuery("SELECT *  FROM `registration` where id='".$_SESSION['alfouser_id']."'  ");
            //  echo "SELECT *  FROM `registration` where id='".$_SESSION['alfouser_id']."'  ";exit;
            // foreach($sq as $user){
            // $refferalId=$user['refferal'];
            // }
            ?>
                  <input name="referal" type="text" class="form-control" required>
                     <?php if($_SESSION['status'] != null){
                    echo $_SESSION['status'];
                    unset ($_SESSION['status']);
                  }  ?>
                </div>
                
                              
                <div class="col">
                    <label for="inputState">Packages</label>
                  <select name="package" id="inputState" class="form-control" required>
        <option type="hidden" selected>Choose Your Package</option>
        <option>Short Term Plan</option>
        <option>Mid Term Plan</option>
        <option>Long Term Plan</option>
      </select>
              </div>
           </div>
            <button style="margin-top:2%;float: right;" type="submit" name="upload" class="btn btn-primary">Submit</button>
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
<script>
 function invests(){
  var invest = document.getElementById('amt').value;
  var percentToGet = 5;
  var percentInDecimal = percentToGet / 100;
  var percent = percentInDecimal * invest;


document.getElementById('value').innerHTML ="₹" + percent;
//document.getElementById('values').innerHTML ="₹" + percent;
document.getElementById('commission').value = percent;

 }
 
//  document.getElementById("display").style.display = "none";
</script>
  </body>
  <!-- END: Body-->

</html>