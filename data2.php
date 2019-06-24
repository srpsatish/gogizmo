<?php

$Use_id=$_POST['Use_id'];
$Use_pass=$_POST['Use_pass'];

    $ip="127.0.0.1";
	$user="root";
	$password="";
	$db_name="srpsatish";
	$connection=mysqli_connect($ip,$user,$password,$db_name);
	
	$select="SELECT * FROM signup where Email_id='$Use_id' and Password='$Use_pass' or Mobile='Use_id' and Password='Use_pass'";
	$result=($connection->query($select));
	$num=mysqli_num_rows($result);
	if ($num>0)
		echo "Login Successful";
	else
		echo "Wrong credentials";
?>