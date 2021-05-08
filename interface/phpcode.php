<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "location";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$Name=$_POST['Name'];
$Id=$_POST['Id'];



$sql = "UPDATE alco SET Name= '$Name' WHERE Id = $Id";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 