<?php

include("../admin/db.php");
	
    
    //Db File

     error_reporting(0);
    $courseId=addslashes($_POST['courseId']);
    $category=addslashes($_POST['category']);
    $course=addslashes($_POST['course']);
    $price=addslashes($_POST['price']); 
    $details=addslashes($_POST['details']); 
     //echo $_POST['course'];
	 $category=addslashes($_POST['trascation']);
   //echo $_POST['fileUpload']; exit;
  if(is_uploaded_file($_FILES['image']['tmp_name'])) {
    $sourcePath = $_FILES['image']['tmp_name'];
    $targetPath = "../img/".$_FILES['image']['name'];
    //echo $targetPath;exit;
    $filename = "../img/".$_FILES['image']['name'];
      }
	
        //Upload the file into the temp dir
        if(move_uploaded_file($sourcePath,$targetPath)){
 //  echo       "INSERT INTO `payment` (`id`,`image`,`trascation`,`course_id`,`name`,`price`,`details`,`category`)
         // values(NULL,'".$targetPath."','".$category."','".$courseId."','".$course."','".$price."','".$details."','".$category."')"; exit;
             //echo "INSERT INTO `payment` (`id`,`image`,`trascation`)";exit;
            $result = $db_handle->runQuery("INSERT INTO `payment` (`id`,`image`,`trascation`,`course_id`,`name`,`price`,`details`,`category`)
            values(NULL,'".$targetPath."','".$category."','".$courseId."','".$course."','".$price."','".$details."','".$category."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="investor.php"; </script>';


             

        }
        else{
          echo '<script>alert(" Something went wrong  ");
          window.location.href="withdraw.php"; </script>';

        }

?>