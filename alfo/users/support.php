<?php
include('../admin/db.php');
include('header.php');
error_reporting(0);

?>
<style>
    .card{
            padding: 38px;
    margin-top: 5%;
    }
    button{
        margin-top: 18px;
    border: none;
    /* padding-left: 16px; */
    padding-right: 12px;
    padding: 6px 16px 7px;
    background: yellow;
    color: #000;
    font-weight: 600;
        float: right;
    }
</style>




    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    
                </div>
                 <div class="col-md-8">
                    <div class="card">
                        <form action="support_save.php" method="POST">
                              <label for="validationDefault01">Subject</label><input type="text" name="subject"class="form-control" id="validationDefault01" placeholder="Subject" value="" required>
                               <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" placeholder="Type..." rows="5"></textarea>
    <button>Submit</button>
  </div>
                        </form>
                    </div>
                </div>
                 <div class="col-md-2">
                    
                </div>
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