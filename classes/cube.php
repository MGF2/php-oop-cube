<?php
require_once 'square.php';

class Cube extends Square {

  public function __construct($_lato) {
    parent::__construct($_lato);
  }

  public function getVolume() {
    return $this->lato * $this->lato * $this->lato;
  }

  public function getSuperficie() {
    return 6 * ($this->lato * $this->lato);
  }

  public function __toString() {

     return "<br> CUBO <br> Area: " . $this -> getArea(). "<br>"
     . "Perimetro: " . $this ->getPerimetro() . "<br>"
     . "Volume: " . $this ->getVolume() . "<br>"
     . "Superficie: " . $this ->getSuperficie() . "<br>";
 }
}
