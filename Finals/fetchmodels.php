<?php
//fetch.php
require 'Util/DB_Connect.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM mobiles
  WHERE mobileid LIKE '%".$search."%'
  OR brand LIKE '%".$search."%'
  OR model LIKE '%".$search."%'
  OR imei1 LIKE '%".$search."%'
  OR imei2 LIKE '%".$search."%'
  OR dprate LIKE '%".$search."%'
 ";
}
else
{
 $query = "SELECT * FROM mobiles";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered" id="example">
    <tr>
    <th>Mobile ID</th>
    <th>Brand</th>
    <th>Model</th>
    <th>IMEI 1</th>
    <th>IMEI 2</th>
    <th>IN Date</th>
    <th>Amount</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td><a href="viewmobile.php?id='.$row["mobileid"].'">'.$row["mobileid"].'</a></td>
    <td>'.$row["brand"].'</td>
    <td>'.$row["model"].'</td>
    <td>'.$row["imei1"].'</td>
    <td>'.$row["imei2"].'</td>
    <td>'.$row["indate"].'</td>
    <td>'.$row["dprate"].'</td>
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
