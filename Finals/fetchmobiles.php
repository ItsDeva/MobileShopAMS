<?php
require 'styles/allStyles.html';
require 'Util/DB_Connect.php';
$output = '';
if(isset($_GET["model"]))
{
 $search = mysqli_real_escape_string($connect, $_GET["model"]);


 $sql = "SELECT  * FROM `mobiles`where model like '%".$search."%' ";}
else
{
  $sql = "SELECT  * FROM `mobiles`";
}

$result = mysqli_query($connect, $sql);
if(mysqli_num_rows($result) > 0)
{
  $output .= '
   <div class="table-responsive">
    <table class="table table bordered" id="example">
     <tr>
     <th>Mobile ID</th>
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
     <td><a href="viewmobile.php?mobileid='.$row["mobileid"].'">'.$row["mobileid"].'</a></td>
     <td>'.$row["brand"].'</td>
     <td>'.$row["model"].'</td>
     <td>'.$row["imei1"].'</td>
     <td>'.$row["imei2"].'</td>
     <td>'.$row["indate"].'</td>
     <td>'.$row["dprate"].'</td>

    </tr>
   ';
  }
 }
 echo $output;

?>
