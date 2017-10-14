<?php
require 'styles/allStyles.html';
//fetch.php
require 'Util/DB_Connect.php';
$output = '';
if(isset($_GET["id"]))
{
 $search = mysqli_real_escape_string($connect, $_GET["id"]);
 $query = "
  SELECT * FROM mobiles
  WHERE mobileid LIKE '%".$search."%'
 ";
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
     <td>'.$row["mobileid"].'</td>
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
</div>
</table>
</body>
</html>
