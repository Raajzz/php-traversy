<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "fritz";
$age = 19;
$likes_js = true;

// var_dump($likes_js); // bool(true)
// echo $likes_js; // prints 1
// var_export($likes_js); // prints true

// printing with variables

// echo $name . ' ' . $age . ' ' . $likes_js; fritz 19 1
// echo "${name} ${age} ${likes_js}"; // string concatenation

// var_dump("$name $age $likes_js"); // works, so concatenation is independent of the print statement

echo 1 + 2; // 3
echo '1' + '2'; // also 3
echo "1" + "2";

?>