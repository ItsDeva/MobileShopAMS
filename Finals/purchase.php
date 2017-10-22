<!DOCTYPE html>

<?php
if(isset($_POST['totalamount'])){

session_start();

$_SESSION['custname'] = $_POST['custname'];
$_SESSION['custmobile'] = $_POST['custmobile'];
$_SESSION['custaddress'] = $_POST['custaddress'];
$_SESSION['purchasedate'] = $_POST['purchasedate'];
$_SESSION['mobileid'] = $_POST['mobileid'];
$_SESSION['mobilerate'] = $_POST['mobilerate'];
$_SESSION['cgst'] = $_POST['cgst'];
$_SESSION['sgst'] = $_POST['sgst'];
$_SESSION['totalamount'] = $_POST['totalamount'];

}

?>

<html lang="en">
<head>
  <title>Customer Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="styles/bootstrap.min.css">
<script
	src="styles/jquery.min.js"></script>
<script
	src="styles/bootstrap.min.js"></script>
</head>
<body>

<div class="container">


  <form>
<h1> purchase </h1>

      	<label for="ex1">Name : </label>
        <input class="form-control" id="custname" name="custname" value="" type="text">

        <label for="ex1">Mobile Number : </label>
        <input class="form-control" id="custmobile" name="custmobile" value="" type="number">

        <label for="ex1">Address : </label>
        <input class="form-control" id="custaddress" name="custaddress"  value="" type="text">

        <label for="ex1">Date Of Purchase : </label>
        <input class="form-control" id="pdate"  name="purchasedate" value="" type="date">
       -
        <label for="ex1">Mobile ID : </label>
        <input class="form-control" id="mobileid" name="mobileid" value=""  type="number">

        <label for="ex1">Mobile Rate : </label>
        <input class="form-control" id="rate" name="mobilerate" value="" type="number">

    	 <label for="ex1">SGST : </label>
        <input class="form-control" id="sgst" name="sgst" value="" type="number">

    	 <label for="ex1">CGST: </label>
        <input class="form-control" id="cgst" name="cgst" value="" type="number">

        <label for="ex1">Total Amount </label>
        <input class="form-control" id="tot" name="totalamount" value="" type="number">
    	 <br>
	     <input class="btn btn-primary" id="ex3" value="BUY" type="submit">
  </form>
</div>

</body>
</html>
