<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<link href="logo-01-01-01.png" rel="shortcut icon">
<title>Interactive Learnining</title>
<link rel="stylesheet" href="style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border-radius: 20px;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=email], input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
      border-radius: 20px;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
      border-radius: 20px;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
    background-color: rgba(0,0,0,.3); 
    width:  800px;
    
    margin: 0 auto;
    margin-top: 1px;
    padding-top: 10px;
    padding-left: 50px;
    border-radius: 15px;
     -webkit-border-radius:15px;
     -o-border-radius:15px;
     -moz-border-radius:15px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

.img {
    background-image: url('E.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
     padding: 20px;
  }

</style>
<body>

  <div class="img">
    <div class="container">

    <div class=" w3-center w3-JUMBO   w3-text-white">
   <h1 class="w3-animate-zoom"><b> Signup Form </b></h1>
    

 </div>

<form method="post" action="signup.php" style="border:1px solid #ccc">
  <div class="  w3-text-white w3-large ">   

   
    
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="email"><b>Email</b></label> <br>
    <input type="email" placeholder="Enter Email" name="email" required><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="password2"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password2" required>


    <label for="role"><b>Role</b></label>
    <input  type="text" list="role" placeholder="Enter Your Role" name="role">
  <datalist id="role">
    <option value="Admin">
    <option value="Parent">
    <option value="Teacher">
  </datalist>
    
    
    
   
    <div class="clearfix">
      <button type="button" id = "cancle_btn" class="  w3-section     cancelbtn">Cancel</button>
       <script type="text/javascript">
    document.getElementById("cancle_btn").onclick = function () {
        location.href = "Welcome.php";
    };
</script>
      <button type="submit" name="signup_btn" class="    w3-section w3-teal w3-ripple signupbtn">Sign Up</button>
	  <p>
      Already a member? <a href="login.php">Login</a>
    </p>

    </div>
  </div>
</form>

</body>
</html>
