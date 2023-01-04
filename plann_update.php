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
 <h1 class="text-warning text-center" > Display Planner Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> username </th>
 <th> email </th>
 <th> phone </th>
 <th> address</th>
 <th> pid</th>
 <th> Delete </th>
 <th> Update </th>


 </tr >

 <?php
 
$conn=mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'admindb');
 $q = "select * from planner ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['pname'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
  <td> <?php echo $res['phone'];  ?> </td>
 <td> <?php echo $res['address'];  ?> </td>
  <td> <?php echo $res['pid'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="plan_delete.php?email=<?php echo $res['email']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="plan_updateinfo.php?email=<?php echo $res['email']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  
 	<td> <button class="btn-primary btn"> <a href="info.html" class="text-white"> Back </a> </button> </td>

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>