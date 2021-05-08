<?php
session_start();
  
  $db = mysqli_connect("127.0.0.1", "root", "", "registration");
  ?>
 <?php
        if(isset($_POST['submit'])){
        $db = mysqli_connect("localhost", "root", "", "registration");
        $name=$_SESSION['username'];
        $score=$_SESSION['score'];
       $sql = "INSERT INTO report(name,score) VALUES ('$name','$score')";
       mysqli_query($db, $sql);}
      ?>

  <!DOCTYPE html>
<html lang="en">
<head>
  <link href="logo-01-01-01.png" rel="shortcut icon">
<title>Interactive learning </title>
<link rel="stylesheet" type="text/css" href="style.css"
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
   background-image: url("2.gif");
   background-size: cover;
    background-position: center;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    background-size: cover;
    background-position: center;
    text-align: center;
    background-image: url('review.jpg');
    height: 250px;
}

.container {
    padding: 16px;
    background-color: rgba(0,0,0,.5); 
    width:  800px;
    
    margin: 0 auto;
    margin-top: 40px;
    padding-top: 10px;
    padding-left: 50px;
    border-radius: 15px;
     -webkit-border-radius:15px;
     -o-border-radius:15px;
     -moz-border-radius:15px;
   

}


.container1 {
    padding: 16px;
    background-color: rgba(0,0,0,.5); 
    width:  500px;
    
    margin: 0 auto;
    margin-top: 40px;
    padding-top: 10px;
    padding-left: 50px;
    border-radius: 15px;
     -webkit-border-radius:15px;
     -o-border-radius:15px;
     -moz-border-radius:15px;
   

}




/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33%;
    padding: 15px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.cancelbtn {
   background-image: url('A.jpg'); 
    color: black; 
    width: 200px;
    height: 200px;
    border: 2px solid #555555;
    
  }
  .cancelbtn:hover {
    background-color: #555555;
    color: white;
}

.topnav {
    overflow: hidden;
    background-color: #333;

}

/* Style the topnav links */
.topnav a {
    float: right;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 16px 20px;
    text-decoration: none;

}

/* Change color on hover */

.topnav a:hover {
  background-color: #555;
  color: white;
}

 .signupbtn {
 
  border-radius: 12px; 
width:80px;
height: 40px;
 background-color:white; 
}


/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body>

<div class="header">
  <div class="container1">
   <div class=" w3-center w3-JUMBO w3-wide  w3-text-white">
   <h1 class="w3-animate-zoom"><b>PERFORMANCE REPORT</b></h1>
</div>
</div>
</div >

<div class="topnav">
  <a href="logout.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:33%"><b>Logout</b></a>
  <a href="quiz.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:33%"><b>Quiz</b></a>
 <a href="homeparent.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:33%"><b>Back</b></a>
   

  
</div>




<div class="container w3-text-white w3-large">
    
           <?php  if (isset($_SESSION['username'])) : ?>
       <h1 class="w3-animate-zoom">Username: </h1>
       <h1 class="w3-animate-zoom"><strong><?php echo strtoupper($_SESSION['username']); ?></strong></h1>
       <?php endif ?>

        <p><b>Congratulations!</b></p>
        <p>Final Score: <?php echo $_SESSION['score']; ?></p>
        
  
   <form method="post" action="Performancereport.php">
      <p>
      
        <input type="submit" class ="w3-button w3-section w3-green w3-ripple" name="submit" value="submit" />
      </p>
       </form>
         </div>





</body>
</html>
