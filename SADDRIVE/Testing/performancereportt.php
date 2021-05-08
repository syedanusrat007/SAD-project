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
    background-color: rgba(0,0,0,.2); 
    width:  700px;
    
    margin: 0 auto;
    margin-top: 40px;
    padding-top: 10px;
    padding-left: 210px;
    border-radius: 15px;
     -webkit-border-radius:15px;
     -o-border-radius:15px;
     -moz-border-radius:15px;
   

}


.container1 {
    padding: 16px;
    background-color: rgba(0,0,0,.5); 
    width:  400px;
    
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
<a href="logout.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:25%"><b>Logout</b></a>
  <a href="prevques.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:25%"><b>Questions</b></a>
  <a href="createquiz.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:25%"><b>Create Quiz</b> </a>
 <a href="hometeacher.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:25%"><b>Back</b></a>
   

  
</div>




<div class="container w3-center  w3-text-white w3-xlarge">
    
   <?php
echo "<table position = 'center' style='border: solid 2px black; background-color:  #0000FF'>";
 echo "<tr><th>User Name</th><th>Score</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border: 2px solid black; background-color:  #0066FF;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT name,score FROM report"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
   
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 
    </div>
   





</body>
</html>
