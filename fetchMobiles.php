<div class="table-title"><h3>Arthanareeswarar Mobile Shop</h3>
</div>
<table class="table-fill">
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
</thead>
<tbody class="table-hover">

<?php
//fetch.php
include("DB_Connect.php");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);

  $query = "
   SELECT * FROM mobiles
   WHERE mobileid LIKE '%".$search."%'
   OR brand LIKE '%".$search."%'
   OR model LIKE '%".$search."%'
   OR imei1 LIKE '%".$search."%'
   OR imei2 LIKE '%".$search."%'
   OR dprate LIKE '%".$search."%'
  ";
  $result = mysqli_query($conn, $query);
}
else
{
  $query = "SELECT * FROM mobiles";
  $result = mysqli_query($conn, $query);
}
//  if (mysqli_num_rows($result) > 0) {
     while($data = mysqli_fetch_array($result)) {
  ?>
  <tr>
  <td class='text-left'><?php echo $data['mobileid'];?></td>
  <td class='text-left'><?php echo$data['brand'];?></td>
  <td class='text-left'><?php echo $data['model'];?></td>
  <td class='text-left'><?php echo $data['imei1'];?></td>
  <td class='text-left'><?php echo $data['imei2'];?></td>
  <td class='text-left'><?php echo $data['indate'];?></td>
  <td class='text-left'><?php echo $data['dprate'];?></td>
  </tr>
  <?php
} //else {

//}}
  mysqli_close($conn);
  ?>
</tbody>
</table>
</div>
