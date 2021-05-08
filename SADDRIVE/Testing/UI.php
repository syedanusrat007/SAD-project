<?php
session_start();
  
  $db = mysqli_connect("127.0.0.1", "root", "admin", "registration");

  if (isset($_POST['login_btn'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
   $password = mysqli_real_escape_string($db, $_POST['password']);
  
   $role = mysqli_real_escape_string($db, $_POST['role']);
   $password = md5($password);
   $sql = "SELECT *FROM users WHERE username='$username' AND password = '$password'";

   $res =  mysqli_query($db, $sql);

   if (mysqli_num_rows($res)==1)
  {
     $_SESSION['message'] = "successfully logged in";
          $_SESSION['username'] = $username;
          header("location:home.php");
  }else{
      $_SESSION['message'] = "Username/Password not matching";
  }
}

?>



<!DOCTYPE html>
<html>
<title>Interactive Learnining</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('C.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
    filter: blur(5px);
    -webkit-filter : blur(5px);


}
</style>
<body>

<div class="bgimg" > </div>

  <div class= "w3-text-white">
  <div class="w3-display-middle w3-JUMBO w3-wide w3-serif">
   <h1 class="w3-animate-zoom">Welcome to Interactive Learning</h1>
    
  </div>
  <div class="w3-display-topright w3-container w3-large">
    <p>   <button id="log_in" class="w3-button w3-black" >Log In</button>

<script type="text/javascript">
    document.getElementById("log_in").onclick = function () {
        location.href = "login.php";
    };
</script></p>

    <p> <button id="Sign_Up" class="w3-button w3-black" >Sign Up</button>

<script type="text/javascript">
    document.getElementById("Sign_Up").onclick = function () {
        location.href = "signup.php";
    };
</script></p>
</div>
  </div>
  <div class="w3-display-bottomright w3-container">
    <p class="w3-xlarge w3-text-white">This System will help the autistic kids to learn more about behaviour and manner by watching videos and images. Parents and teacher can also use this system to assest the kids. </p>
   
 
  </div>





</body>
</html>
