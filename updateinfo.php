<?php

 $conn=mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'admindb');

 if(isset($_POST['done'])){

 $uname = $_POST['uname'];
 $email = $_GET['email'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];
 $q = " update customer set uname='$uname', phone='$phone', address='$address' where email='$email'  ";

 $query = mysqli_query($conn,$q);

 header('location:cust_update.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="uname" class="form-control"> <br>

 <label> Phone: </label>
 <input type="text" name="phone" class="form-control"> <br>

 <label> Address: </label>
 <input type="text" name="address" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>