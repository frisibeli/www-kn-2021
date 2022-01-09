<?php
require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '167.71.56.154',
    'database' => '26240_db',
    'username' => 'user',
    'password' => 'test',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

$countries = Capsule::table('country')->where('population', '>', 50)->get();

class Country extends Illuminate\Database\Eloquent\Model {
  public $timestamps = false;

  protected $table = "country";
}

$countries = Country::get();

// $countries[0]


$countries[0]->name = "Bulgaria";
$countries[0]->save();

