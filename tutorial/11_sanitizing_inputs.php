<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

?>

<?php
  // both of the below ways work to sanitize the inputs
  if(isset($_POST['submit'])){

    // method 1
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // method 2
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);

    echo "${name} ${age} <br>";
  }
?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
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