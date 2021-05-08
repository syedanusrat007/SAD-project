<?php
session_start();
  
  $db = mysqli_connect("127.0.0.1", "root", "", "registration");
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
}

/* Style the header */
.header {
    background-color: #f1f1f1;
     padding: 20px;
     background-position: center;
    background-size: cover;
    text-align: center;
    background-image: url('D.jpg') ;
    height: 250px;


}

.container {
    padding: 16px;
    background-color: rgba(255,255,255,.5); 
    width:  50%;
    
    margin: 0 auto;
    margin-top: 40px;
    padding-top: 10px;
    padding-left: 30px;
    border-radius: 15px;
     -webkit-border-radius:15px;
     -o-border-radius:15px;
     -moz-border-radius:15px;
   }

   .container1 {
    padding: 16px;
    background-color: rgba(255,255,255,.6); 
    width:  30%;
     height: 85%;
    margin: 0 auto;
    margin-top: 40px;
    padding-top: 10px;
    padding-left: 30px;
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
    padding-left: 300px;

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
.column {
    float: left;
    width: 50%;
    padding: 15px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.cancelbtn1 {
   background-image: url('daily2.jpg'); 
    color: black; 
    width: 400px;
    height: 300px;
    border: 2px solid #555555;
     background-position: center;
     display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
    
    
  }

  .cancelbtn1:hover {
   background-color: #3e8e41
}

.cancelbtn1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.cancelbtn2 {
   background-image: url('manners1.jpg'); 
     color: black; 
    width: 400px;
    height: 300px;
    border: 2px solid #555555;
     background-position: center;
     display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
    
    
  }

  .cancelbtn2:hover {
   background-color: #3e8e41
}

.cancelbtn2:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.cancelbtn3 {
   background-image: url('celebration1.jpg'); 
     color: black; 
    width: 400px;
    height: 300px;
    border: 2px solid #555555;
     background-position: center;
     display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
    
    
  }

  .cancelbtn3:hover {
   background-color: #3e8e41
}

.cancelbtn3:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


.cancelbtn4 {
   background-image: url('national1.jpg'); 
     color: black; 
    width: 400px;
    height: 300px;
    border: 2px solid #555555;
     background-position: center;
     display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
    
    
  }

  .cancelbtn4:hover {
   background-color: #3e8e41
}

.cancelbtn4:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.bg {
    /* The image used */
    background-image: url("1.gif");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
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
   <div class=" w3-center w3-JUMBO w3-wide  w3-text-black container1">
    <?php  if (isset($_SESSION['username'])) : ?>
      <p><h1 class="w3-animate-zoom"><b>WELCOME</h1><br><strong><h1><?php echo strtoupper($_SESSION['username']); ?></b></h1></strong></p>
    <?php endif ?>
   

</div>
</div >

<div class="topnav">
  <a href="logout.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:50%"><b>Logout</b></a>


  
  
    <div class="dropdown w3-center">
    <button class="dropbtn w3-mobile w3-center w3-large" ><b>Upload</b>
      <i class="fa fa-caret-down" ></i>
    </button>
    <div class="dropdown-content w3-large">
      <a href="FinalUploadimage1.php"><b>Image</b></a>
      <a href="FinalUploadvideo1.php"><b>Video</b></a>
         </div>
  </div> 

 
  
  
</div>

<div class="bg">

<div class="row" >
  <div class="column w3-center">
    <div class="container">
    <h2><b>Daily Activities</b></h2>
     </div>
     <button  id = "cancle1_btn" class="cancelbtn1" ></button>

      <script type="text/javascript">
    document.getElementById("cancle1_btn").onclick = function () {
        location.href = "dailyactivities.php";
    };
</script>

    
  </div>
  <div class="column w3-center">
    <div class="container">
    <h2><b>Manners</b></h2>
    </div>
      <button type="button" id = "cancle2_btn" class="cancelbtn2" ></button>
       <script type="text/javascript">
    document.getElementById("cancle2_btn").onclick = function () {
        location.href = "manners.php";
    };
</script>
    
  </div>
  </div>

<div class="row" >
  <div class="column w3-center">
    <div class="container">
    <h2><b>Occasion</b></h2>
    </div> 
       <button type="button" id = "cancle3_btn" class="cancelbtn3" ></button>
   <script type="text/javascript">
    document.getElementById("cancle3_btn").onclick = function () {
        location.href = "Occasion.php";
    };
</script>
  
  </div>

   <div class="column w3-center">
    <div class="container">
    <h2><b>Culture</b></h2>
    </div> 
       <button type="button" id = "cancle4_btn" class="cancelbtn4" ></button>
   <script type="text/javascript">
    document.getElementById("cancle4_btn").onclick = function () {
        location.href = "culture.php";
    };
</script>
    
  </div>

</div>
</div>


</body>
</html>
