<?php

$conn=mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'admindb');

$email = $_GET['email'];

$q = " DELETE FROM customer WHERE email='$email' ";
mysqli_query($conn,$q);

//$q1="  DELETE FROM events WHERE email='$email'";


//mysqli_query($conn,$q1);

header('location:cust_update.php');

?>