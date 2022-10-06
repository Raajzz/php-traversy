<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/?>

<!-- GET HANDLER CODE -->
<?php
  if(isset($_GET['submit'])){
    echo $_GET['name'] . $_GET['age'] . "<br>";
    echo "<br>";
  }
?>

<?php
  if(isset($_POST['submit'])){
    echo $_POST['name'] . $_POST['age'] . "<br>";
    echo "<br>";
  }
?>

<!-- <a href="<?php //echo $_SERVER['PHP_SELF']?>?name=John&age=30">Click</a> -->

<form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="">
  </div>
  <div>
    <label for="age">Age:</label>
    <input type="text" name="age" id="">
  </div>
  <input type="submit" value="Enter" name="submit">
</form>

<!-- the value of the query strings will be placed inside the $_GET superglobals -->
<!-- the method="GET" when used will place all the input:text's names and th respective values into the links itself -->