<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$name= addslashes($_REQUEST["edit_category"]);

 {

		$result = $db_handle->runQuery("UPDATE `bot_category` SET  `category`='".$name."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="bot_category.php"; </script>';
	}

 


	?>