<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<link href="logo-01-01-01.png" rel="shortcut icon">
<title>Interactive Learnining</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

.img {
    background-image: url('E.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
     padding: 20px;

  }






input[type=text], input[type=password] {
    width: 100%;
    padding: 10px 10px;
    margin: 8px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 20px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: 100%;
    padding: 10px 18px;
    background-color: #f44336;
}


.container {
    padding: 16px;
    background-color: rgba(0,0,0,.3); 
    width:  800px;
    
    margin: 0 auto;
    margin-top: 90px;
    padding-top: 10px;
    padding-left: 50px;
    border-radius: 15px;
     -webkit-border-radius:15px;
     -o-border-radius:15px;
     -moz-border-radius:15px;
   

}

span.psw {
    float: right;
    padding-top: 16px;
}

.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}

.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<div class="img">
    <div class="container">

    <div class=" w3-center w3-JUMBO  w3-text-white">
   <h1 class="w3-animate-zoom"> <b>Login Form</b></h1>
    

 </div>



<form method="post" action="login.php">
 <div class="  w3-text-white w3-xlarge ">

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="role"><b>Role</b></label>
    <input  type="text" list="role" placeholder="Enter Your Role" name="role">
  <datalist id="role">
    <option value="Admin">
    <option value="Parent">
    <option value="Teacher">
  </datalist>


        
    <button class="w3-button w3-section w3-teal w3-ripple" type="submit" name="submit_btn">Log In</button>

   
    <button class=" w3-section w3-button cancelbtn" type="button" id = "cancle_btn" >Cancel</button>
    <script type="text/javascript">
    document.getElementById("cancle_btn").onclick = function () {
        location.href = "welcome.php";
    };
</script>
   
      
  
  </div>

   </div>

 
</form>
</div>

</body>
</html>
