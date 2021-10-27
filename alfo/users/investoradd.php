<?php
	session_start();
    include('../admin/db.php');
	error_reporting(0);
	//if(isset($_POST['amt']) && is
	$aadhar=addslashes($_POST['aadhar']);
	$pan=addslashes($_POST['pan']);
	$amount=addslashes($_POST['amount']);
	$name=addslashes($_POST['name']);
	$mobile=addslashes($_POST['mobile']);
	$package=addslashes($_POST['package']);
	 $Ref = $_POST['referal'];
	$UserId=$_POST['UserId'];
  $commission=$_POST['commissioin'];
	
	if($_POST['referal'] != null){

	$sq = "select * from `registration` WHERE `refferal` = '$Ref' ";
	$count = $db_handle->numRows($sq);
	//echo $count."select * from `registration` WHERE `refferal = '$Ref' ";exit;
		if($count == 1){
			$result = $db_handle->runQuery("select * from `registration` WHERE refferal = '$Ref'");
			//echo "select * from `bank_details`";exit;
			foreach($result as $row){
			$referId = $row['refferal'];
			 $referedId = $row['id'];
			 $referedName = $row['name'];
			 
			}
		//  echo	$referedName;exit;
			if(is_uploaded_file($_FILES['image']['tmp_name'])) {
				$sourcePath = $_FILES['image']['tmp_name'];
				$targetPath = "../admin/img/" .$_FILES['image']['name'];
				// $filename = $_FILES['image']['name'];	
	
				move_uploaded_file($sourcePath, $targetPath);
			}

    
      $result = $db_handle->runQuery("INSERT INTO `investor`(`Aadhar`,`pan`,`amount`,`name`,`mobile`,`proof`,`package`,`status`) 
      values('".$aadhar."','".$pan."','".$amount."','".$name."','".$mobile."','".$targetPath."','".$package."','0')");
	  $results = $db_handle->runQuery("INSERT INTO `refreal`(`id`,`referal`,`amount`,`commision`,`referedId`,`user_id`,`refername`) 
      values(NULL,'".$Ref."','".$amount."','".$commission."','".$referedId."','".$UserId."','".$referedName."')");
    
    
	header('Location: investor.php');

}

		else{
			$_SESSION['status'] = "Invalid Referal Code";

			header('Location: investor.php');
		}

	}
	?>
	