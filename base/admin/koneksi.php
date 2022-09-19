<?php
$host = "127.0.0.1";
$hostUser = "root";
$hostPass = "";
$dbase = "smkmuara";
$hostPort = "3306";

$conn = mysqli_connect($host, $hostUser, $hostPass, $dbase, $hostPort);

if(!$conn){
    die("Connection Database Failed :" .mysqli_connect_errno());
}
?>