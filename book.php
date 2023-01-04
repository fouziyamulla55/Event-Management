<?php
$email = $_POST['email'];
$etype = $_POST['etype'];
$details = $_POST['details'];
$eaddress = $_POST['eaddress'];
$edate = $_POST['edate'];
$uname = $_POST['uname'];
$phone = $_POST['phone'];
$address = $_POST['address'];



if (!empty($email) || !empty($etype) || !empty($details)  || !empty($eaddress)  || !empty($edate) || !empty($uname) || !empty($phone) || !empty($address) ){
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbName="admindb";

	//create connection
	$conn=new mysqli($host, $dbUsername, $dbPassword, $dbName);

	if (mysqli_connect_error()) {
		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$SELECT ="SELECT email From book_now Where email = ? Limit 1";
		$INSERT ="INSERT Into book_now (email, phone,etype,details, eaddress,edate) values(?,?,?,?,?,?)";
      
      //prepare statement
		$stmt =$conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if ($rnum==0){

	
			 $q="INSERT into customer  (uname,email,phone,address,etype) values ('".$uname."','".$email."' ,'".$phone."','".$eaddress."','".$etype."')";
			 $res=mysqli_query($conn,$q);

			 if ($res) {
		$q1="INSERT into events  (etype,uname,email,edate) values ('".$etype."','".$uname."','".$email."' ,'".$edate."')";
		 $res=mysqli_query($conn,$q1);

	} else{
		echo "error";
	}
	
			header('location:index.html');
			//exit();
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sissss", $email,$phone, $etype,$details,$address,$edate );
			$stmt->execute();
			
		}  else {
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