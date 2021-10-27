<?php
// $conn=mysql_connect("localhost","root","") or die("Could not connect");
// mysql_select_db("daitwa",$conn) or die("could not connect database");

?><?php
class DBController {
private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "alfo";
	private $conn;
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {				
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);	
mysqli_set_charset($conn,"utf8"); 
 
			
		return $conn;
	}
	
	function runQuery($query) {
	
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
$db_handle = new DBController();
//$site_mail = "ashok09042000@gmail.com";
?>