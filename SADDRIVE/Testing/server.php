<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$role   ="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('127.0.0.1', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['signup_btn'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
   $role = mysqli_real_escape_string($db, $_POST['role']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
   if (empty($role)) { array_push($errors, "role is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $password2) {
	array_push($errors, "The two passwords do not match");
   echo'<script>alert("The two passwords do not match")</script>';
  
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
      echo'<script>alert("Username already exists")</script>';
      echo  "Username already exists";
     
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
      echo'<script>alert("email already exists")</script>';
    
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password,role) 
  			  VALUES('$username', '$email', '$password','$role')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['id']=$id;
  	$_SESSION['success'] = "You are registered";

    echo "You are registered";
  	
header("location:login.php");
      
  }
}

// LOGIN USER
if (isset($_POST['submit_btn'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $role = mysqli_real_escape_string($db, $_POST['role']);
    // $_POST['uid']=


  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
   if (empty($role)) {
    array_push($errors, "role is required");
  }


     

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {

      $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";

        $user= $results->fetch_assoc();

        $_SESSION['id']=$user['id'];
      //header('location: index.php');

      if( $role=="Admin"){
        
      header('location: homeadmin.php');
    }
  
    elseif( $role=="Parent"){

      header('location: homeparent.php');
    }
	 elseif($role=="Teacher"){
		 header('location: hometeacher.php');
	 }


    }else {
      array_push($errors, "Wrong username/password/role combination");
      
      echo'<script>alert("Opps!!! I think you give Wrong user name or password or role!")</script>';


    }
  }
}

?>
