<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> username </th>
 <th> email </th>
 <th> phone </th>
 <th> address</th>
 <th> Etype </th>

c </tr >

 <?php
 $conn=mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'admindb');
/*
 $email=$_POST['email'];
 $uname=$_POST['uname'];


 //$q = "SELECT * from login where uname='$uname' and email='$email'";
 //$q2 = "SELECT * from customer where uname='$uname' and email='$email'";
/*$q1 = "create trigger update_cus after delete on customer for each row
      -> begin
      -> insert into customer values ($email);
      -> end;
      "

		$re=mysqli_query($conn,$q2);
		$num=mysqli_num_rows($re);
		if($num==0){
			echo "123";
		}
		else{
			//mysqli_query($conn,$q2);
			echo "string";
		}

			
			//header("")
 $query = $conn->query($q);
//$query1 = $conn->query($q1);
*/

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['uname'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['phone'];  ?> </td>
 <td> <?php echo $res['address'];  ?> </td>
 <td> <?php echo $res['etype'];  ?> </td>
 </tr>


 <?php 
 }
  ?>
  <div align="center">
  	<table width="600" border="1" cellpadding="1" cellspacing="1" align="center"><br>
  		<tr>

  			<th>event type</th>
  			<th>pack_amt</th>
  			<th>event_id</th>
  		</tr>
  		<br>
  		<br>

  		
  <?php 

   $sql="SELECT * FROM PACKAGE";
  $query = mysqli_query($conn,$sql);
  while($package=mysqli_fetch_assoc($query)){
  	echo "<tr>";
  	
  	echo "<td>".$package['etype']."</td>";
  	echo "<td>".$package['pamt']."</td>";
  	echo "<td>".$package['eid']."</td>";
  	echo "</tr>";
  }

   ?>
  	</table>
  </div>
  <br><br>
 
 </table>  
<td> <button class="btn-primary btn"> <a href="info.php" class="text-white"> back</a> </button> </td>

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>