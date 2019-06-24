<?php

$Use_Name=$_POST['Use_Name'];
$Use_Email=$_POST['Use_Email'];
$Use_Mob=$_POST['Use_Mob'];
$Use_Pass=$_POST['Use_Pass'];
$Use_Repass=$_POST['Use_Repass'];
if ($Use_Pass==$Use_Repass)
{
	$ip="127.0.0.1";
	$user="root";
	$password="";
	$db_name="srpsatish";

	$connection=mysqli_connect($ip,$user,$password,$db_name);

	$select="SELECT * FROM signup where Email_id='$Use_Email' and Password='$Use_Pass' or Mobile='$Use_Mob' and Password='$Use_Pass'";
	$result=($connection->query($select));
	$num=mysqli_num_rows($result);
	if ($num>0)
		echo "User already exists";
	else{
		$insert="INSERT INTO signup SET Name='$Use_Name',Email_id='$Use_Email',Mobile='$Use_Mob',Password='$Use_Pass'";
		$connection->query($insert);
		echo "Sign up Complete";}
}
else
{
	echo ("Password Mismatch");
}


?>