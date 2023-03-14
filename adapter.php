<?php
 $server="localhost";
  $username="root";
 $password="root";
  $database="testing";

$connect=mysqli_connect($server,$username,$password,$database);
  
  if(!$connect){
  	echo" not done";
  }

?>