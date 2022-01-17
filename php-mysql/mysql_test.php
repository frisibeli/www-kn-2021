<?php
$conn = new PDO('mysql:host=167.71.56.154;dbname=26240_db', 'user', 'test');


// $sql = "SELECT * FROM `country` WHERE deleted_at IS NULL";
$id = $_GET["id"];
$sql = "SELECT * FROM `country` WHERE id = ".$id;

$query = $conn->query($sql) or die("failed!");

?>


<ul>
<?php
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
?>
  <li><a href="mysql_test.php?id=<?= $row['id'] ?>"><?= $row["name"] ?><a></li>
<?php
}
?>
</ul>