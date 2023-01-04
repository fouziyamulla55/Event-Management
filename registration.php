<?php
$uname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$subject=$_POST['sub'];
$message=$_POST['msg'];
$address=$_POST['address'];

if (!empty($username) || !empty($email) || !empty($password) || !empty($phone) || !empty($subject) || !empty($msg) || !empty($address) ){
	$host="localhost";
	$dbUsername="root";
	$dbPasswod="";
	$dbName="database";

	//create connection
	$conn=new mysqli($host, $dbUsername, $dbPasswod, $dbName);

	if (mysqli_connect_error()) {
		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$SELECT ="SELECT email From register Where email = ? Limit 1";
		$INSERT ="INSERT Into register (username, email,password,phno, subject,msg,address) values(?,?,?,?,?,?,?)";
      
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
			$stmt->bind_param("sssisss", $username, $email,  $password, $phone, $subject ,$msg, $address );
			$stmt->execute();
			echo "new record executed sucessfully";
		} else {
			echo "someone already registered using this email";
            }
            $stmt->close();
            $conn->close();
	
	}
}else {
	echo "all field are required";
	die();
}
?>