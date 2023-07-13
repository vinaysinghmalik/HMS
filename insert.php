<?php
include "connect.php";
$name=$_GET['name'];
$email=$_GET['email'];
$pass=$_GET['pass'];

$insert = "INSERT INTO students VALUES ('$name', '$email', '$pass')";
$sql = mysqli_query($con, $insert);
if($sql)
{
	header('location: admin.php');
}
else{
    echo "Duplicate ID. Please use another ID.";
}
?>