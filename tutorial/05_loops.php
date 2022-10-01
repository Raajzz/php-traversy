<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

$i = 0;

for (; $i < 10; $i++) { 
  echo "Number ${i}" . "<br>";
}

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

while($i < 20){
  echo "Number ${i}" . "<br>";
  $i++;
}


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

do{
  echo "Number ${i}" . "<br>";
  $i++;
} while($i < 30);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$arr = [
  "Raaj" => "Rock",
  "Nishant" => "EDM",
  "Kathi" => "Pop",
  "Vidyarth" => "All"
];

foreach ($arr as $idx => $item){
  echo "${idx} => ${item}" . "<br>";
}