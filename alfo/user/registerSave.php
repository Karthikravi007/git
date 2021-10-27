
<?php
    include("../admin/db.php");
    SESSION_START();
    //error_reporting(0);
   

  
          $name = $_POST['name'];
          $email = $_POST['email'];
        //   $gen = $_POST['refferal'];
          $password = $_POST['password'];
         date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d h:i:s");
         $prefix = "ALFO";
         $rand = rand();
         $gen = str_pad($prefix ,  8, $rand, STR_PAD_RIGHT);

          $sql = "SELECT * FROM `registration` where  `email`='".$email."'";

          $count = $db_handle->runQuery($sql);
          if($count >= 1) {
	
	    // $_SESSION['msg']	='Email Has been Registered Already';
        echo '<script>alert("Email Has been Registered Already");
	window.location.replace("register.php");</script>';
            }
        else{
            $res="INSERT INTO `registration` (`name`, `email`,`password`,`rdate`,`refferal`)VALUES ( '$name','$email','$password','$date','$gen')";
            $result=$db_handle->runQuery($res);
            if(!$result){
	
	
            	//$_SESSION['loginmsg']	='Account Created Successfully';
            	echo '<script>alert("Account Created Successfully");
	window.location.replace("login.php");</script>';
	
            }

	else { 
	echo '<script>alert("Something Went wrong !Please try again later");
	location.replace("register.php");</script>';
     //$_SESSION['msg']	='Something Went wrong !Please try again later';	
	//header('Location:register.php');
	
	
}
	  }
	 
?>