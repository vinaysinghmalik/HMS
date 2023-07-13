<?php
include "Connect.php";

$id = isset($_GET['id']) ? $id=$_GET['id']: '';	
    
$name=$_GET['name'];
$email=$_GET['email'];
$pass=$_GET['pass'];


$update="update students set name='$name', email='$email', pass='$pass' where id=$id";
if (!mysqli_query($con, $update)) {
  echo("Error description: " . mysqli_error($con));
}
$sql = mysqli_query($con, $update);
if($sql){
    header("Location: admin.php");
}
else{
    echo "bye";
}
?>