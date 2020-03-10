<?php

// prova trait per lo sconto //

trait Discount
{
  public $discount;
  public $discountedPrice;

  function discountCalc($_discount,$_price)
  {
    // return $this->$discountedPrice = ($_price *$_discount)/100; prova con più return
    return $this->$discountedPrice = ($_price - ($_price *$_discount)/100);
  }
}
?>
