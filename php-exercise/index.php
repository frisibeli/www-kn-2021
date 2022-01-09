<?php
// error_reporting(E_WARNING);

include "lib/functions.php";

spl_autoload_register(function($className){
  include "classes/". $className . '.php';
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table, td {
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <h1>This is the PHP execution result</h1>
  <?php
  // PHP code goes here

  $testVar = "string val";
  $numVar = 1; // int
  $testFloat = 1.4;
  $bool = false;

  echo "This is the val of testVar = $testVar, bool = $bool (true?) (1) (false?) (0?)";
  echo "<br>";
  var_dump(str_split("Test value", 2));

  $strA = "Hi";
  $strB = "ko staa";

  // $concatenatedStr = $strA . " " . $strB;
  // echo $concatenatedStr;

  $concatenatedStr = "";

  $concatenatedStr .= $strA;
  $concatenatedStr .= " ";
  $concatenatedStr .= $strB;
  echo "<br>";
  echo $concatenatedStr;
  echo "<br>";
  echo "<br>";

  $numa = 10;
  $stringA = "10";

  if ($numa === $stringA) {
    echo "They are equal";
  }


  // print_r()
  # String


  ?>

  <?php if (false) { ?>

    dssdgfdg <strong>test</strong>

  <?php } ?>


  <?php

  $testVar1 = "initial val";

  function modifyVal(&$param1) {
    $param1 = 1;
  }

  echo $testVar1;
  modifyVal($testVar1);
  echo "<br>";

  echo $testVar1;

  var_dump([
    "string",
    1,
    1.2,
    true
  ]);

  echo "<br>";
  echo "<br>";

  $assocArr = [
    "name" => "Ivan",
    "surname" => "Todorov",
    "age" => 26
  ];

  $jsonStr = json_encode($assocArr);
  echo $jsonStr;


  //(php://input)
  $jsonString =  '{"test":12}';

  $_POST['test'];
  $parsedJsonString = json_decode($jsonString, true);

  echo "<br><br>";
  var_dump($parsedJsonString);
  ?>

  <table>
    <?php foreach($assocArr as $key => $value): ?>
    <tr>
      <td> <?= $key ?> </td>
      <td> <?= $value ?> </td>
      <td> <?= "Test string" ?> </td>
    </tr>
    <?php endforeach ?>
  </table>
  <br><br>
  <?php
    printJSONResponse([
      "message" => "Hello all",
      "author" => "System"
    ]);

    $smartDevice = new SmartDevice();
    $device = new Device("Garage door 1");
    if (!$device->isOnline()) {
      echo "The device is offline";
    }

  ?>


</body>
</html>