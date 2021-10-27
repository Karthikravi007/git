<?php
include('../admin/db.php');
include('header.php');
error_reporting(0);
?>
<style>
  .category{
    padding: 7px;
    text-align: center;
    color: #000;
    font-size: 19px;
    font-weight: 600;
  }
  .button{
    margin-left: 80px;
    background: #f5a315;
    padding: 3px;
    border: none;
    margin-bottom: 6px;
    font-size: 17px;
    color: #fff;
    font-weight: 700;
    padding-left: 20px;
    border-radius: 2px 2px 2px 2px;
    padding-right: 20px;
  }
</style>
   <section style="margin-top:5%;margin-bottom:5%;">
<div class="container">
<div class="row">
                      <?php
$result = $db_handle->runQuery("select * from bot_category");
foreach($result as $row) { ?>
<div class="col-md-3">
<div class="card">
<img src="../admin/<?php echo $row['image'];?>" style="width: 253px;;height:200px;">
<p class="category"><?php echo $row['category'];?></p>
<a href="bot_view.php?id=<?php echo $row['id'];?>"><button class="button">View</button></a>
</div>

</div>
<?php } ?>

</div>

</div>
</section>

    <footer class="footer footer-static footer-light navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2022  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">ALFOO</a></span>
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