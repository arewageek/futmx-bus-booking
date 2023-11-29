<?php 
$server="localhost";
$dbusername="root";
$dbpassword="";
$dbname="transport";

$connectDB= mysqli_connect($server,$dbusername,$dbpassword,$dbname);
if(!$connectDB){
    die("connection to database failed").mysqli_connect_error();
    // header("location:../index.php");
}
?>