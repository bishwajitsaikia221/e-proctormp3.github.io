<?php
#session_start();
$mysqli= new mysqli('localhost','root','','proctord') or die(mysqli_error($mysqli));

$update = false;
$ID=0;
$NAME = '';
$username = '';
$SEM = '';
$EMAIL='';
$PHONE_NUMBER='';
#$facult_CP='';

if(isset($_POST['save'])){
	$ID=$_POST['ID'];
	$NAME=$_POST['NAME'];
	$username=$_POST['username'];
	//$usn=$_POST['usn'];
	$SEM=$_POST['SEM'];
	#$facult_CP=$_POST['facult_CP'];

	$mysqli->query("INSERT INTO procteespln (ID,NAME,username,SEM) VALUES('$ID','$NAME','$username','$SEM')") or die($mysqli->error());

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: editProctees.php");

}

if (isset($_GET['delete'])){
	$ID= $_GET['delete'];
	$mysqli->query("DELETE FROM procteespln WHERE ID = $ID") or die($mysqli->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: editProctees.php");
} 
if (isset($_GET['edit'])){
	$ID = $_GET['edit'];
	#$name = $_GET['edit'];
	#$NAME = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM procteespln WHERE ID = $ID") or die($mysqli->error());
   #if (count($result)==1){
     	 #if (is_array($result) && count($result)==1){

		$row = $result->fetch_array();
		$ID = $row['ID'];
		$NAME= $row['NAME'];
		$username = $row['username'];
		$SEM = $row['SEM'];
		$EMAIL = $row['EMAIL'];
		$PHONE_NUMBER=$row['PHONE_NUMBER'];
		


	#}
} 
if (isset($_POST['update'])){
	$ID = $_POST['id'];
	$NAME = $_POST['name'];
	$username = $_POST['usn'];
	$SEM = $_POST['sem1'];
	$EMAIL = $_POST['email'];
	
		#$email = $_POST['email'];
	$PHONE_NUMBER = $_POST['phno'];

		$mysqli->query("UPDATE procteespln SET ID='$ID',NAME='$NAME',username='$username', SEM='$SEM', EMAIL='$EMAIL',PHONE_NUMBER='$PHONE_NUMBER'  WHERE ID = '$ID' ") or die($mysqli->error());

		$_SESSION['message'] = "Record has been updated!";
		$_SESSION['msg_type'] = "warning";
		header("location: editProctees.php");
		



	} 

?>