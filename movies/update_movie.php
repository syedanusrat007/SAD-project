<?php
include 'db/db_connect.php';
$response = array();

//Check for mandatory parameters
if(isset($_POST['movie_name'])&&isset($_POST['movie_id'])&&isset($_POST['genre'])&&isset($_POST['year'])&&isset($_POST['rating'])){
	$movieName = $_POST['movie_name'];
	$movieId = $_POST['movie_id'];
	$genre = $_POST['genre'];
	$year = $_POST['year'];
	$rating = $_POST['rating'];
	
	//Query to update a movie
	$query = "UPDATE movies SET movie_name=?,genre=?,year=?,rating=? WHERE movie_id=?";
	//Prepare the query
	if($stmt = $con->prepare($query)){
		//Bind parameters
		$stmt->bind_param("ssisi",$movieName,$genre,$year,$rating,$movieId);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got updated
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Movie successfully updated";
			
		}else{
			//When movie is not found
			$response["success"] = 0;
			$response["message"] = "Movie not found";
		}					
	}else{
		//Some error while updating
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