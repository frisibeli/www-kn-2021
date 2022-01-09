<?php
class Device {
  protected $isOnline = false;
  private $deviceName = "";

  function  __construct($name) {
    $this->deviceName = $name;
  }

  public function isOnline() {
    return $this->isOnline;
  }
}

class GarageDoorController extends Device {
  public function getIsOnline(){
    if($this->isOnline) {
      echo "Online";
    } else {
      echo "offline";
    }
  }
}