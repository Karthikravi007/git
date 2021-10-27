<?php

include("db.php");
	
    
    //Db File

     error_reporting(0);
     //echo $_POST['coursecategory'].$_POST['coursetitle'];exit;
	 $account=addslashes($_POST['accountno']); 
     $bank=addslashes($_POST['bankname']); 
     $ifsc=addslashes($_POST['ifsccode']); 
     $city=addslashes($_POST['city']); 





 {          //  echo "INSERT INTO `category` (`id`,`image`,`course-name`)";exit;
            $result = $db_handle->runQuery("INSERT INTO `bank_details` (`id`,`account_no`,`bank_name`,`ifsc_code`,`city`)
            values(NULL,'".$account."','".$bank."','".$ifsc."','".$city."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="bank.php"; </script>';


        }


?>