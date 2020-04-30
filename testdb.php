<?php
$msqli = new mysqli('localhost','root','','table') or die(mysql_error($msqli));

$id = 0;
 $update = false;
 $name = '';
 $purpose ='';
 $who = '';
 $timein = '';
 $timeout ='';

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$purpose = $_POST['purpose'];
	$who = $_POST['who'];
	$timein = $_POST['timein'];
	$timeout = $_POST['timeout'];

	if(empty($name) || empty($purpose) || empty($timein)) {
		echo "These fields are required";
	} else{
		$msqli->query("INSERT INTO guest(name, purpose, who, timein,timeout)VALUES('$name','$purpose','$who','$timein','$timeout')") or die($msqli->error);

	}
} 

if(isset($_GET['delete'])) {
 	$id = $_GET['delete'];

 	$msqli->query("DELETE  FROM guest WHERE id = $id") or die($msqli->error);
 	
 // 	$_SESSION['massage'] = "Record has been deleted";
	// $_SESSION['msg_type'] = "danger";
	// header("location : Mr-AM.php");

 }

 if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	 $result = $msqli->query("SELECT * FROM guest WHERE id = $id") or die($msqli->error);
	 // if(count($result)==1){
	 	$row = $result->fetch_array();
	 	$name = $row['name'];
	 	$purpose = $row['purpose'];
	 	$who = $row['who'];
	 	$timein = $row['timein'];
	 	$timeout = $row['timeout'];

	 // 	
}

 if(isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$purpose = $_POST['purpose'];
	$who = $_POST['who'];
	$timein = $_POST['timein'];
	$timeout = $_POST['timeout'];

	$msqli->query("UPDATE guest SET name = '$name', purpose = '$purpose', who = 'who', timein ='$timein', timeout ='$timeout' WHERE id = $id") or die($msqli->error);
}
?>
