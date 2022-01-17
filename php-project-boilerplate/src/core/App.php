<?php
class App
{
  public $config;
  public $session;
  public $template;
  public $db;

  public function __construct()
  {
    $this->config = new Config();
    $this->session = new Session();
    $this->template = new Template();

    $this->db = new Db($this->config);
  }
}
