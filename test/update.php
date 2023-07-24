<?php
	$s_id=$_GET['s_id'];
	$s_name=$_GET['s_name'];
	$s_age=$_GET['s_age'];
	$s_city=$_GET['s_city'];
		$con=mysqli_connect("localhost","root","","college");
		$query=mysqli_query($con,"update loginform set s_id=$s_id, s_name='$s_name', s_age=$s_age, s_city='$s_city' where s_id=$s_id");
echo mysqli_affected_rows($con);
header('Location:selectall.php');
?>
