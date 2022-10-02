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

  print_r($fruits);

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

/**
 * Read this - https://www.phpinternalsbook.com/php5/hashtables/basic_structure.html to get to know about arrays in detail
 */