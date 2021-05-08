<?php include('server.php') ?>



<!DOCTYPE html>
<html>
<link href="logo-01-01-01.png" rel="shortcut icon">
<title>Interactive Learnining</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('C.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
   
    -webkit-filter: opacity(30%); /* Safari */
    filter: opacity(30%);
     padding: 20px;


}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 400px;
}


.dropbtn {

  padding-top: 20px;
    padding: 16px;
    padding-right: 20px;
    font-size: 40px;
    border: black;


}

.dropdown {
   width: 30%;
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #0aa5e1;
}

.w3-display-topright{position:absolute;right:50px;top:0px;}





</style>
<body>

<div class="bgimg" > </div>
 
 
  <div class= " w3-text-black ">
  <div class="w3-display-middle w3-JUMBO  w3-serif">
     <img class="w3-animate-zoom center"  src="logo-01-01-01.png" alt="LOGO" width="500" height="250"  > 
   <h1 class="w3-animate-zoom w3-serif w3-center"> <b> WELCOME TO </b> </h1>
   <h2 class="w3-animate-zoom w3-wide  w3-center w3-serif"> <b> INTERACTIVE LEARNING </b></h2>
  
  </div>
</div>  

  <div class="w3-display-topright w3-large w3-animate-zoom">

<div class="dropdown">
  
  <button class="dropbtn"> <i class="fa fa-bars" ></i></button>
  <div class="dropdown-content">
    <a href="about.php">About</a>
    <a href="login.php">Log In</a>
    <a href="signup.php">Sign Up</a>
  </div>
</div>


 


</div>
  </div>
  

</body>
</html>
