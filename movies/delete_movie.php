<?php
include 'db/db_connect.php';
$response = array();
//Check for mandatory parameter movie_id
if(isset($_POST['movie_id'])){
	$movieId = $_POST['movie_id'];
	$query = "DELETE FROM movies WHERE movie_id=?";
	if($stmt = $con->prepare($query)){
		//Bind movie_id parameter to the query
		$stmt->bind_param("i",$movieId);
		$stmt->execute();
		//Check if the movie got deleted
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Movie got deleted successfully";
			
		}else{
			$response["success"] = 0;
			$response["message"] = "Movie not found";
		}					
	}else{
		$response["success"] = 0;
		$response["message"] = mysqli_error($con);
	}

}else{
	$response["success"] = 0;
	$response["message"] = "missing parameter movie_id";
}
echo json_encode($response);
?>