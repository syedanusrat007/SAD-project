<?php 
date_default_timezone_set('Asia/Dhaka');

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
{
    box-sizing: border-box;
}


body {
  margin: 0;
  background-image: url("2.gif");
   background-size: cover;
    background-position: center;
     
}

textarea{
  width: 400px;
  height: 80px;
  background-color: #fff;
  resize:none;
}
/* Style the header */
.header {
    background-color: #f1f1f1;
     padding: 20px;
    
    background-size: cover;
    text-align: center;
    background-image: url('manners2.jpg');
    height: 250px;
}

.container {
    padding: 16px;
    background-color: rgba(170,0,170,.5); 
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
    background-color: rgba(0,0,0,.5); 
    width:  100%;
    height: 100%;
    background-repeat: repeat;
    
    margin: 0 auto;
    margin-top: 40px;
    padding-top: 10px;
    padding-left: 50px;
    border-radius: 15px;
     -webkit-border-radius:15px;
     -o-border-radius:15px;
     -moz-border-radius:15px;
   

}




/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    width:33%;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}


.w3-button {width:150px; background-color: Black; position: 190px;}
.w3-button1 {width:150px; background-color: blue;}

.column {
    float: left;
    width: 60%;
   
     height: 30%; 
   /* Should be removed. Only for demonstration */
}.column1 {
    float: right;
    width: 40%;
  
    height: 30%; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
    height: 100%;
    width: 100%;
    
      
 
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
    .column {
        width: 100%;
    }
}

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}

 .signupbtn {
 
  float: right;
  border-radius: 12px; 
width:80px;
 background-color:white; 
}
</style>
</head>
<body >




<div class="header">
  <div class="container">
   <div class=" w3-center w3-JUMBO w3-wide  w3-text-white">
   <h1 class="w3-animate-zoom"><b>MANNERS</b></h1>

</div>
</div >
</div>




<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Image')"><b>Image</b></button>
  <button class="tablinks" onclick="openCity(event, 'Video')"><b>Video</b></button>
   <button class="tablinks" onclick="window.location.href='homeparent.php'"><b>Home</b></button>

</div>

<div id="Image" class="tabcontent">
   <div class=" w3-center w3-text-white">
    <button class="w3-button  w3-Black" onclick="plusDivs(-1)">❮ Prev</button>
    <button class="w3-button w3-Black" onclick="plusDivs(1)">Next ❯</button>
  

   <?php


//image retrieve
  $db = mysqli_connect("localhost", "root", "", "registration");
  $result = mysqli_query($db, "SELECT * FROM image WHERE imagetype='Manner'");

  
  while ($row = mysqli_fetch_array($result)) {

         echo "<div class= w3-display-container >";
  echo "<div class=mySlides style=width:100%>";
  echo "<div class = container1  >";
    echo "<div class =row  >";
  echo "<div class =column>";

  $imid= $row['imageid'];

    //image retrieve
   echo "<div class = w3-center>";

    echo '<td>
            <b><p><div class= w3-text-white><font face=arial size=6/>'.$row['imageDescription'].'</font></div></p><b>
            <img id="myImg" src="imgs/'.$row['imageuploaded'].'" style="width:550px;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity""><br>
            
          </td>';

   echo  "</div>";   
    echo  "</div>";


//comment retrieve
          
$db1 = mysqli_connect("localhost", "root", "", "registration");
    $result1 = mysqli_query($db1,"SELECT commentimg.cid, users.username,users.role, commentimg.message, commentimg.date_uploaded FROM commentimg LEFT JOIN users ON commentimg.uid = users.id WHERE imgid='$imid' ORDER BY date_uploaded DESC");

       echo "<div class =column1 >";
 //comment box   S
echo "<b>Comment Here :</b>";

        
 //comment box   S

echo '<tr><td colspan=4>
      <form action="commentUpimgMp.php" method="POST">
        <textarea name="message"></textarea>
        <input type="hidden" name="id" value="'.$imid.'">
        <input type="hidden" name="date" value="'.date('Y-m-d H:i:s').'"> 
        <input type="submit" name="submit" class="w3-button w3-section w3-purple w3-ripple" onclick="myFunction() value="Go">
      </form>
      </td></tr>';

  while ($row = mysqli_fetch_array($result1)) {

    echo '<td>
           <b>Username: </b>'.strtoupper($row['username']).'<br>
             <b>Categoty: </b>'.$row['role'].'<br>
            <b>Date: </b> '.$row['date_uploaded'].'<br>
            <b>Message: </b>'.$row['message'].'<br>
            <br><br>
          </td>';


    }   


 echo "</div>";



echo "</div>";

echo '</div>';


echo '</div>';
echo '</div>';   


    }
  
  ?>

  <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>


</div>

</div>




<div id="Video" class="tabcontent">
   <div class=" w3-center w3-text-white">
     <button class="w3-button  w3-Black" onclick="plusDivs1(-1)">❮ Prev</button>
    <button class="w3-button w3-Black" onclick="plusDivs1(1)">Next ❯</button>

  <?php
$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "registration"; 
$table = "video"; 
 
// Connection to DBase 
mysql_connect($host,$user,$password); 
mysql_select_db($dbase) or die("Unable to select database");

$result= mysql_query( "SELECT * FROM video WHERE type='Manner'" ) 
or die("SELECT Error: ".mysql_error()); 

//print "<table border=1>\n"; 
while ($row = mysql_fetch_array($result)){ 

   echo "<div class= w3-display-container>";
  echo "<div class=Slides style=width:100%>";
  echo "<div class = container1 >";

  echo "<div class =row  >";
  echo "<div class =column>";

$videos_field= $row['filename'];
$video_show= "videos/$videos_field";
$descriptionvalue= $row['description'];
$vid= $row['vid'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<b><font face=arial size=6/>$descriptionvalue</font></b>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><video width='480' controls><source src='$video_show' >Your browser does
not support the video tag.</video></div>";
print "</td>\n";
print "</tr>\n"; 

echo "</div>";

//print "</table>\n";  



//comment retrieve for video

 $db2 = mysqli_connect('localhost', 'root', '', 'registration');
    $result2 = mysqli_query($db2,"SELECT comments.cid, users.username,users.role, comments.message, comments.date_uploaded FROM comments LEFT JOIN users ON comments.uid = users.id WHERE videoid='$vid' ORDER BY date_uploaded DESC  ");

 echo "<div class =column1 >";
  //comment upload video   
echo'Comment here:';

//comment upload video   

echo '<tr><td colspan=4>
      <form action="commentUpvideoMp.php" method="POST">
        <textarea name="message"></textarea>
        <input type="hidden" name="id" value="'.$vid.'">
        <input type="hidden" name="date" value="'.date('Y-m-d H:i:s').'"> 
        <input type="submit" name="submit" class="w3-button w3-section w3-purple w3-ripple" onclick="myFunction() value="Go">
      </form>
      </td></tr>';
  

  while ($row = mysqli_fetch_array($result2)) {

    echo '<td>
            <b>Username: </b>'.strtoupper($row['username']).'<br>
             <b>Categoty: </b>'.$row['role'].'<br>
            <b>Date: <b> '.$row['date_uploaded'].'<br>
            <b>Message: <b>'.$row['message'].'<br>
            <br><br>
          </td>';


    } 

        echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';

echo '</div>';   
            
        


   }    

?> 
 
</div>
</div>






<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

var slideIndex1 = 1;
showDivs1(slideIndex1);


function plusDivs1(n) {
  showDivs1(slideIndex1 += n);
}


function showDivs1(n) {
  var i;
  var x = document.getElementsByClassName("Slides");
  if (n > x.length) {slideIndex1 = 1}    
  if (n < 1) {slideIndex1 = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex1-1].style.display = "block";  
}

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}

function myFunction() {
    alert("Your message has been taken!");
}
</script>

   
</body>
</html> 

