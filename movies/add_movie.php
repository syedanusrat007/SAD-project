<?php
include 'db/db_connect.php';
$response = array();

//Check for mandatory parameters
if(isset($_POST['movie_name'])&&isset($_POST['genre'])&&isset($_POST['year'])&&isset($_POST['rating'])){
	$movieName = $_POST['movie_name'];
	$genre = $_POST['genre'];
	$year = $_POST['year'];
	$rating = $_POST['rating'];
	
	//Query to insert a movie
	$query = "INSERT INTO movies( movie_name, genre, year, rating) VALUES (?,?,?,?)";
	//Prepare the query
	if($stmt = $con->prepare($query)){
		//Bind parameters
		$stmt->bind_param("ssis",$movieName,$genre,$year,$rating);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got inserted
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Movie Successfully Added";			
			
		}else{
			//Some error while inserting
			$response["success"] = 0;
			$response["message"] = "Error while adding movie";
		}					
	}else{
		//Some error while inserting
		$response["success"] = 0;
		$response["message"] = mysqli_error($con);
	}

}else{
	//Mandatory parameters are missing
	$response["success"] = 0;
	$response["message"] = "missing mandatory parameters";
}
//Displaying JSON response
echo json_encode($response);
?>