
<?php

  $host="localhost";

  $user="root";

  $pwd="root@123";

  $database="mobilestore";

  $con=($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $user, $pwd)) or die("Cannot Connect to Database");

  ((bool)mysqli_query($con, "USE " . $database)) or die ("Error Occured");
?>

//Old One
