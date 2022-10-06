<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

?>

<?php
  session_start();
  if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    // password need not be sanitized as we won't be displaying the contents of $password
    if($username === 'John' && $password === 'password'){
      $_SESSION['username'] = $username;
      header('Location: /tutorial/extras/dashboard.php');
    } else {
      echo "Invalid Login";
    }
  }
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
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <div>
      <label for="username">Username: </label>
      <input type="text" name="username" id="">
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" name="password" id="">
    </div>
    <input type="submit" name="submit" value="Enter">
  </form>
</body>
</html>
