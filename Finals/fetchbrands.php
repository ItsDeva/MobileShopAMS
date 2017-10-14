<?php
//fetch.php
require 'Util/DB_Connect.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);

$sql = "SELECT brand,model,count(brand) as stocks FROM `mobiles` group by model having brand like '%".$search."%'";
}
else
{
 $sql = "SELECT brand,model,count(brand) as stocks FROM `mobiles` group by model";
}
$result = mysqli_query($connect, $sql);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered" id="example">
    <tr>
    <th>Brand</th>
    <th>Model</th>
    <th>stocks</th>

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
