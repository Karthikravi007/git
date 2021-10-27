<?php

include('../admin/db.php');
	
    
    //Db File

     error_reporting(0);
     //echo $_POST['coursecategory'].$_POST['coursetitle'];exit;
	 $amount=addslashes($_POST['amount']); 
     $invest=addslashes($_POST['invest']); 
     $referal=addslashes($_POST['referal']); 






 {          echo "INSERT INTO `referal` (`id`,`referal`,`amount`,`invest`)
    values(NULL,'".$referal."','".$amount."','".$invest."')";exit;
            $result = $db_handle->runQuery("INSERT INTO `referal` (`id`,`referal`,`amount`,`invest`)
            values(NULL,'".$referal."','".$amount."','".$invest."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="support.php"; </script>';


        }


?>