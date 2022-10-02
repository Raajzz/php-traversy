<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope

  
  */
  
  function register_user(){
    echo "User is registered successfully.";
  }

  // register_user();

  /* 
  
  There's function scope and global scope. 
  The global scope won't work inside a function scope, we have define the variable as say "global" before anything works out.
  
  */

  // stuff inside the definition is called an argument and stuff which you 'p'ass is called a 'p'arameter.

  $y = 0;

  function sum($n1, $n2){
    global $y;
    $y = $n1 + $n2;
  }

  // function print_y(){
  //   // echo $y . "<br>"; error - because $y is undefined.
  // }

  // sum(10, 20);
  // print_y();

  // default arguments

  function sum_default($n1 = 10, $n2 = 20){
    return $n1 + $n2;
  }

  // echo sum_default();

  // anon function

  $subtract = function($n1, $n2){
    return $n1 - $n2 . "<br>";
  };

  echo $subtract(10, 5);

  // arrow function

  $multiply = fn($n1, $n2) => $n1 * $n2;

  echo $multiply(10, 20);
?>