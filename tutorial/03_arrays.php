<?php

  $numbers = [1, 2, 3, 4];
  $fruits = array("orange", "apple", "pear");


  // print_r($numbers);
  // print_r($fruits);
  // var_dump($numbers);
  // var_export($numbers); // will just echo how it'll look like in php code
  // echo $fruits[2];

  $people = [
    "Raaj" => [
      "Course" => "Status Making"
    ],
    "Nishant" => [
      "Course" => "Valorant"
    ],
    "Arka" => [
      "Course" => "Anime"
    ],
    "Kathi" => [
      "Course" => [
        "F1",
        "Series",
        "Music"
      ]
    ]
      ];


  // echo $people["Kathi"]["Course"][2];
  // print_r($people);

  echo json_encode($people);

?>
