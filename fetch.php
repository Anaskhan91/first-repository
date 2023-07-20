<?php
	include("conn.php");
?>
<?php
error_reporting(0);
        $Username = $_POST['user'];
	    $Email = $_POST['email'];
        $Password = $_POST['pwd'];
          

        $sql = "INSERT INTO data  VALUES ('$Username','$Email','$Password')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Database Successfully.</h3>";
 
        } 
        else
        {
            echo "<h6>ERROR: Hush! Sorry $sql.</h6> " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
        
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <i class="glyphicon glyphicon-thumbs-up" style="font-size:40px;"></i>

<h1>ThankYou For Register</h1>
    <i class="glyphicon glyphicon-thumbs-up" style="font-size:40px;"></i>

</body>
</html>
