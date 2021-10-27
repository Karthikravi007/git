<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$cat= $_REQUEST["edit-coursecategory"];
$tit= $_REQUEST["edit-coursetitle"];
$pri= $_REQUEST["edit-courseprice"];
$det= $_REQUEST["edit-coursedetails"];
$des= $_REQUEST["edit-coursedescription"];
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
	$sourcePath = $_FILES['image']['tmp_name'];
	$targetPath = "img/uploads/".$_FILES['image']['name'];
	
	}

	if(move_uploaded_file($sourcePath,$targetPath)) {
//echo "UPDATE `bot_course` SET  `course_category`='".$cat."',`course`='".$tit."',`price`='".$pri."',`details`='".$det."',`description`='".$des."' ,`image`='".$targetPath."' where id='".$id."'";
//exit;
		$result = $db_handle->runQuery("UPDATE `bot_course` SET  `course_category`='".$cat."',`course`='".$tit."',`price`='".$pri."',`details`='".$det."',`description`='".$des."' ,`image`='".$targetPath."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="bot_course.php"; </script>';
	}

 
//$img_id=$_POST['img_id'];

// $result = $db_handle->runQuery("UPDATE `home` SET  `images`='".$targetPath."',`heading`='".$name."',`subheading`='".$subheading."',`description`='".$email."' where id='".$id."'");
// //echo "UPDATE `comment` SET  `name`='".$name."',`email`='".$email."',`subject`='".$subject."',`comment`='".$message."' where id='".$id."'";
// //echo "UPDATE `contact` SET  `location`='".$name."',`email`='".$email."',`phone_number`='".$subject."' where id='".$id."'";
// echo '<script>alert(" Updated Successfully ");
// window.location.href="mothertable.php"; </script>';

	
else{
	$result1 = $db_handle->runQuery("UPDATE `bot_course` SET  `course_category`='".$cat."',`course`='".$tit."',`price`='".$pri."',`details`='".$det."',`description`='".$des."' ,`image`='".$targetPath."' where id='".$id."'");
	echo '<script>alert(" Updated Successfully ");
	window.location.href="bot_course.php"; </script>';
}
//  echo "INSERT INTO `home` (`id`,`name`,`link`)values(NULL,'".$name."','".$link."')";
	// exit;


// else{
//     $result1 = $db_handle->runQuery("UPDATE `home` SET  `heading`='".$name."',`subheading`='".$subheading."',`description`='".$email."' where id='".$id."'");
//     echo '<script>alert(" Updated Successfully ");
// window.location.href="mothertable.php"; </script>';

	?>