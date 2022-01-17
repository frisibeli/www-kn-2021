<?php


class Config
{
  private $config = [];

  public function __construct()
  {
    // Add config files manually here or write function that adds all files automatically
    $this->config["db"] = parse_ini_file(ROOT."/config/db.ini");
  }

  public function get($namespace, $field)
  {
    if (!isset($this->config[$namespace])) {
      return null;
    }

    if (!isset($this->config[$namespace][$field])) {
      return null;
    }

    return $this->config[$namespace][$field];
  }
}
