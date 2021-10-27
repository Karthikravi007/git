<?php

include("db.php");
	
    
    //Db File

     error_reporting(0);
     //echo $_POST['coursecategory'].$_POST['coursetitle'];exit;
	 $coursecat=addslashes($_POST['coursecategory']); 
	$coursetit=addslashes($_POST['coursetitle']);
    $courseprice=addslashes($_POST['courseprice']);
    $coursedetails=addslashes($_POST['coursedetails']);
    $coursedes=addslashes($_POST['coursedescription']);
	
	//error_reporting(0);

    // Count # of uploaded files in array
    $total = count($_FILES['image']['name']);

    // Loop through each file
    for( $i=0 ; $i < $total ; $i++ ) {

      //Get the temp file path
      $tmpFilePath = $_FILES['image']['tmp_name'][$i];

      //Make sure we have a file path
      if ($tmpFilePath != ""){
        //Setup our new file path
        $newFilePath = "./img/" . $_FILES['image']['name'][$i];

//echo "INSERT INTO `course` (`id`,`image`,`course-category`,`course-title`,`course-price`,`course-details`,`course-description`)
//values(NULL,'".$newFilePath."','".$coursecat."','".$coursetit."','".$courseprice."','".$coursedetails."','".$coursedes."')";exit;

        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {

            // echo "INSERT INTO `course` (`id`,`image`,`course-category`,`course-title`,`course-price`,`course-details`,`course-description`)";exit;
            $result = $db_handle->runQuery("INSERT INTO `course` (`id`,`image`,`course_category`,`course_title`,`course_price`,`course_details`,`course_description`)
            values(NULL,'".$newFilePath."','".$coursecat."','".$coursetit."','".$courseprice."','".$coursedetails."','".$coursedes."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="course.php"; </script>';


        }
      }
    }        

	/*if(is_uploaded_file($_FILES['images']['tmp_name']))
     {
	    
	   // $sourcePath = $_FILES['images']['tmp_name'];
	  //$targetPath = "assets/images/".$_FILES['images']['name']."";

    
    	//if(move_uploaded_file($sourcePath,$targetPath))
        {
    
    		//$img_id=$_POST['img_id'];
    
    		//$result = $db_handle->runQuery("INSERT INTO `gallery` (`id`,`images`)values(NULL,'".$targetPath."')");
    		//echo '<script>alert(" Inserted Successfully ");
    		//window.location.href="gallerytable.php"; </script>';
    
    		//echo "INSERT INTO `gallery` (`id`,`image`)values(NULL,'".$targetPath."')";
    
    		//$result1 = $db_handle->runQuery("INSERT INTO `home_images` (`id`,`img_id`,`image`)values(NULL,'".$img_id."','".$filename."')");
    
    		//echo "INSERT INTO `install_service` (`id`,`image`)values(NULL,'".$filename."')";
    
    	}
    }*/


?>