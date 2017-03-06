<?php
class Item{
  var $tit;
  var $age;
}


$type = urldecode($_GET['type']);
$element = urldecode($_GET['element']);
$item1 = new Item();
$item1->tit = "123";
$item1->time = "345";


$item2 = new Item();
$item2->tit = "ert";
$item2->time = "qwe";

$data = array( item1,item2);
header('Content-type: application/json');
echo json_encode($data);
 ?>
