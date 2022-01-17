<?php
require_once "../src/bootstrap.php";

$countryRepository = new CountryRepository($app->db);
$countries = $countryRepository->getAllCountries();

$app->template->load("header", ["pageName" => "test"]);
?>
<select name="" id="">

<?php
  foreach ($countries as $key => $country) {
?>
    <option><?=$country["name"]?></option>
<?
  }
?>

</select>
<?
$app->template->load("footer");