<?php

session_start();
require 'styles/allStyles.html';
//fetch.php
require 'Util/DB_Connect.php';
$output = '';
if(isset($_GET["mobileid"]))
{
 $search = mysqli_real_escape_string($connect, $_GET["mobileid"]);
 $query = "
  SELECT * FROM mobiles
  WHERE mobileid = '".$search."'
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
<div style="width:800px; margin:0 auto;">
    <table class="table" id="example">
    <th>Mobile ID</th><td>'.$row["mobileid"].'</td></tr>
     <th>Brand</th><td>'.$row["brand"].'</td></tr>
     <tr> <th>Model</th><td>'.$row["model"].'</td></tr>
     <tr> <th>IMEI1</th><td>'.$row["imei1"].'</td></tr>
     <tr>  <th>IMEI2</th> <td>'.$row["imei2"].'</td></tr>
     <tr>   <th>INDATE</th>   <td>'.$row["indate"].'</td></tr>
       <tr> <th>DPRATE</th> <td>'.$row["dprate"].'</td></tr>

   ';
  }
  $_SESSION["mobile"] = $row["mobileid"];
  echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
</div>
</table>
<h4 class="center1"><a href="purchase.php">BUY</a></h4>
</body>
</html>
