<?php
$uname = $_POST['uname'];
$email = $_POST['email'];

if (!empty($uname) || !empty($email)){
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbName="admindb";

	//create connection
	$conn=new mysqli($host, $dbUsername, $dbPassword, $dbName);

	if (mysqli_connect_error()) {
		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$s ="SELECT * From login Where uname='".$uname."' and email='".$email."'" ;
		$re=mysqli_query($conn,$s);
		$num=mysqli_num_rows($re);
		if($num==0){
			echo "no user found";
			exit();
		}
		else{

			$reg="INSERT into login(uname,email) values( '".$uname."' ,'".$email."')";
			mysqli_query($conn,$reg);
			echo "successful";
			header("location:loginfo.php?email=".$email);
		}
	}
}else {
	echo "all field are required";
	die();
}
?>