<?php
require_once "core/Session.php";
Session::init();

define("ROOT", $_SERVER['DOCUMENT_ROOT']);

require_once "core/Config.php";
require_once "core/Template.php";
require_once "core/Db.php";
require_once "core/App.php";

require_once "repository/CountryRepository.php";


$app = new App();