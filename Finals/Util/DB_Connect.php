<?php
$host="localhost";

$user="root";

$pwd="root@123";

$database="mobilestore";
$connect = mysqli_connect($host,$user,$pwd,$database);
 //$con = mysqli_connect("localhost", "root", "", "demo");
 // Check connection
if($connect === false){
 die("ERROR: Could not connect. " . mysqli_connect_error());
 }
 //
 // Close connection
// mysqli_close($con);
?>
