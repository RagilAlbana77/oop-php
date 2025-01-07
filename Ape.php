<?php
require_once "Animal.php";

class ape extends Animal {

  public function __construct() {
    parent::__construct(name: "Ape",legs: 2,coldblooded: "No");
    }
  
  public function yell(): string {
     return "Auoooo";
  }

  public function __toString(): string {
     return parent::__tostring()."Yell: ".$this->yell();
    
  }

  }

  $ape = new ape();
?>