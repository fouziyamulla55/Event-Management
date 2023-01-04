<?php
$uname = $_POST['uname'];
$email = $_POST['email'];

if (!empty($uname) || !empty($email)){
	$host="localhost";
	$dbUsername="root";
	$dbPasswod="";
	$dbName="admindb";

	//create connection
	$conn=new mysqli($host, $dbUsername, $dbPasswod, $dbName);

	if (mysqli_connect_error()) {
		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		//$SELECT ="SELECT email From customer Where email = ? Limit 1";
		$sql ="SELECT * From login Where uname ='".$uname."' AND email ='".$email."' limit 1";
		$re=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($re);
		if($num==1){
			echo "some one registered using this email";
		}
		else{
		$INSERT ="INSERT Into login (uname, email) values(?,?)";
      
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ss", $uname, $email );
			$stmt->execute();
			header("location:package.php");
			
		}
           // $stmt->close();
            $conn->close();
	
	}
}else {
	echo "all field are required";
	die();
}
?>