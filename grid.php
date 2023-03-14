<?php
include 'adapter.php';
$query="SELECT `PRODUCT_ID`,`NAME`FROM `product`" ;
$result=mysqli_query($connect,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>grid</title>
</head>
<body>
	<form method="post" action="insert.php">
       <?php echo"Product Name";?> <select name="Product">
     	<?php
      	 foreach($result as $row){
       echo"<option value='$row[PRODUCT_ID]'>$row[NAME]</option>";
      	 }?>
      </select>
      
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        Quantity &nbsp<input type="text" name="QUANTITY" >

        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="submit" value="ADD ITEM">
  </form>
     
      <br><br>


      <label for="Shipping">SHIPPING METHOD &nbsp</label>
  <select name="Shipping" id="Shipping ">
    <option value="Platinum">Platinum</option>
    <option value="Gold">Gold</option>
    <option value="Silver">Silver</option>
    </select>
    <br><br><br>

    
    Tax &nbsp<input type="text" name="tax" value="5%"><br><br>
    
  
	<table border="10" cellspacing="10" cellpadding="10" width="100%" bgcolor="lightblue">
	<tr>
		<th>PRODUCT ID</th>
		<th>NAME</th>
		<th>SKU</th>
		<th>PRICE</th>
		<th>QUANTITY</th>
		<th>ROW TOTAL</th>
		<th>REMOVE</th>
	</tr>
	<tr>
		
</table align="center">
<table border="10" cellspacing="10" cellpadding="10">
<tr>
<th>Sub Total</th>
</tr>
<tr>
<th>Shipping Amount</th>
</tr>
<tr>
<th> Grand Total</th>
</tr>
</table>


</body>
</html>