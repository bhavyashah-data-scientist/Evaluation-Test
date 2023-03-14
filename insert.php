<?php
include 'adapter.php';
$y=$_POST['Product'];
$query= INSERT INTO `cart_item`
SELECT `NAME`, `SKU`, `PRICE`
FROM `product` WHERE  `PRODUCT_ID`='$y';
$result=mysqli_query($connect,$query);
?>