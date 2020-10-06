<!-- snack1:
definire classe Square e classe Cube (2 e 3 dimensioni);
 definire, oltre a variabili d'istanza, costruttore,
 e toString, i metodi per il calcolo dell'area/volume
 e del perimetro/superficie; testare le classi definite
  con alcune istanze per verificare che sia tutto
  corretto
  NOTE:
  area quadrato: lato * lato
  perimetro quadrato: 4 * lato
  volume cubo: lato * lato * lato
  superficie cubo: 6 * lato * lato
  N.B.: definire ogni variabile e metodo pubblico come detto in classe -->

<?php
 class Square {
   protected $lato;
   protected $area;
   protected $perimetro;

   public function __construct($_lato) {
     if(is_nan($_lato)){
         throw new Exception("Il lato del quadrato deve essere un numero");
     }
     $this->lato = $_lato;
   }

   public function getArea() {
     return $this->lato * $this->lato;
   }

   public function getPerimetro() {
     return $this->lato * 4;
   }


   public function __toString() {

      return " QUADRATO <br> Area: " . $this -> getArea(). "<br>"
      . "Perimetro: " . $this ->getPerimetro() . "<br>";
  }

 }
