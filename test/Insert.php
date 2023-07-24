<?php
$no = $_GET["no"];
$name = $_GET["name"];
$age = $_GET["age"];
$city = $_GET["city"];
		$con = mysqli_connect("localhost","root","","college");
		/*Don't Use Single Quote ' while inserting Integer Data*/
		$query = mysqli_query($con,"insert into loginform values ($no,'$name',$age,'$city')");
	echo mysqli_affected_rows($con) ." Rows Inserted";
	header('Location:selectall.php');
?>