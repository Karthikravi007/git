<?php 
include dirname(__FILE__).'../../../admin/db.php';
error_reporting(0);
SESSION_START();
//echo $_POST['email'];
if(isset($_POST['loginButton'])) {

  $username = $_POST['email'];
  $password = $_POST['password'];
  
  //echo " SELECT * FROM `register` where username='".$username."' and password='".$password."'"; exit;
 $sq =" SELECT * FROM `registration` where email='".$username."' and password='".$password."'";
 
	$count = $db_handle->numRows($sq);
	//echo $count;
	if($count==1) {
	$resultsa=$db_handle->runQuery($sq);
	foreach($resultsa as $data) {
		$_SESSION['email']	=$data['email'];
		$_SESSION['alfouser_id'] = $data['id']; 
	//echo $_SESSION['muser'];exit;
	
	}
echo '<script>
 



window.location.replace("../../user/index.php");</script>';
	}
	// elseif(($email==$data['email']) &&( $pass!=$data['email'])) {
		
	// echo '<script>alert("Please Enter Correct Password ");
	// location.replace("index.php");</script>';
	// }
	
	
	
	
	else {  
	echo '<script>alert( "Details are incorrect!");
	location.replace("login.php");</script>';}
	
	
}

?>