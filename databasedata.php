<?php
$host="localhost";
$username="root";
$psw="";
$db="location";
 echo "string";
 $con = mysqli_connect($host,$username,$psw,$db) or die ('Unable to connect');
if (mysqli_connect_error($con))
  {
  echo"Could not connect " . mysqli_error();
  }


$result = mysqli_query( $db,'SELECT * FROM app');
if($result){
while($row = mysqli_fetch_array($result))
  {
	$output[]=$row;
  }
print(json_encode($output));
} 
mysqli_close($con);
?>