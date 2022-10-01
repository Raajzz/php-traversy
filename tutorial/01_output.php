<?php
/* -------- Output & Comments ------- */

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.

*/

// single line comment

/*

multi
line
comment

*/

// echo is used to simply echo out (print out) something to the screen

// echo "Hello, world";
// echo 1, "Hello", 12.123;
// echo [1,3,4]; error Warning: Array to string conversion

// print - print something single

// print "Hello from print";
// print 1, "hello"; error

// print_r to print in array
// print_r([1,2,3]);

// var_dump will put the value of the variable and also provide info about the things that we want to print
// var_export will print the quotes too if you wanna print "Hello"
// var_export("Hello");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>
    <?php
    echo "Hello"
    ?>
  </h1>
  or
  <h1>
    <?= "Hello" ?>
  </h1>
</body>

</html>