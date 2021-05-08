  <?php session_start(); ?>

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
    background-image: url('quiz_time.png');
    height: 250px;
}

.container {
    padding: 16px;
    background-color: rgba(255,255,255,.3); 
    width:  300px;
    
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
    width:  600px;
    
    margin: 0 auto;
    margin-top: 40px;
    padding-top: 10px;
    padding-left: 50px;
    border-radius: 15px;
     -webkit-border-radius:15px;
     -o-border-radius:15px;
     -moz-border-radius:15px;
   

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

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown {
    float: left;
    overflow: hidden;
    padding-left: 140px;

}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}


.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create three equal columns that floats next to each other */

</style>
</head>
<body>

<div class="header">
  <div class="container">
   <div class=" w3-center w3-JUMBO w3-wide  w3-text-black">
   <h1 class="w3-animate-zoom w3-center"><b>QUIZ</b></h1>

</div>
</div>
</div >





</div>
  <!DOCTYPE html>
<html>
    <head>
  <meta charset="utf-8"/> 
  <title>Interactive learning </title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<div class="topnav">
   <a href="logout.php" class="w3-bar-item w3-button w3-large w3-mobile" style="width:33%"><b>Logout</b></a>
 
  <a href="Performancereport.php" class="w3-bar-item w3-large w3-button w3-mobile" style="width:33%"><b>Performance Report</b></a>
  

  <a href="homeparent.php" class="w3-bar-item w3-button w3-large w3-mobile" style="width:33%"><b>Back</b></a>

 
  
</div>
<body>
  

<main>
  <div class="container1 w3-xlarge">
    
        <h2> Okay! You're done with your test</h2>

        <p>Congratulations!</p>
        <p>Final Score: <?php echo $_SESSION['score']; ?></p>
        <a href="question.php?n=1" class="w3-button w3-section w3-deep-purple w3-ripple">Take Again</a>
    </div>
</main>

</body>
</html>