


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
     background-position: center;
    padding: 20px;
    text-align: center;
    background-image: url('quiz.jpg');
    height: 250px;
}

/* Style the top navigation bar */
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


.container {
    padding: 16px;
    background-color: rgba(0,0,0,.6); 
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

.container1 {
    padding: 16px;
    background-color: rgba(255,255,255,.3); 
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



</style>
</head>
<body>

<div class="header">
   <div class=" w3-center w3-JUMBO w3-wide  w3-text-white">
   <h1 class="w3-animate-zoom container" > <b> Previous Questions</b></h1>


</div>
</div >

<div class="topnav">
 <a href="logout.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:25%"><b>Logout</b></a>
  <a href="createquiz.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:25%"><b>Create Quiz</b> </a>
 
  <a href="performancereportt.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:25%"><b>Performance Report</b> </a>
 <a href="hometeacher.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:25%"><b>Back</b></a>

 
  
</div>



<div class="container1 w3-xlarge">
   
<?php


//question retrieve
  $db = mysqli_connect("localhost", "root", "", "registration");
  $result = mysqli_query($db, "SELECT * FROM questions");

  
  while ($row = mysqli_fetch_array($result)) {

 

    echo '
            <b><p>'.$row['question_number'].'.  
           '.$row['text'].'</p></b>
            
          ';

}

  
  ?>
</div>

</body>
</html>