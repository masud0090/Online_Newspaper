<?php

session_start();

$errors = [];
$user_id = "";
$token = '';

include('../database.php');




if (isset($_POST['reset-password'])) {
  $password =  $_POST['password'];

  $query = "SELECT password FROM user WHERE password='$password'";
  $results1 = mysqli_query($con, $query);

  if (empty($password)) {
    array_push($errors, "Your password is required");
  } else if (mysqli_num_rows($results1) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that password");
  }
  if (count($errors) == 0) {

    header('location:new_pass.php');
  }
  //header('location:new_pass.php');
}

// NEW PASSWORD

if (isset($_POST['new_password'])) {
  if ($_SESSION['author']) {
    $new_pass =  $_POST['new_pass'];
    $new_pass_c = $_POST['new_pass_c'];



    // $password = ['$password'];
    if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
    if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
    if (count($errors) == 0) {




      $myusername = $_SESSION['author'];





      // $new_pass = ($new_pass);

      $sql4 = "UPDATE user SET password='$new_pass' WHERE username='$myusername'";
      //$sql = "UPDATE registration SET password='$new_pass' from regisrstion r inner join password_resets p where r.email= p.email";
      $results4 = mysqli_query($con, $sql4);
      header('location:index.php');
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>