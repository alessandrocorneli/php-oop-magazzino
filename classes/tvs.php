
<?php
require_once "store.php";
require_once "trait.php";

class Television extends Electronics
{
  use Discount;
  public $resolution;
  public $inches;
  public $screen;
  public function calcScreen($_inches)
  {
    if (is_Numeric($_inches)) {
     $this->screen = $_inches * 2;
    }
    else {
      return "Not a number";
    }
  }
}





$Television = new Television("sony","bravia",400);
// var_dump($Television);
$Television->discountCalc(10,400);
var_dump($Television) //prova sconto
?>
