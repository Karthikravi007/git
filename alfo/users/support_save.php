<?php

include('../admin/db.php');
	
    
    //Db File

     error_reporting(0);
     //echo $_POST['coursecategory'].$_POST['coursetitle'];exit;
	 $sub=addslashes($_POST['subject']); 
     $des=addslashes($_POST['description']); 






 {          //  echo "INSERT INTO `category` (`id`,`image`,`course-name`)";exit;
            $result = $db_handle->runQuery("INSERT INTO `support` (`id`,`subject`,`description`)
            values(NULL,'".$sub."','".$des."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="support.php"; </script>';


        }


?>