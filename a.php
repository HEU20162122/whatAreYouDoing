<?php

$array = file_get_contents('php://input', true);
$data = json_encode($array);*/
/*class book{          //声明类
var $book_ID;       //图书编号
var $book_name;     //图书名称
var $book_author;    //作者
var $book_TPI;      //出版社
var $book_price;     //定价
function book($ID,$Name,$Author,$TPI,$Price){
$this->book_ID=$ID;
$this->book_name=$Name;
$this->book_author=$Author;
$this->book_TPI=$TPI;
$this->book_price=$Price;
}
};
$obj=new book("7-115-14688-8", "php 数据库开发实例教程", "周五", "长江出版社", 49);
*/

$mysqli = new mysqli('localhost', 'root', 'Xhsca312', 'whatAreYouDoing');
/*if(mysqli_connect_error()){
    echo mysqli_connect_error();
}else{
  echo "yes";
};*/
$sql = "INSERT INTO try (place,word,title,organisation) VALUES ('$data->place','$data->word','$data->title','$data->orginization')";
$result = $mysqli->query($sql);
$mysqli->close();
/*if ($mysqli->query($sql) == TRUE) {
echo "user entry saved successfully.";
} else {
echo "INSERT attempt failed" ;
};
$mysqli->close();
//$mysqli = new mysqli("localhost", "root", "Xhsca312", "whatAreYouDoing");

//$sql="insert into try(place,time,word,title,orginization) values('$book->book_ID','$book->book_name','$book->book_author','$book->book_TPI','$book->book_price')";
//$result=$mysqli->query($sql);
//$mysqli->close();*/
?>
