<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/
// setting a cookie
setcookie('name', 'brad', time() + 86400);
echo time();
if(isset($_COOKIE['name'])){
  echo $_COOKIE['name'];
} else {
  echo "Cookies haven't been set yet.";
}
setcookie('name', 'This string can be anything', time() - 86400);
// I guess the cookie expired because, cookies expires of the time of setting them goes below the time of creating a cookie.
?>