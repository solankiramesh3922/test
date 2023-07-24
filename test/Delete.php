<?php
 $s_id=$_GET['s_id'];
	$con=mysqli_connect("localhost","root","","college");
	$query=mysqli_query($con,"delete from loginform where s_id=$s_id");
		echo mysqli_affected_rows($con);
		header('Location:selectall.php');
?>