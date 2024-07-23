<?php

$a = array(
  0 => array("id"=>1, "title"=>"IPhone", "price"=>3600),
  1 => array("id"=>2, "title"=>"Samsung", "price"=>2500),
  2 => array("id"=>3, "title"=>"HTC", "price"=>1566),
);

$a[] = array("id"=>4, "title"=>"Huawei", "price"=>1800);

print_r($a);

echo "<br><br>";

var_dump($a);

echo "<br><br>";

echo date("y-d-m h:i:s", time()+24*3600);

echo "<br><br>";

echo time();

?>