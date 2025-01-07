<?php
require_once "Animal.php";
class frog extends Animal {

  public function __construct() {
    parent ::__construct(name: "frog",legs: 2,coldblooded: "Yes");
  }

  public function jump(): string {
    return "hop hop";
  }

  public function __tostring(): string {
    return parent::__tostring()."Jump: ".$this->jump();
  }
}
$frog = new frog();

?>