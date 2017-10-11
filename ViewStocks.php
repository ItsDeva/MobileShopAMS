<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="ajaxsearch.js"></script>
</head>
<body>
<?php
require("DB_Connect.php");
?>
<div class="container">


  <form> 
<h1>-------------------Stock Details------------------  </h1> 

		<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>
      	
    <div class="table-title">
<h3>Mobiles</h3>
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
 $name=mysql_query("select * from mobiles");
 while($data=mysql_fetch_array($name)) { ?>
 
<tr>	 
<td class='text-left'><?php echo $data['mobileid'];?></td>
<td class='text-left'><?php echo$data['brand'];?></td>
<td class='text-left'><?php echo $data['model'];?></td> 
<td class='text-left'><?php echo $data['imei1'];?></td>
<td class='text-left'><?php echo $data['imei2'];?></td>
<td class='text-left'><?php echo $data['indate'];?></td> 
<td class='text-left'><?php echo $data['dprate'];?></td>
</tr>

<?php }
?>
</tbody>
</table>
</div>
       
     

</body>
</html>