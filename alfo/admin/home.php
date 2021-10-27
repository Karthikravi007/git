<?php
include('db.php');
include('header.php');
error_reporting(0);
?>  
<style>
 main{
    margin-top: 85px;
    padding: 2rem 1.5rem;
    background: #f1f5f9;
    min-height: calc(100vh - 90px);
}

.cards{
    display: grid;
    grid-template-columns: repeat(4,1fr);
    grid-gap: 2rem;
    margin-top: 1rem;
}
.card-single:hover{
    background: #fec807 ;
    color: #000;
}

.card-single{
    display: flex;
    justify-content: space-between;
    background: #fff;
    padding: 3rem;
    border-radius: 2px;
    font-weight: 600;
    font-size: 16px;
    color: #000;

}
.card-single:last-child {
    background: #fec807 ;
    color: #000  !important;
    font-size: 18px;
    font-weight: 600;
}
.card-single:last-child h1 .card-single:last-child div:first-child span, .card-single:last-child div:last-child span {
    color: #000 !important;
}
.card-single:hover{
    color: #000;
}
.card-single div:last-child span{
    color: #000;
    font-size: 3rem;
}
.card-single div:last-child span:hover{
    color: #000;
    font-size: 3rem;
}
.card-single span:first-child{
    color: #000;
}
.card-single:last-child{
    background: #fec807 ;
    color: #fff;
    font-size: 18px;
    font-weight: 600;
}
.card-single:last-child h1
.card-single:last-child div:first-child span,
.card-single:last-child div:last-child span{
    color: #fff;
}

</style>
    <!-- END: Main Menu-->

    <!-- BEGIN: Customizer-->
<section>
  <main>
    <div class="cards">
          <?php
$result = $db_handle->runQuery("SELECT id FROM `registration`");
$user =0;
foreach($result as $key=>$value)
{
   $user = $value['id'];
}
//echo $sum;
    ?>
        <div class="card-single">
    <div>
        <h1><?php echo $user;?></h1>
        <span> Total User</span>
    </div>
    <div>
        <span class="ft-user-plus"></span>
    </div>
    </div>
<!--    <div class="card-single">-->
<!--<div>-->
<!--    <h1>10000+</h1>-->
<!--    <span>Course Income-->
<!--</span>-->
<!--</div>-->
<!--<div>-->
<!--    <span class="ft-book"></span>-->
<!--</div>-->
<!--</div>-->
<!--<div class="card-single">-->
<!--<div>-->
<!--<h1>200+</h1>-->
<!--<span> Signal Income</span>-->
<!--</div>-->
<!--<div>-->
<!--<span class="ft-bookmark"></span>-->
<!--</div>-->
<!--</div>-->
<!--<div class="card-single">-->
<!--<div>-->
<!--    <h1>100</h1>-->
<!--    <span>Bot Income-->
<!--</span>-->
<!--</div>-->
<!--<div>-->
<!--    <span class="ft-book"></span>-->
<!--</div>-->
<!--</div>-->
  <div class="card-single">
        <?php
$result = $db_handle->runQuery("SELECT amount FROM `investor`");
$items =0;
foreach($result as $key=>$value)
{
   $sum+= $value['amount'];
}
//echo $sum;
    ?>
<div>
  <h1><?php echo $sum;?></h1>
  <span>Investment income</span>
</div>
<div>
  <span class="ft-bar-chart"></span>
</div>
</div>
<div class="card-single">
<div>
<h1><?php echo $sum;?></h1>
<span>Total Investment
</span>
</div>
<div>
<span class="ft-user"></span>
</div>
</div>
</div>
<div class="cards" style="margin-top: 3rem;">
<!--  <div class="card-single">-->
<!--<div>-->
<!--  <h1>150+</h1>-->
<!--  <span>Investment income</span>-->
<!--</div>-->
<!--<div>-->
<!--  <span class="ft-bar-chart"></span>-->
<!--</div>-->
<!--</div>-->
<!--<div class="card-single">-->
<!--<div>-->
<!--<h1>200+</h1>-->
<!--<span>Total Investment-->
<!--</span>-->
<!--</div>-->
<!--<div>-->
<!--<span class="ft-user"></span>-->
<!--</div>-->
<!--</div>-->
<!--<div class="card-single">-->
<!--<div>-->
<!--<h1>20+</h1>-->
<!--<span>Total Amount</span>-->
<!--</div>-->
<!--<div>-->
<!--<span class="ft-file"></span>-->
<!--</div>-->
</div>
<!-- <div class="card-single">
<div>
<h1>251+</h1>
<span>Withdraw Request</span>
</div>
<div>
<span class="ft-credit-card"></span>
</div>
</div> -->
</div>
<div class="recent-grid">
<div class="project">
    <!-- <div class="card">
        <div class="card-header">

        </div>
    </div> -->
</div>
<div class="customers">

</div>
</div>
</main>
</section>
    <!-- End: Customizer-->


    <footer class="footer footer-static footer-light navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2021  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">ALFOTRO</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">

        </ul>
      </div>
    </footer>
    <!-- END: Footer-->


   
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