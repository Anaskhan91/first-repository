<?php
session_start();
include("conn.php");
?>

<?php

    if(isset($_POST['submit']))
    {
$user = $_POST['username'];

$pwd = $_POST['password'];

$query = "SELECT * FROM data WHERE UserName='$user' && Password='$pwd'";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

if($total==1)
{
    $_SESSION['user_name']=$user;


    header('location:wel.php');
    }
    else
    {
        echo"<h3>Login Failed</h3>".
         mysqli_error($conn);
    }
}

?>

