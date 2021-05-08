<?php
   $mysqli = new mysqli("127.0.0.1", "root", "", "registration");


if($mysqli->connect_error){
	printf("Connect Failed: %s\n ", $mysqli->connect_error);
	exit();
}
?>