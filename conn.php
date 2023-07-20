<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$server="localhost";
$user="root";
$pass="";
$db="account9";

$conn=mysqli_connect($server,$user,$pass,$db);

if($conn)
{
	//echo"Connection ok";//
}
else{
	echo"Connection Failed".mysqli_connect_error();
}







?>


</body>
</html>