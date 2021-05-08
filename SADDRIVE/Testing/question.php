<?php include 'database.php'; ?>
<?php session_start(); ?>

<?php 


$number=(int) $_GET['n'];

$query = "SELECT * FROM `questions`";



$results = $mysqli->query($query) or die($mysqli->error._LINE_);
$total = $results->num_rows;

$query="SELECT * FROM  `questions`
            WHERE question_number= $number";
$result= $mysqli->query($query) or die($mysqli->error._LINE_);

$question=$result->fetch_assoc();

$query="SELECT * FROM  `choices`
            WHERE question_number= $number";
$choices= $mysqli->query($query) or die($mysqli->error._LINE_);


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
     background-position: center;
   padding: 20px;
    text-align: center;
    background-image: url('quiz_time.png');
    height: 200px;
}

.container {
    padding: 16px;
    background-color: rgba(255,255,255,.5); 
    width:  300px;
    
    margin: 0 auto;
    margin-top: 40px;
    padding-top: 20px;
    padding-left: 50px;
    border-radius: 15px;
     -webkit-border-radius:15px;
     -o-border-radius:15px;
     -moz-border-radius:15px;
   

}

.container1 {
    padding: 16px;
    background-color: rgba(255,255,255,.3); 
    width:  100%;
    
    margin: 0 auto;
    margin-top: 40px;
    padding-top: 20px;
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

.img-aspect-16-9 {
    background-repeat: no-repeat;
    background-position: center top;
    background-size: cover;
    height: 0;
    padding-bottom: 56.25%; /* 16:9 */
}

label > input{ /* HIDE RADIO */
  visibility: hidden; /* Makes input not-clickable */
  position: absolute; /* Remove input from document flow */
}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:2px solid transparent;
}
label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:2px solid #f00;
}
.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.column {
    float: left;
    width: 25%;

    padding: 15px;
}



/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.cancelbtn3 {
   background-color: white
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

 .signupbtn {
 
  background-color:white;
   
 padding: 14px 20px;
  width: 20%;
  border-radius: 12px;
 background-position: center; 
}

.zoom {

    transition: transform .2s; /* Animation */
  
    margin: 0 auto;
}

.zoom:hover {
    transform: scale(1.6); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

.w3-button{
  width: 180px;
  height: 70px;
  border-radius: 12px;
 
  border-color: black;
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


<div class="topnav">
 <a href="logout.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:33%"><b>Logout</b></a>

 
  <a href="performancereport.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:33%"><b>Performance Report </b></a>
 <a href="homeparent.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:33%"><b>Back</b></a>

 
  
</div>


</div>
 </!DOCTYPE html>
<html>
    <head>
	<script src="_so/js?//stackoverflow.com/questions/17541614/use-thumbnail-image-instead-of-radio-button" id="so"></script>
<meta charset=utf-8 />
	
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	

<main>
	<div class="container1 ">
		
<div class="current w3-xlarge"> <b>Question <?php echo $question['question_number']; ?> of <?php echo $total;  ?></b></div>
<p class="question w3-text-black w3-xlarge">
	  <?php echo $question['text']; ?>
	</p>
	<form method="post" action="process.php">
		<ul class="choices">
      <div class="row" >       
     
     <?php while ($row = $choices->fetch_assoc()): ?>
             <div class="column"> <div class="zoom"> <label> <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo '<br><td>
          <br> <img src="'.$row['image'].'" width="280px" "height= 250"> </br>
           
          </td></br>'; ?></li></label></div> </div>
            <?php endwhile; ?>
</div> 
 
 	</ul>
		<b><input class = "w3-large w3-button w3-section w3-deep-purple w3-ripple" type="submit" value="Submit"/></b>
		<input type="hidden" name="number" value="<?php echo $number; ?>" />

	</form>
		</div>
</main>

</body>
</html>