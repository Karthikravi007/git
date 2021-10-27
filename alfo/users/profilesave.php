<?php
session_start();
include('../admin/db.php');
	
 $userId=$_SESSION['user_id'];   
    //Db File

     error_reporting(0);
     //echo $_POST['coursecategory'].$_POST['coursetitle'];exit;
	 $name=addslashes($_POST['name']); 
     $dob=addslashes($_POST['dob']); 
     $aadhar=addslashes($_POST['aadhar']); 
     $address=addslashes($_POST['address']); 
     $zip=addslashes($_POST['zip']); 
     $city=addslashes($_POST['city']); 




//   echo "INSERT INTO `profile` (`id`,`father`,`dob`,`aadhar`,`address`,`zip`,`city`)
//   values(NULL,'".$name."','".$dob."','".$aadhar."','".$address."','".$zip."','".$city."')";exit;

          
            $result = $db_handle->runQuery("INSERT INTO `profile` (`id`,`father`,`dob`,`aadhar`,`address`,`zip`,`city`)
            values(NULL,'".$name."','".$dob."','".$aadhar."','".$address."','".$zip."','".$city."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="profile.php"; </script>';


        


?>