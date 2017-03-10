<?php
	$mysqli = new mysqli("138.68.12.160", "cuteluckydog", "Xhsca312", "whatAreYouDoing");
	echo 12;
	
	$sql = "SELECT * FROM try";
	$result = $mysqli->query($sql);


	while($row = $result->fetch_assoc() ){
		$results[]=$row;
	};
	$json = json_encode($results);

	echo $json;


	$result->free();

	$mysqli->close();
?>
