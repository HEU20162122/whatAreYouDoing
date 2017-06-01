<?php
	$mysqli = new mysqli("localhost", "root", "tyz971005", "whatAreYouDoing");
  $sql = "SELECT * FROM  try";
	$result = $mysqli->query($sql);


	while($row = $result->fetch_assoc() ){
		$results[]=$row;
	};
	$json = json_encode($results);

	echo $json;


	$result->free();

	$mysqli->close();
	echo $_GET['id'];
?>
