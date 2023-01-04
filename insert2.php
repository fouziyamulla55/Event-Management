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
		$s ="SELECT * From login Where email='$email' and uname='$uname'" ;
		$re=mysqli_query($conn,$s);
		$num=mysqli_num_rows($re);
		if($num==1){
			echo "user already taken";
		}
		else{
			$reg="INSERT into login(uname,email) values( '".$email."','".$uname."')";
			mysqli_query($conn,$reg);
			echo "successful";
			header("book.php");
		}
	}
}

		/*$INSERT ="INSERT Into login (uname, email) values(?,?)";
      
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
			$stmt->bind_param("ss", $uname, $email );
			$stmt->execute();
			//header("location:package.php");
		} else {
			echo "someone already registered using this email";
            }
            $stmt->close();
            $conn->close();
	
	}
}else {
	echo "all field are required";
	die();
}*/
?>