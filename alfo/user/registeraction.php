<!--REGISTER-->
<?php
    include("admin/db.php");
    //error_reporting(0);
      if(isset($_REQUEST['registerbutton'])) {

  $username = $_REQUEST['username'];
  $name = $_REQUEST['name'];
  $contact = $_REQUEST['contact'];
  $password = $_REQUEST['password'];
//   date_default_timezone_set('Asia/Kolkata');
//   $date=date("Y-m-d h:i:s");

//echo "INSERT INTO registration (name, username, contact,password)VALUES ('$username', '$name', '$password','$contact')"; exit;
$sql = "SELECT * FROM `registration` where  `username`='".$username."'";
//echo "SELECT * FROM `user` where  email='".$email."'";;
 $count = $db_handle->runQuery($sql);//exit;
if($count==1) {
	echo '<script>alert("Email Has been Registered Already ");
	location.replace("index.php");</script>';
	//$_SESSION['loginmsg']	='Email Has been Registered Already';
	//header('Location:index.php');
}
else{
$result=$db_handle->runQuery("INSERT INTO `registration` (`name`, `username`, `contact`,`password`)

 VALUES ('$username', '$name','$contact','$password')");
if(!($result)){
	echo '<script>alert("Account Created Successfully ");
	location.replace("index.php");</script>';
	
	//$_SESSION['loginmsg']	='Account Created Successfully';
	//header('Location:index.php');
	
}

	else { 
	echo '<script>alert("Something Went wrong !Please try again later");
	location.replace("index.php");</script>';
     //$_SESSION['loginmsg']	='Something Went wrong !Please try again later';	
	//header('Location:index.php');
	
	
}
	  }
	  }
?>