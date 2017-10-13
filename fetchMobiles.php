<?php
//fetch.php
include("DB_Connect.php");
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
  $query = 'SELECT * FROM mobiles';
  $result = mysqli_query($conn, $query);
  ?>
  <div class="table-title">
</div>
<table>
<thead>
<tr>
<th class="text-left">Mobile ID</th>
<th class="text-left">Brand</th>
<th class="text-left">Model</th>
<th class="text-left">IMEI 1</th>
<th class="text-left">IMEI 2</th>
<th class="text-left">IN Date</th>
<th class="text-left">Amount</th>
</tr>
<?php
  if (mysqli_num_rows($result) > 0) {
     while($data = mysqli_fetch_assoc($result)) {
  ?>



</thead>
<tbody class="table-hover">

  <tr>
  <td class='text-left'><?php echo $data['mobileid'];?></td>
  <td class='text-left'><?php echo$data['brand'];?></td>
  <td class='text-left'><?php echo $data['model'];?></td>
  <td class='text-left'><?php echo $data['imei1'];?></td>
  <td class='text-left'><?php echo $data['imei2'];?></td>
  <td class='text-left'><?php echo $data['indate'];?></td>
  <td class='text-left'><?php echo $data['dprate'];?></td>
  </tr>
</tbody>
</table>
</div>

  <?php }
  } else {
  echo "0 results";
}}
  mysqli_close($conn);
  ?>
