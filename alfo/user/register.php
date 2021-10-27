
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
    
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dcalendar.picker.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
#deceased{
    background-color:#FFF3F5;
	padding-top:10px;
	margin-bottom:10px;
}
.remove_field{
	float:right;	
	cursor:pointer;
	position : absolute;
}
.remove_field:hover{
	text-decoration:none;
}
.error{
	color:red;
}
</style>
  </head>
  <body>
<div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title text-center" >Registration Form</h3>
	</div>
<div class="panel-body">
    <form method="POST" id="register-form" name="register_form" action="registerSave.php" onsubmit="return validateForm()">
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-6 col-sm-6">
            <label for="name">Name*	</label>
            <input type="text" name="name" class="form-control input-sm" id="name" placeholder="">
			<span class="error"><p id="name_error"></p></span>
        </div>
        <div class="form-group col-md-6 col-sm-6">
             <label for="email">Email*</label>
            <input type="text" class="form-control input-sm" name="email" id="email" placeholder="">
			<span class="error"><p id="email_error"></p></span>
        </div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="password">Password*</label>
            <input type="text" name="password" class="form-control input-sm" id="password" placeholder="">
			<span class="error"><p id="password_error"></p></span>
        </div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="state">Confirm Password*</label>
            <input type="text" name="confirm_password" class="form-control input-sm" id="confirm_password" placeholder="">
			
		
			<span class="error"><p id="cpassword_error"></p></span>
			<span class="error"><p id="cpassworderror"></p></span>
        </div>

	<div class="form-group col-md-6 col-sm-6">
	<div class="form-group col-md-6 col-sm-6">
            
        </div>
        </div>


</div>
<div class="card-footer">
                  <button type="submit" name="register" class="btn btn-primary center">Submit</button>
                </div>
</form>

</div>

<?php 
SESSION_START();
if(isset($_SESSION['msg']) && $_SESSION['msg'] != '')
	

    {
		
		echo' <div class="alert bg-pink alert-dismissible" role="alert" id="final_msg">
                                
                                '.$_SESSION['msg'].'</div>';
        
        unset($_SESSION['msg']);
    }
?>
<script>


//validation
 function validateForm() {
    var error = 0;
    var a = document.forms["register_form"]["name"].value;
    document.getElementById('name_error').innerHTML = '';
    if (a == null || a == "") {
        // alert("Name must be filled out");
        error++;
        document.getElementById('name_error').innerHTML = '*Name must be filled out';
    }

    var b = document.forms["register_form"]["email"].value;
    document.getElementById('email_error').innerHTML = '';
    if (b == null || b == "") {
        // alert("Email must be filled out");
        error++;
        document.getElementById('email_error').innerHTML = '*Email must be filled out';
    }

     var c = document.forms["register_form"]["password"].value;
    document.getElementById('password_error').innerHTML = '';
    if (c == null || c == "") {
        // alert("Password must be filled out");
        error++;
        document.getElementById('password_error').innerHTML = '*Password must be filled out';
    }
    var d = document.forms["register_form"]["confirm_password"].value;
    document.getElementById('cpassword_error').innerHTML = '';
    if (d == null || d == "") {
        // alert("Password must be filled out");
        error++;
        document.getElementById('cpassword_error').innerHTML = '*Renter the Password';
    }
    document.getElementById('cpassworderror').innerHTML = '';
	if (c != d  || d != c) {
        // alert("Password must be filled out");
        error++;
        document.getElementById('cpassworderror').innerHTML = '*Password Mismatch';
    }
    

    if(error>0) {
        return false;
    }
    return true;
}
//Alert Message
setTimeout(function() {
 $('#final_msg').fadeOut();

}, 10000 );

</script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyCzZN4wSn4-18hslMOhLJKyPlnJXFnuGKc",
    authDomain: "rishi-a328a.firebaseapp.com",
    projectId: "rishi-a328a",
    storageBucket: "rishi-a328a.appspot.com",
    messagingSenderId: "1079246711202",
    appId: "1:1079246711202:web:802c89e6bc93a3ce6baafb",
    measurementId: "G-RX510014JS"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
    <script src="firebase.js" type="text/javascript"></script>
</body>
</html>