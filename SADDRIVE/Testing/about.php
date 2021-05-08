<?php include('server.php') ?>



<!DOCTYPE html>
<html>
<link href="logo-01-01-01.png" rel="shortcut icon">
<title>Interactive Learnining</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%
     margin: 0;
  background-image: url("3.gif");
   background-size: cover ;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;}

.container {
    padding: 16px;
    background-color: rgba(0,0,0,.9); 
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



</style>
<body>


 
 
 <div class= " w3-text-white ">
  <div class="w3-display-middle w3-JUMBO container">
    <b class="w3-xxlarge w3-text-white" >What is our system is about?</b>
     <p class="w3-xlarge w3-text-white">This System will help the autistic kids to learn more about behaviour and manner by watching videos and images. 
      Parents and teacher can also use this system to assist the kids.We have four parts in our system: <br><br>

     <b>Daily Activities:</b> Children can learn how to eat properly, brush teeth ,table manner, recognize danger signs . <br><br>

     <b>Manners:</b> Can learn Use of dustbin,how to behave in public place, greetings to guest.<br> <br>

  <b>Occasions:</b> How to celebrate eid,puja,christmas etc and behave good in parties. <br><br>
  <b>Culture:</b> How to celebrate Pahela Baisakh,Independence Day,Victory day etc. <br> 

   </p>
  

   
 </div>  

  </div>  

  <div class="w3-display-topright w3-container w3-large">
    <p>   <button id="Home" class="w3-button w3-black" >Home</button>

<script type="text/javascript">
    document.getElementById("Home").onclick = function () {
        location.href = "Welcome.php";
    };
</script></p>

    
  
</div>
</body>
</html>
