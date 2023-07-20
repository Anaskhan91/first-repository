<!DOCTYPE html>
<html>
<head>
	<title>form2</title>
</head>
<body>
<table border="1px solid black">
	<tr>
	<td>Email</td>
<td>Password</td>
<td>Gender</td>
</tr>
<tr>
	
	<?php
	echo "<td>".($_GET['Email'])."</td>";
	echo "<td>".($_GET['Password'])."</td>";
	echo "<td>".($_GET['Gender'])."</td>";
?>
</tr>

</table>



</body>
</html>