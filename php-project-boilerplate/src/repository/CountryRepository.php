
<?php
class CountryRepository
{
  private $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

  public function getAllCountries()
  {
    $stmt = $this->db->getConnection()->query("SELECT * FROM country");
    return $stmt->fetchAll();
  }
}
