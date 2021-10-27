<?php
include("db.php");


$id=$_POST['id'];
$reply=$_POST['reply'];

{
	
// echo "UPDATE `support` SET `reply`='".$reply."'  where `id`='".$id."'";exit;
	$result = $db_handle->runQuery("UPDATE `support` SET `reply`='".$reply."',`status`='1'  where `id`='".$id."'");
echo '<script>alert(" Updated Successfully ");
window.location.href="ticketpending.php"; </script>';
	}


?>