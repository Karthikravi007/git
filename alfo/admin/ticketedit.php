<?php
include('db.php');
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

    <?php
$result = $db_handle->runQuery("select * from support where id='".$_GET['id']."' ");
foreach($result as $row) { ?>


<form action="replay_update.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    
                </div>
                 <div class="col-md-8">
                    <div class="card">

                <input type="hidden" name="id" value=<?php echo $_GET ['id']; ?>> 
                <h4 >Subject</h4>
                <hr style="width: 78px; margin-top:auto;  border: 1px solid #ff0; background-color: #ff0;  ">
          
                <h6 class="mt-3" style="font-size: 20px; "  > <?php echo $row['subject'];?></h6>               
                <hr>
                 <h4>Description</h4>
                 <hr style="width: 122px; margin-top:auto; border: 1px solid #ff0; background-color: #ff0;  ">
                 <h6 class="mt-3"  style="font-size: 20px;" >  <?php echo $row['description'];?></h6>
               
                 <hr>
                        
          
                               <div class="form-group">
    <label for="exampleFormControlTextarea1">Reply 
      <span class="text-danger" >*</span></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="reply" placeholder="Type..." rows="2" required></textarea>
    <button name="upload"> Submit</button>
    <?php } ?>     
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
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2021  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">ALFOO</a></span>
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