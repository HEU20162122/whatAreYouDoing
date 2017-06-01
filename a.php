<?php


	 $title=$_POST['title'];
	 $place=$_POST['place'];
	 $time=$_POST['time'];
	 $college=$_POST['college'];
 	 $orginization=$_POST['orginization'];
	 $word1=$_POST['word1'];
	 $word2=$_POST['word2'];
	 $word3=$_POST['word3'];




	/* $myfile = fopen("a.txt", "w") or die("Unable to open file!");
	 fwrite($myfile, $title);
	 fwrite($myfile, $college);
	 fwrite($myfile, $word2);
	 fwrite($myfile, $word3);
   fwrite($myfile, $word1);
	 fwrite($myfile, $place);
	 fwrite($myfile, $time);
	 fwrite($myfile, $orginization);
	 fwrite($myfile, $word);
	 fclose($myfile);
*/


	 $mysqli = new mysqli('localhost', 'root', 'tyz971005', 'whatAreYouDoing');
	 /*if(mysqli_connect_error()){
	     echo mysqli_connect_error();
	 }else{
	   echo "yes";
	 }*/
	 $sql = "INSERT INTO try (title,place,word1,word2,word3,college,time,orginization) VALUES ('$title','$place','$word1','$word2','$word3','$college','$time','$orginization')";
	 $result = $mysqli->query($sql);

	 $mysqli->close();

	 ?>
