<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$link = mysql_connect( 'localhost','root','Xhsca312' );
		if(!$link){
			die('连接失败；<br />错误原因：'.mysql_error() );
		}
	
	
	mysql_select_db( 'book_store',$link )or die('无法选中数据库；<br />错误原因：'.mysql_error() );
	
	
	$result = mysql_query( "SELECT * FROM books");
	
	

	while($row = mysql_fetch_assoc($result) ){
		$results[] = $row;
	};
 	
	$json = json_encode($results);
	
	echo $json;
	

	mysql_free_result( $result );
	
	mysql_close($link);
?>

</body>
</html>