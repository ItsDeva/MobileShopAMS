<?php
//fetch.php
require 'Util/DB_Connect.php';
$output .= '
 <div class="table-responsive">
  <table class="table table bordered" id="example">
   <tr>
   <th>Brand</th>
   <th>Model</th>
   <th>IMEI1</th>
    <th>IMEI2</th>
     <th>INDATE</th>
     <th>DPRATE</th>

   </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
  <tr>
   <td><a href="viewmobile.php?id='.$row["brand"].'">'.$row["brand"].'</a></td>
   <td>'.$row["model"].'</td>
   <td>'.$row["imei1"].'</td>
   <td>'.$row["IMEI2"].'</td>
   <td>'.$row["indate"].'</td>
   <td>'.$row["dprate"].'</td>


    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td><a href="viewmobile.php?id='.$row["brand"].'">'.$row["brand"].'</a></td>
    <td>'.$row["model"].'</td>
    <td>'.$row["stocks"].'</td>

   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
