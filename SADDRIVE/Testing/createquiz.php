<?php
session_start();
  
  $db = mysqli_connect("127.0.0.1", "root", "", "registration");
  ?>

 <?php include 'database.php'; ?>
<?php 
   if(isset($_POST['submit'])){
           $question_number = $_POST['question_number'];
           $question_text = $_POST['question_text'];
            $correct_choice = $_POST['correct_choice'];


            $choices = array();
            $choices[1]= $_POST['choice1'];
            $choices[2]= $_POST['choice2'];
            $choices[3]= $_POST['choice3'];
            $choices[4]= $_POST['choice4'];
            

        $query = "INSERT INTO `questions` (question_number, text) VALUES('$question_number','$question_text')";

        $insert_row = $mysqli->query($query) or die($mysqli->error._LINE_);

        if($insert_row){
             foreach($choices as $choice => $value) {
              if($value != ''){
                if($correct_choice == $choice){
                  $is_correct = 1;
                } else {
                  $is_correct = 0;
                }


        $query = "INSERT INTO `choices` (question_number, is_correct,  image) VALUES('$question_number','$is_correct','$value')";

        $insert_row = $mysqli->query($query) or die($mysqli->error._LINE_);

        if($insert_row){
          continue;
        } else{
          die('Error : ('.$mysqli->error . ') '. $mysqli->error);
                    }
              }
             }
             $msg = 'Question has been Added';

        }
   }


$query = "SELECT * FROM `questions`";

$questions = $mysqli->query($query) or die($mysqli->error._LINE_);
$total = $questions->num_rows;
$next = $total+1;


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
    background-image: url('quiz.jpg');
    height: 200px;
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

input[type=text] {
    width: 80%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=number] {
    width: 30%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
 .signupbtn {
  background-color:white;
  float: right;   
 padding: 14px 20px;
  width: 20%;
  border-radius: 12px;
 background-position: center; 
}
@media screen and (max-width: 300px) {
    .signupbtn {
       width: 100%;
    }
}

.w3-button{
  width: 140px;
  height: 50px;
  border-radius: 12px;
  float: right;
  border-color: black;
}





</style>
</head>
<body>

<div class="header">
   <div class=" w3-center w3-JUMBO w3-wide  w3-text-white">
   <h1 class="w3-animate-zoom container1" > <b>CREATE QUIZ</b></h1>


</div>
</div >

<div class="topnav">


 <a href="logout.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:25%"><b>Logout</b></a>
  <a href="prevques.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:25%"><b>Questions</b></a>
   <a href="performancereportt.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:25%"><b>Performance Report</b> </a>
 <a href="hometeacher.php" class="w3-bar-item w3-button w3-mobile w3-large" style="width:25%"><b>Back</b></a>

 

 
  
</div>

<div class="container ">
   <b><p>Previous Question numbers:</b>
<?php


//question retrieve
  $db = mysqli_connect("localhost", "root", "", "registration");
 $query = "SELECT * FROM `questions`";
 $results = $mysqli->query($query) or die($mysqli->error._LINE_);
$total = $results->num_rows;
 
 echo '<b>'; 
 echo $total;
 echo "</b>";

  
  ?></p>
    <h2 ><b> <center> Add A Question </center></b></h2>

    <?php 
      if(isset($msg)){

        echo '<p>'.$msg.'</p>';
      } ?>
    <form method="post" action="createquiz.php">
      <p>
        
        <label > <b> Question Number </b></label>
        <input type="number" name="question_number"/>
      </p>
      <p>
        
        <label><b>Question Text </b></label>
        <input type="text" name="question_text"/>
      </p>

            <p>
        
        <label><b> Choice 1 </b></label>
    <label for="image"><b>Upload Image1 </b></label>
    <input type="file" name="choice1" accept="image">
    
       
      </p>

            <p>
        
        <label><b>Choice 2</b></label>
         <label for="image"><b>Upload Image2 </b></label>
    <input type="file" name="choice2" accept="image">
    
      </p>

            <p>
        
        <label><b>Choice 3</b></label>
        <label for="image"><b>Upload Image3 </b></label>
    <input type="file" name="choice3" accept="image">
    
      </p>

            <p>
        
        <label><b>Choice 4</b></label>
        <label for="image"><b>Upload Image4 </b></label>
    <input type="file" name="choice4" accept="image">
    
      </p>

           
      <p>
        
        <label><b>Correct Choice Number:</b></label>
        <input type="number" name="correct_choice"/>
      </p>


             <p> <b>
        
         <input  type="submit" name="submit" class="w3-button w3-section w3-light-green w3-ripple" value="Submit"  /> </b>
      </p>
    </form>

</div>




</body>
</html>
