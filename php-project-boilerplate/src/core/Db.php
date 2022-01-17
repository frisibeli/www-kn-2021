<?php
class Db
{
  private $connection;

  public function __construct($config)
  {
    $host = $config->get('db', 'db_host');
    $name = $config->get('db', 'db_name');
    $user = $config->get('db', 'db_user');
    $pass = $config->get('db', 'db_pass');

    $this->connection = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
  }

  function getConnection()
  {
    return $this->connection;
  }
}
