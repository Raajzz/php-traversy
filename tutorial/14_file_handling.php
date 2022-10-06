<?php

/* ---------- File Handling --------- */

$file = 'extras/users.txt';

if(file_exists($file)){

  // echo readfile($file); 
  // to just read a file
  // it'll also print the size of the file at the end

  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  $contents = 'Brad'.PHP_EOL.'Sara'.PHP_EOL.'Mike';
  fwrite($handle, $contents);
  fclose($handle);
}

?>