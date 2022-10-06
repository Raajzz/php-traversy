<?php
/* --------- Working with Arrays and Array data -------- */

  $fruits = ["apple", "orange", "pear"];

  // to print the array
  // print_r($fruits);

  // find the length of the array
  // echo count($fruits);

  // to check if an element exists in an array
  // var_dump(in_array("apple", $fruits));

  // pushing elements infront of an array
  $fruits[] = "Pineapple";
  array_push($fruits, "Strawberry");

  // pushing elements in the front
  array_unshift($fruits, "mango"); // O(N) function, where 'N' is the size of the array

  // remove from the end
  array_pop($fruits);

  // remove from the beginning
  array_shift($fruits);

  // remove a particular element
  unset($fruits[2]); // removes the index too, therefore result will be 0 -> ... , 1 -> ... , 3 -> ... | no 2 index

  array_push($fruits, "banana");
  array_push($fruits, "pineapple");
  // split into chunks
  $chunked_array = array_chunk($fruits, 2);

  // print_r($chunked_array);

  // concatenating arrays
  $arr1 = [1, 2, 3];
  $arr2 = [4, 5, 6];

  $arr3 = array_merge($arr1, $arr2);
  $arr4 = [...$arr1, ...$arr2];
  // print_r($arr4);

  // array_combine -> consider the first param array as keys and set the second param array as values

  $a = [1, 2, 3];
  $b = [4, 5, 6];

  $c = array_combine($a, $b); 

  // array_keys will return a number-indexed array with the keys as values
  $d = array_keys($c);

  // array_flip will flip the keys and the values
  $e = array_flip($c);

  // range
  $numbers = range(1, 20);

  // print_r($numbers);

  $new_numbers = array_map(function($number){
    return "Number ${number}";
  }, $numbers);

  // print_r($new_numbers);

  $filtered_arr = array_filter($numbers, function($number){
    return $number <= 10;
  });

  // print_r($filtered_arr);

  $sum = array_reduce($numbers, function($carry, $number){
    echo "${carry} ${number} <br>";
    return $carry + $number; // this value will go and sit inside the $carray and $number will be the elements of the array
  });

  var_dump($sum);
  
/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

/**
 * Read this - https://www.phpinternalsbook.com/php5/hashtables/basic_structure.html to get to know about arrays in detail
 */