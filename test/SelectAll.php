<html>
<head>
<title>All Records</title>
</head>
<body>
<table border=1>
<center><a href="insert.html">LOGINFORM</a></center><hr>
<?php
		$con=mysqli_connect("localhost","root","","college");
		$query=mysqli_query($con,"select * from loginform ");
		if(mysqli_num_rows($query))
		{
echo "<table border=1>
<tr>
<td>loginform ID</td>
<td>loginform Name</td>
<td> loginform Age</td>
<td>loginform City</td>
<td>Edit</td>
<td>Delete</td>
</tr>";
while($a=mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td>$a[0]</td>";
echo "<td>$a[1]</td>";
echo "<td>$a[2]</td>";
echo "<td>$a[3]</td>";
echo "<td><a href=updatesearch.php?s_id=$a[0]>Edit</a></td>";
echo "<td><a href=delete.php?s_id=$a[0]>Delete</a></td>";
echo "</tr>";
}
}
else
{
echo "Records Not Found";
}
?>
</body>
</html>