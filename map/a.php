<?php
$type = urldecode($_GET['type']);
$element = urldecode($_GET['element']);
$data = array(
  'tit' => 'hello world',
  'time' =>'123'
    );
header('Content-type: application/json');
echo json_encode($data);
 ?>
