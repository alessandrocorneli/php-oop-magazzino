<?php

class Electronics
{
  public $brand;
  public $model;
  public $price;
  private $location;
  private $type;
  function __construct($_brand, $_model, $_price)
  {
    $this->brand= $_brand;
    $this->model = $_model;
    $this->price = $_price;
  }
  public function setPrice($_price)
  {
    if (is_Numeric($_price)) {
      $this->price = $_price;
    }
    else {
      return  "Not a number";
    }
  }
}







$Telefono = new Electronics("apple","iphoneX","prova prezzo");
// var_dump($Telefono);
$Telefono->setPrice(1000);
var_dump($Telefono);
?>
