<?php
include('db.php');
include('header.php');
error_reporting(0);
?> 
<style>
.card{
    padding: 40px;
    margin-top: 40px;
}
.lable{
    font-size: 15px;
    color: #000;
    font-weight: 500;
}
.button{
    padding: 7px;
    padding-left: 15px;
    padding-right: 15px;
    border: none;
    background: yellow;
    color: #000;
    border-radius: 4px 4px 4px 4px;
    font-weight: 600;
    margin: 0;
    position: absolute;
    /* top: 50%; */
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, 0%);
}
</style>
<section>
<div class="container">
<div class="card">
<form>
<div class="form-group">
    <label class="lable" for="formGroupExampleInput">Category:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <div class="form-group">
    <label class="lable" for="exampleFormControlTextarea1">Comments:</label>
    <textarea class="form-control" placeholder="Typing...." id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
  <div class="btn">
      <button class="button" float-right>Submit</button>
  </div>
  </form>
</div>
</div>
</section>


<footer class="footer footer-static footer-light navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2021  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">AXTRO</a></span>
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