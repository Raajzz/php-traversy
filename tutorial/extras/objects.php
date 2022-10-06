<?php
  $object = [
    1,
    2,
    3,
    4,
    5,
    [
    "one" => 100000,
    "two" => 2,
    "three" => 3
    ]
  ];

  var_dump($object);
  echo "<br>";
  echo $object[5]["one"];
  // print_r($object)
?>