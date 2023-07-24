<html>
<head>
<title></title>
</head>
<body>
<form action="update.php">
<?php
		$s_id=$_GET['s_id'];
		$con=mysqli_connect("localhost","root","","college");
		$query=mysqli_query($con,"select * from loginform where s_id=$s_id");
  while($temp=mysqli_fetch_array($query))
{
		echo "loginform ID : <input type=number name=s_id value=$temp[0]><br>";
		echo "loginform Name :<input type=text name=s_name value=$temp[1]><br>";
		echo "loginform Age : <input type=number name=s_age value=$temp[2]><br>";
		echo "loginform City : <input type=text name=s_city value=$temp[3]><br>";
}
?>
<input type="submit" value="Update">
</form>
</body>
</html>
