<?php
session_start();
require_once 'repositories/user.php';

$userRepository = new UserRepository();

if ($_POST) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $user = $userRepository->getUserByEmail($email);

  if (!$user) {
		header('HTTP/1.1 401 Authorization Required');
    die("No such user");
  }

  // Authentication
  if (!password_verify($password ,$user["password"])) {
    header('HTTP/1.1 401 Authorization Required');
    die("Invalid password");
  }

  // Session store
  $_SESSION["email"] = $user["email"];
  $_SESSION["role"] = $user["role"];

  echo "Successfull login!";
}