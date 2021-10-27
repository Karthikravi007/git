<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$account= addslashes($_REQUEST["edit_account"]);
$bank= addslashes($_REQUEST["edit_bank"]);
$ifsc= addslashes($_REQUEST["edit_ifsc"]);
$city= addslashes($_REQUEST["edit_city"]);

 {

		$result = $db_handle->runQuery("UPDATE `bank_details` SET  `account_no`='".$account."',`bank_name`='".$bank."',`ifsc_code`='".$ifsc."',`city`='".$city."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="bank.php"; </script>';
	}

 


	?>