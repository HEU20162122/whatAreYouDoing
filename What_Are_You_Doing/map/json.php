<?php
	$mysqli = new mysqli("localhost", "root", "Xhsca312", "book_store");
  $sql = "SELECT * FROM books";
	$result = $mysqli->query($sql);


	while($row = $result->fetch_assoc() ){
		$results[]=$row;
	};
	$json = json_encode($results);

	echo $json;


	$result->free();

	$mysqli->close();
?>
