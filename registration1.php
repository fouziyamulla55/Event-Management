<?php

$con=mysqli_connect('127.0.0.1','root','');
if ($con) {
	echo "connection successful";	
}else{
	echo "no connection";
}

if (!mysql_select_db($con,'testdb')) {
	echo "database not selected";
}
$uname=$_POST['uname'];
$email=$_POST['eml'];
$password=$_POST['psw'];
$phno=$_POST['phno'];
$subject=$_POST['sub'];
$msg=$_POST['msg'];
$address=$_POST['add'];

$sql="INSERT INTO registration(uname,email,password,phno,subject,msg,address) VALUES('$uname','$email','$password','$phno','$subject','$msg','$address') ";
if(!mysql_query($con,$sql))
{
	echo "not inserted";

}
else
{
	echo "inserted";
}

header("refresh:2; url=index.html");

?>