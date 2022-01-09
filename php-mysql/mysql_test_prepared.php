<?php
$conn = new PDO('mysql:host=167.71.56.154;dbname=26240_db', 'user', 'test', array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));

try {
  // $conn->beginTransaction();
  $statement = $conn->prepare('SELECT * FROM `country` WHERE id = :id');

  // $statement2 - Insert new country
  // $statement3 - Insert new city ---> error
  // $statement4 - Insert new user

  // $conn->comit();

  $statement->bindParam(':id', $_GET["id"], PDO::PARAM_INT);

  $statement->execute();
} catch (Exception $e) {
  var_dump($e->getMessage());
}

?>


<?php

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

print_r($rows);

?>


<ul>
<?php
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
?>
  <li><a href="mysql_test.php?id=<?= $row['id'] ?>"><?= $row["name"] ?><a></li>
<?php
}
?>
</ul>