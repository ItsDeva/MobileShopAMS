<?php

  $host="localhost";

  $user="root";

  $pwd="root@123";

  $database="mobilestore";

  $con=mysql_connect($host,$user,$pwd,$database) or die("Cannot Connect to Database");

  mysql_select_db($database,$con) or die ("Error Occured");
?>