<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phone)){
	$host="localhost";
	$dbUsername="root";
	$dbPasswod="";
	$dbName="admindb";

	//create connection
	$conn=new mysqli($host, $dbUsername, $dbPasswod, $dbName);

	if (mysqli_connect_error()) {
		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$sql ="SELECT * From admin Where username ='".$username."' AND email ='".$email."' AND password ='".$password."' limit 1";
		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)==1){
			echo "you have successfully logged in";
			header('location:info.html');
			//exit();

		}else{
			echo "unauthorized log-in";
			exit();
		}
}
}

?>