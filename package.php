<?php
$conn=mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'admindb');


$sql="SELECT * FROM PACKAGE";

		$result = mysqli_query($conn, $sql);
 
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>package details</title>
  </head>
  <body>
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
  while($package=mysqli_fetch_assoc($result)){
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
 
   <div class="hero">

		
  <div>
  	<br><br><br>
  <h1 align="center"> book-now</h1>
  <div align="center">
  		 <form class="input-group" id="register" action="book.php" method="POST">
  		 	<input type="text" class="input-field" name="uname" placeholder="enter user name" required>
				<input type="email" class="input-field" name="email" placeholder="enter email" required>
				<input type="text" class="input-field" name="phone" placeholder="enter phone no" required>
				<input list="events" class="input-field" name="etype" placeholder="enter event type"  required >
				<datalist id="events">
 				 <option value="college events">
 				 <option value="business events">
 				 <option value="weddings">
				</datalist> 
				<input type="text" class="input-field" name="address" placeholder="enter your address" required>
				<input type="text" class="input-field" name="details" placeholder="enter event details" required>
				<input type="text" class="input-field" name="eaddress" placeholder="event address" required>
				<input type="date" class="input-field" name="edate" placeholder="event date" required>
				<button type="submit" class="submit-btn">BOOK</button>
			</form>
		</div>
		</div>
	</div>
  </div>
  
  </body>
  <style type="text/css">
*{
	margin: 0;
	padding:0;
	font-family: sans-serif;

}
.hero{
	height: 100%;
	width:100%;
	background-image: linear-gradient(rgba(0,0,0,0.4)),url('../images/3.jpeg');
	background-position: center;
	background-size: cover;
	position: relative;

}
.form-box{
	width: 380px;
	height: 350px;
	position: relative;
	margin: 6% auto;
	background: #ccc;
	padding: 5px;
	overflow: hidden;
}
.button-box{
	width: 220px;
	margin: 35px auto;
	position: relative;
	box-shadow: 0 0 20px 9px #ff61241f;
	border-radius: 360px;
}
.toggle-btn{
	padding: 10px 30px;
	cursor: pointer;
	background-color: transparent;
	border: 0;
	outline: none;
	position: relative;
}
#btn{
	top: 0;
	left: 0;
	position: absolute;
	width: 110px;
	height: 100%;
	background: linear-gradient(to right,#ff105f,#ffad06);
	border-radius: 30px;
	transition: 0.5s;
}
.input-group{
	top: 180px;
	position: absolute;
	width: 280px;
	transition: .5s;

}
.input-field{
	width: 100%;
	padding: 10px 0;
	margin: 5px 0;
	border-right: 0;
	border-top:0;
	border-left: 0;
	border-bottom:1px solid #999;
	outline: none;
	background: transparent; 
}
.submit-btn{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: linear-gradient(to right,#ff105f,#ffad06);
	border:0;
	outline: none;
	border-radius: 30px;

}
.check_box{
	margin: 30px 10px 30px 0;
}
span{
	color: #777;
	font-size: 12px;
	bottom: 68px;

}
#login{
	left: 50px;

}
#register{
	left: 450px;
}
</style>
  </html>