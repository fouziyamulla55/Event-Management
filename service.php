<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
    echo 'not connected to the server';
}
if(!mysqli_select_db($con,'fotografi'))
{
    echo 'database not connected';
}
if(isset($_POST['foot']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feed = $_POST['feed'];

    $sql = "INSERT INTO feedback(name,email,feed) VALUES ('$name','$email','$feed')";

    if(!mysqli_query($con,$sql))
    {
        echo 'not inserted';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>FotoGrafi</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="IMAGES/icon2.png" type="image/gif">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="all.css">
    <style>
        .par1{
		
		background-image: url(IMAGES/v.jpg);
		min-height: 100%;
	
	}
    </style>
</head>
<body>
        <div class="par1"> 
                <div id="overlay"></div>
            <header class="header_area">
                <nav class="navbar navbar-expand-md ">
                    
                        <a class="navbar-brand" id="logo" href="index.html"><span class="logow">Foto</span><span class="logox">Grafi</span></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                                <span class="navbar-toggler-icon">
                                        <div style="color:wheat;padding:1%;">
                                        <span><i class="fas fa-bars"></i></span>
                                    </div>
                                    </span>
                        </button>
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto ">
                                    <li class="nav-item"><a class="nav-link hm" href="index.html">Home</a></li> 
                                    <li class="nav-item"><a class="nav-link hm" href="gallery.html">Gallery</a></li>
                                    <li class="nav-item active"><a class="nav-link hm" href="services.html">Services</a></li>
                                    <li class="nav-item"><a class="nav-link hm" href="aboutus.html">About</a></li>
                                    <li class="nav-item"><a class="nav-link hm" href="#contact">Contact</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                            </ul>
                        </div> 
                    
                </nav>
            </header>
            <div class="h">
                <span>SERVICES</span>
            </div>
        </div>
<div class="row" style="background-color:#04091e;">
    <div class="col-sm-2">

    </div>
        <div class="col-sm-8">
         <div class="fmc">
             
                        
                 
                 <form action="/action_page.php">
                    <h3 style="padding-right:65%;padding-bottom:2%;">ENQUIRY</h3>
                    <div class="form-inline">
                            <label for="Name">Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <input type="text" class="form-control" id="name" placeholder="e.g : John">
                          </div>
                          <br>
                      
                        <div class="form-inline">
                          <label for="email">Email address : &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</label>
                          <input type="email" class="form-control" id="email" placeholder="e.g : John@Doe.com">
                        </div>
                        <br>
                        <div class="form-inline">
                          <label for="pwd">Password : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                          <input type="password" class="form-control" id="pwd" placeholder="........">
                        </div>
                        <br>
                        <div class="form-inline">
                                <label for="phon">Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                                <input type="phon" class="form-control" id="phone" placeholder="e.g : +1 6789554">
                        </div>
                        <br>
                        <div class="form-inline">
                            <label for="eve">Event Address :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <input type="text" class="form-control" id="location" placeholder="e.g : Belgaum">
                        </div>
                        <br>
                        <div class="form-inline">
                                <label for="sel1">Services : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <select class="form-control" id="sel1">
                                  <option>WEDDING</option>
                                  <option>PRE-WEDDING</option>
                                  <option>POST-WEDDING</option>
                                  <option>EVENT-PHOTOGRAPHY</option>
                                  <option>POTRAIT-PHOTOGRAPHY</option>
                                  <option>KIDS-PHOTOGRAPHY</option>
                                  <option>TRAVEL-PHOTOGRAPHY</option>
                                  <option>LIFESTYLE-PHOTOGRAPHY</option>
                                  <option>SPORTS-PHOTOGRAPHY</option>
                                  <option>FOOD-PHOTOGRAPHY  </option>
                                </select>
                              </div>
                              <br>
                              <div class="form-inline">
                                    <label for="sel2">Price per full day :&nbsp;</label>
                                    <select class="form-control" id="sel2">
                                      <option>LESS THAN less than ₹ 10,000</option>
                                      <option> ₹ 10,000 – 19,999</option>
                                      <option>₹ 20,000 – 34,999</option>
                                      <option>₹ 35,000 – 49,999</option>
                                      <option> from ₹ 50,000</option>
                                 
                                    </select>
                                  </div>
                                  <br>
                      
                        <div class="form-inline">
                             <label for="tim">Date and Time :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <input type="datetime-local" class="form-control" id="time" placeholder="e.g : 10AM">
                        </div>
                        <br>                                                                                          
                    
                       <div style="padding-left:20%;padding-top:3%;padding-bottom:5%;"><button type="submit" class="btn btn-primary" style="font-size:80%;background-color: wheat;color: #04091e;">Submit</button></div>
                      </form>
                   
                </div>  
                </div>
                <div class="col-sm-2">

                </div>
</div>
       

             
           


        <div id="contact" class="container-fluid" >
                <h2 class="text-center" style="color:#fff">CONTACT</h2>
                <div class="row des">
                  <div class="col-sm-4 des">
                    <p style="color:#fff">Contact us and we'll get back to you within 24 hours.</p>
                    <p style="color:#fff"><span><i class="fas fa-map-marker-alt"></i></span>   &nbsp;Chicago, US</p>
                    <p style="color:#fff"><span ></span><i class="fas fa-phone"></i></span>&nbsp;+00 1515151515</p>
                    <p style="color:#fff"><span></span><i class="fas fa-envelope"></i></span> &nbsp;myemail@something.com</p>
                  </div>
                  <div class="col-sm-4 slideanim slide des ">
                    <div class="row">
                      <div class="col-sm-6 form-group des ">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required="">
                      </div>
                      <div class="col-sm-6 form-group des">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required="">
                      </div>
                    </div>
                    <textarea class="form-control" id="comments" name="feed" placeholder="Feedback" rows="5"></textarea><br>
                    <div class="row">
                      <div class="col-sm-2 form-group des">
                        <button class="btn btn-default pull-right" type="submit" name="foot">Send</button>
                        </div>
                        <div class="col-sm-10 form-group des"><ul class="clear">
                                <a  href="gallery.html"><i class="fab fa-google-plus-g gp"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a  href="gallery.html"><i class="fab fa-twitter tw" ></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a  href="gallery.html"><i class="fab fa-facebook-f fb"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a  href="gallery.html"><i class="fab fa-instagram insta" ></i></a>
                            </ul></div>
                        
                    </div>
                    </div>
                    <div class="col-sm-4 form-group desw" >
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26580.508969862873!2d74.51936044895778!3d15.818037685830799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1541835605533" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                            </iframe>
                    </div>
        
                </div>
                </div>


</body>
</html>