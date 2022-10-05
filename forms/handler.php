<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="handler.css">
</head>
<body>
  <?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $plans = $_POST["plans"];
    $address = $_POST["address"];
    $review = $_POST["review"];
  ?>  
  <h1>Submission Successful!, <?= $name?> </h1>
  <br>
  <hr>
  
</body>
</html>
