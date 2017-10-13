<!--
<?php

  $host="localhost";

  $user="root";

  $pwd="root@123";

  $database="mobilestore";

  $con=($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $user, $pwd)) or die("Cannot Connect to Database");

  ((bool)mysqli_query($con, "USE " . $database)) or die ("Error Occured");
  ?>
   -->
   
<?php
 $con = mysqli_connect("localhost", "root", "", "demo");
 // Check connection
if($con === false){
 die("ERROR: Could not connect. " . mysqli_connect_error());
 }
 // Attempt insert query execution
$sql = "INSERT INTO table_name (id, name, email) VALUES (1, 'ajay', 'ajay.agrahari09@mail.com')";
if(mysqli_query($con, $sql)){
 echo "Records added successfully.";
 } else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
 }
 // Close connection
 mysqli_close($con);
?>
