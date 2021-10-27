<?php
include('../admin/db.php');
session_start();
include('header.php');
error_reporting(0);

?>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
   .center{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .nav-item{
        margin-right: 10px;
    border: none;
    }
    .nav-link{
    border: none !important;
    
    color: #000;
    font-weight: 500;
    }
    .withdraw{
        border: none;
    padding: 6px;
    float: right;
    background: #fec807;
    color: #fff;
    border-radius: 2px 2px 2px 2px;
    font-size: 14px;
    font-family: 'Muli';
    letter-spacing: 1px;
    font-weight: 600;
    }
</style>
<body>
    <section>
         <div class="container" style="padding-top: 5%;">
    <div class="card" style="padding: 10px;">
        <h5>Profile</h5>
            <hr>
        <div class="row">
             <?php
            
            $sq = $db_handle->runQuery("SELECT *  FROM `registration` where id='".$_SESSION['alfouser_id']."'  ");
            // echo "SELECT *  FROM `registration` where id='".$_SESSION['ALFOuser_id']."'  ";exit;
            foreach($sq as $user){
               $username= $user['name'];
               $useremail=$user['email'];
               $userreferal=$user['refferal'];
                
            }
            ?>
    <div class="col-md-4">
        <div style="padding: 17px;" class="card">
            <img src="img/user.png" width="20%" class="center">
            <h5 class="center"><h5 class="center"><?php echo $username;?></h5></h5>
            <hr>
            <div class="user">
                <p>Username <span style="float: right;"><?php echo $username;?></span></p>
                <hr>
                <!--<p>Contact No <span style="float: right;">877576787</span></p>-->
                <!--<hr>-->
                <p>Mail <span style="float: right;"><?php echo $useremail;?></span></p>
                <hr>
                <!--<p>Account No <span style="float: right;">676354347364</span></p>-->
                <!--<hr>-->
                <!--<p>IFSC code <span style="float: right;">5656756</span></p>-->
                <!--<hr>-->
                <p>Referal Code <span style="float: right;"><?php echo $userreferal; ?></span></p>
                <hr>
                <button class="withdraw">With draw</button>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">User Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Update</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card text-center">
                    <div class="card-header">
                      About Me
                    </div>
                    <div style="text-align: initial;" class="card-body">
                        <i class="fa fa-envelope" aria-hidden="true"> <span>Email</span></i>
                        <p>admin@gmail.com</p>
                        <hr>
                        <i class="fa fa-birthday-cake" aria-hidden="true">  <span>Date Of Birth</span></i>
                        <p>01-01-1970</p>
                        <hr>
                        <i class="fa fa-id-card" aria-hidden="true">  <span>Aadhar card</span></i>
                        <p>Not updated</p>
                        <hr>
                    </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <form method="post" action="profilesave.php" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Father Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" class="form-control form-control-sm"  id="colFormLabelSm" placeholder="Father Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Date of Birth</label>
                        <div class="col-sm-10">
                          <input type="text" name="dob" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Aadhar Card</label>
                        <div class="col-sm-10">
                          <input type="text" name="aadhar" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Aadhar">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Address</label>
                        <div class="col-sm-10">
                          <input type="text" name="address" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Address">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Zip Code</label>
                        <div class="col-sm-10">
                          <input type="text" name="zip" class="form-control form-control-sm" id="colFormLabelSm" placeholder="zipcode">
                        </div>
                        
                      </div>
                      <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">City</label>
                        <div class="col-sm-10">
                          <input type="text" name="city" class="form-control form-control-sm" id="colFormLabelSm" placeholder="City">
                        </div>
                        
                      </div>
                      <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </div>
          </div>
    </div>
        </div>
    </div>
    </div>
    </section>

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