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
    .btn{
      padding: 6px;
    padding-left: 15px;
    padding-right: 15px;
    font-size: 15px;
    color: #000;
    font-weight: 600;
    background: yellow;
    border-radius: 2px 2px 2px 2px;
    border: none;
    margin-bottom: 15px;
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
    .files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}
  </style>
  <!-- END: Head-->

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <section>
<div class ="container">
<div class="row">
<div class="col-md-4">
<img src="./assets/logo.png" width="100%" height="77%" style="margin-top:50px;">
</div>
<div class="col-md-8" style="margin-top:5%;">
<div class="user">
              <h4 class="text-center">PAYMENT DETAILS</h4>
              <hr>
            </div>
<div class="row">
<?php 
$result = $db_handle->runQuery("select * from bank_details");
foreach($result as $row) { ?>
<div class="col-md-6">
<h5 class="details">Account No : <span><?php echo $row['account_no'];?></span></h5>
<h5 class="details">Bank Name : <span><?php echo $row['bank_name'];?></span></h5>
</div>
<div class="col-md-6">
<h5  class="details">IFSC Code: <span><?php echo $row['ifsc_code'];?></span></h5>
  <h5  class="details">City : <span><?php echo $row['city'];?></span></h5>
</div>
</div>
<?php } ?>
<div class="user">
              <h4 class="text-center">COURSE DETAILS</h4>
              <hr>
            </div>
<div class="row">
<?php
$result = $db_handle->runQuery("select * from course where id='".$_GET['id']."'");
foreach($result as $row) { ?>
<div class="col-md-6">
<input type="hidden"  id="txt_category" name="txt_category" value="<?php echo $row['course_category'];?>">
<h5 class="details"> Course Category: <span>
<?php
  // echo "select * from category where id='".$row['course_category']."'";
$res = $db_handle->runQuery("select * from category where id='".$row['course_category']."'");
foreach($res as $r) { echo $r['course_name']; } ?>
</span></h5>
<input type="hidden"  id="txt_name" name="txt_name" value="<?php echo $row['course_title'];?>">
<h5 class="details">Course Name : <span><?php echo $row['course_title'];?></span></h5>
</div>
<div class="col-md-6">
<input type="hidden"  id="txt_price" name="txt_price" value="<?php echo $row['course_price'];?>">
<h5  class="details">Course Price: <span><?php echo $row['course_price'];?></span></h5>
<input type="hidden"  id="txt_details" name="txt_details" value="<?php echo $row['course_details'];?>">
  <h5  class="details">Course Details : <span><?php echo $row['course_details'];?></span></h5>                        
</div>
</div>
<?php } ?>
<form method="post" action="paymentsave.php" enctype="multipart/form-data" id="#">
<div class="row">

<div class="col-md-6">
<label for="inputEmail4">Trascation Id</label>
<input type="text" class="form-control" name="trascation" placeholder="Trascation Id">
<input type="hidden" value="<?php echo $_GET['id']?>" name="courseId">
<input type="hidden" value="" name="course" id="course">
<input type="hidden" value="" name="price" id="price">
<input type="hidden" value="" name="details" id="details">
<input type="hidden" value="" name="category" id="category">
</div>
<div class="col-md-6">

              <div class="form-group files">
                <label>Upload Your File </label>
                <input type="file" name="image" class="form-control" >
              </div>
            </div>
  <a href="" ><button class="btn" type="submit">submit</button><a>
 
</div>
</form>
</div>
</div>
</div>
</div>
    </section>
    <!-- END: Content-->


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
<script>
  
  var bla = $('#txt_name').val();
  // alert(bla);


//Set
$('#course').val(bla);

var bla = $('#txt_price').val();
  // alert(bla);


//Set
$('#price').val(bla);

var bla = $('#txt_details').val();
  // alert(bla);


//Set
$('#details').val(bla);

var bla = $('#txt_category').val();
  // alert(bla);


//Set
$('#category').val(bla);
// File Upload
// 
function ekUpload(){
  function Init() {

    console.log("Upload Initialised");

    var fileSelect    = document.getElementById('file-upload'),
        fileDrag      = document.getElementById('file-drag'),
        submitButton  = document.getElementById('submit-button');

    fileSelect.addEventListener('change', fileSelectHandler, false);

    // Is XHR2 available?
    var xhr = new XMLHttpRequest();
    if (xhr.upload) {
      // File Drop
      fileDrag.addEventListener('dragover', fileDragHover, false);
      fileDrag.addEventListener('dragleave', fileDragHover, false);
      fileDrag.addEventListener('drop', fileSelectHandler, false);
    }
  }

  function fileDragHover(e) {
    var fileDrag = document.getElementById('file-drag');

    e.stopPropagation();
    e.preventDefault();

    fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
  }

  function fileSelectHandler(e) {
    // Fetch FileList object
    var files = e.target.files || e.dataTransfer.files;

    // Cancel event and hover styling
    fileDragHover(e);

    // Process all File objects
    for (var i = 0, f; f = files[i]; i++) {
      parseFile(f);
      uploadFile(f);
    }
  }

  // Output
  function output(msg) {
    // Response
    var m = document.getElementById('messages');
    m.innerHTML = msg;
  }

  function parseFile(file) {

    console.log(file.name);
    output(
      '<strong>' + encodeURI(file.name) + '</strong>'
    );
    
    // var fileType = file.type;
    // console.log(fileType);
    var imageName = file.name;
    //alert(imageName);

    var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
    if (isGood) {
      document.getElementById('start').classList.add("hidden");
      document.getElementById('response').classList.remove("hidden");
      document.getElementById('notimage').classList.add("hidden");
      // Thumbnail Preview
      document.getElementById('file-image').classList.remove("hidden");
      document.getElementById('file-image').src = URL.createObjectURL(file);
    }
    else {
      document.getElementById('file-image').classList.add("hidden");
      document.getElementById('notimage').classList.remove("hidden");
      document.getElementById('start').classList.remove("hidden");
      document.getElementById('response').classList.add("hidden");
      document.getElementById("file-upload-form").reset();
    }
  }

  function setProgressMaxValue(e) {
    var pBar = document.getElementById('file-progress');

    if (e.lengthComputable) {
      pBar.max = e.total;
    }
  }

  function updateFileProgress(e) {
    var pBar = document.getElementById('file-progress');

    if (e.lengthComputable) {
      pBar.value = e.loaded;
    }
  }

  function uploadFile(file) {

    var xhr = new XMLHttpRequest(),
      fileInput = document.getElementById('class-roster-file'),
      pBar = document.getElementById('file-progress'),
      fileSizeLimit = 1024; // In MB
    if (xhr.upload) {
      // Check if file is less than x MB
      if (file.size <= fileSizeLimit * 1024 * 1024) {
        // Progress bar
        pBar.style.display = 'inline';
        xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
        xhr.upload.addEventListener('progress', updateFileProgress, false);

        // File received / failed
        xhr.onreadystatechange = function(e) {
          if (xhr.readyState == 4) {
            // Everything is good!

            // progress.className = (xhr.status == 200 ? "success" : "failure");
            // document.location.reload(true);
          }
        };

        // Start upload
        xhr.open('POST', document.getElementById('file-upload-form').action, true);
        xhr.setRequestHeader('X-File-Name', file.name);
        xhr.setRequestHeader('X-File-Size', file.size);
        xhr.setRequestHeader('Content-Type', 'multipart/form-data');
        xhr.send(file);
      } else {
        output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
      }
    }
  }

  // Check for the various File API support.
  if (window.File && window.FileList && window.FileReader) {
    Init();
  } else {
    document.getElementById('file-drag').style.display = 'none';
  }
}
ekUpload();
  </script>
  </body>
  <!-- END: Body-->

</html>