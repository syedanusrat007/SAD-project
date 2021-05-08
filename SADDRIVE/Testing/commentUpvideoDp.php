

<?php
session_start();
	
if (isset($_POST['submit'])) {

/*
	$servername="localhost";
	$username="root";
	$password="admin";
	$dbname="registration";*/


	 $db = mysqli_connect("localhost", "root", "", "registration");
	

	//echo'hi shaila';
$du = $_POST['date'];
$id=$_POST['id'];
$message=$_POST['message'];
$userid=$_SESSION['id'];


   

    $sql = "INSERT INTO comments (videoid,uid,date_uploaded,message) VALUES ( '$id', '$userid','$du','$message')";
    // execute query
    mysqli_query($db, $sql);

    
  




/*
	$sqlcon = new mysqli($servername, $username, $password, $dbname);
	$sql = $sqlcon->prepare('INSERT INTO comments(uid, videoid, date_uploaded, message) VALUES(?,?,?,?)');
	$sql->bind_param('ssss', , $_GET['vid'], $du, $_POST['message']);
	$sql->execute();
	$sql->close();
	$sqlcon->close();
*/
	header('Location: dailyactivitiesp.php');

}

?>