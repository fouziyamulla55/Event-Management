<?php

$pname = $_POST['pname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];



if (!empty($pname) || !empty($email) || !empty($phone)  || !empty($address) ){
	$host="localhost";
	$dbUsername="root";
	$dbPasswod="";
	$dbName="admindb";

	//create connection
	$conn=new mysqli($host, $dbUsername, $dbPasswod, $dbName);

	if (mysqli_connect_error()) {
		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$SELECT ="SELECT email From planner Where email = ? Limit 1";
		$INSERT ="INSERT Into planner (pname, email, phone, address) values(?,?,?,?)";
      
      //prepare statement
		$stmt =$conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if ($rnum==0){
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssis", $pname, $email,$phone,$address);
			$stmt->execute();
			header("location:plann_update.php");
		}  else {
			echo "someone already registered using this pname";
            }
            $stmt->close();
            $conn->close();
	
	}
}else {
	echo "all field are required";
	die();
}
?>