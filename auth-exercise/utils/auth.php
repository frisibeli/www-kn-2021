<?php
session_start();

function isAuthorized($role)
{
  return $_SESSION["role"] === $role;
}