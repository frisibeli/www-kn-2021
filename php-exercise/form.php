<?php
session_start();

// session_unset();
// session_destroy();

setcookie('token', '2eh4j34h23jk4kj23h4j234hj2k3j4hk2', time() + 24 * 3600, '/');

var_dump($_COOKIE['item']);

if ($_SESSION["user"]) {
  header('Location: logged-user.php');
  exit();
}

if (isset($_POST['email'])) {
  $_SESSION['user'] = $_POST['email'];
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
  <h1>Login</h1>
  <form action="" method="post">
    <input type="email" name="email">
    <br>
    <button>Submit</button>
  </form>
</body>
</html>