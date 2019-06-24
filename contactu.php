<?php

$Use_Name=$_POST['Use_Name'];
$Use_Email=$_POST['Use_Email'];
$Use_Mob=$_POST['Use_Mob'];
$Use_message=$_POST['Use_message'];

	$ip="127.0.0.1";
	$user="root";
	$password="";
	$db_name="srpsatish";

	$connection=mysqli_connect($ip,$user,$password,$db_name);

	$insert="INSERT INTO signup SET Name='$Use_Name',Email_id='$Use_Email',Mobile='$Use_Mob',message='$Use_message'";
	$connection->query($insert);

	echo ("you will get reply soon");




?>