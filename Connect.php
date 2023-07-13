<?php 
session_start();
$localhost = 'localhost:3307';
$uname = 'root';
$pass = '';
$DB = 'healthcare';

$con = mysqli_connect($localhost, $uname, $pass, $DB);
?>