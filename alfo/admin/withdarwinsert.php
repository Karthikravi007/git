<?php

include("db.php");
	
    
    //Db File

     error_reporting(0);
     //echo $_POST['coursecategory'].$_POST['coursetitle'];exit;
	 $Bank_Name=addslashes($_POST['Bank_Name']); 
	$Account_Number=addslashes($_POST['Account_Number']);
    $Reenter_Number=addslashes($_POST['Reenter_Number']);
    $ifsc=addslashes($_POST['ifsc']);


            // echo "INSERT INTO `user_profile` (`id`,`bank`,`account_number`,`reenter_number`,`ifsc`)
            // values(NULL,'".$Bank_Name."','".$Account_Number."','".$Reenter_Number."','".$ifsc."')";exit;
            $result = $db_handle->runQuery("INSERT INTO `user_profile` (`id`,`bank`,`account_number`,`reenter_number`,`ifsc`)
            values(NULL,'".$Bank_Name."','".$Account_Number."','".$Reenter_Number."','".$ifsc."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="../users/withdraw.php"; </script>';


?>