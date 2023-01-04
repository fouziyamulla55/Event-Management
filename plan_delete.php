<?php

$conn=mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'admindb');

$email = $_GET['email'];

$q = " DELETE FROM planner WHERE email='$email' ";

mysqli_query($conn,$q);

header('location:plann_update.php');

?>