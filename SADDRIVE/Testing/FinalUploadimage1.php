<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "registration");

  //mysql_select_db("image_upload");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $imagetype = mysqli_real_escape_string($db, $_POST['image']);

    // image file directory
    $target = "imgs/".basename($image);

    $sql = "INSERT INTO image (imagetype,imageDescription,imageuploaded) VALUES ( '$imagetype', '$image_text','$image')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
       echo'<script>alert("Good you have uploaded image successfully")</script>';
    }else{
       echo'<script>alert("Opps!!! Something wrong ,try again")</script>';
    }
  }
  
?>

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
   padding: 60px;
     background-image: url("2.gif");
   background-size: cover;
    background-position: center;
    height: 100%;

  }






input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    border-radius: 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
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

    width: 30%;
    padding: 10px 18px;
    background-color: #f44336;
}


.container {
    padding: 16px;
    background-color: rgba(0,0,0,.3); 
    width:  800px;
    
    margin: 0 auto;
    margin-top: 75px;
    padding-top: 10px;
    padding-left: 50px;
    border-radius: 15px;
     -webkit-border-radius:15px;
     -o-border-radius:15px;
     -moz-border-radius:15px;
   

}

.container1 {
    padding: 16px;
    background-color: rgba(0,0,0,.3); 
    width:  500px;
    
    margin: 0 auto;
    margin-top: 75px;
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

    <div class=" w3-center w3-JUMBO   w3-text-white">
   <h1 class="w3-animate-zoom"><b>Upload Image</b></h1>
    

 </div>


<form method="POST" action="FinalUploadimage1.php" enctype="multipart/form-data">
   <input type="hidden" name="size" value="1000000">
 <div class="  w3-text-white w3-xlarge ">

  

 
    <label for="imagefolder"><b>Image Category</b></label>
    <input type="text" list="imagefolder" placeholder="Enter Category" name="image" required>
  <datalist id="imagefolder">
    <option value="DailyActivity">
    <option value="Manner">
    <option value="Culture">
    <option value="Occasion">
  </datalist>


    <label for="image_text"><b>Image Description</b></label>
    <input type="text" placeholder="Enter image name" name="image_text" required>
    
     <label for="image"><b>Upload Image </b></label>
  
   
  
   
      <button type="submit" name="upload">Upload</button>
          <button type="button" id = "cancle_btn" class="w3-button w3-section w3-red w3-ripple">Cancel</button>
    <script type="text/javascript">
    document.getElementById("cancle_btn").onclick = function () {
        location.href = "homeadmin.php";
    };
</script>
   
  </div>

   </div>


</form>
</div>

</body>
</html>
