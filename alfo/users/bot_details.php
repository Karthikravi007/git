<?php
include('../admin/db.php');
include('header.php');
error_reporting(0);
?>
<style>
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

</style>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <section style="margin-top:5%;margin-bottom:5%;">
    <div class="container">
    <?php
$result = $db_handle->runQuery("select * from bot_course where id='".$_GET['id']."'");
foreach($result as $row) { ?>
<div class="row">
    <div class="col-md-6">
        <img src="./assets/bitcoin.jpg" width="400px" height="300px"> 
</div>
<div class="col-md-6">
  <h5 class="details">Course Category : <span>
    <?php
  // echo "select * from category where id='".$row['course_category']."'";
$res = $db_handle->runQuery("select * from bot_category where id='".$row['course_category']."'");
foreach($res as $r) { echo $r['category']; } ?>
</span></h5>
  <h5 class="details">Course Title : <span><?php echo $row['course'];?></span></h5>
  <h5 class="details">Course Price : <span><?php echo $row['price'];?></span></h5>
  <h5  class="details">Course Details : <span><?php echo $row['details'];?></span></h5>
  <h5  class="details">Course Details : <span><?php echo $row['description'];?></span></h5>
  <a href="buy.php?id=<?php echo $row['id']; ?>"><button style="margin-top:2%;padding-left: 20px;padding-right: 20px;font-weight: 500;" 
  type="button" class="btn btn-primary">Buy</button></a>

</div>
<?php }?>
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