<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to - value and type matches
  != Not equal to
  !== Not identical to - value and type doesn't match
*/

/* ---------- If & If-Else Statements --------- */

// pretty similar to javascript

$posts = ["Something"];

// if(!empty($posts)){
//   echo "${posts[0]}";
// } else {
//   echo "Empty";
// }

$first_post = !empty($posts) ? $posts[0] : "No Posts";

echo $first_post;

// coalescing operator

$second_post = null ?? $posts[0];
echo $second_post;

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */

// regular switch statements similar to Javascript or C++