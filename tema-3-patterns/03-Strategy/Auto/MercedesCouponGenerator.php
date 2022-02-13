<?php

require_once 'CarCouponGenerator.php';

class MercedesCouponGenerator implements CarCouponGenerator
{
    private int $discount = 0;
    private bool $isHighSeason = false;
    private bool $bigStock = true;

    public function addSeasonDiscount($descuento)
    {
        if(!$this->isHighSeason) {
            return $this->discount += $descuento;
        }
        return $this->discount;
    }

    public function addStockDiscount($descuento)
    {
        if($this->bigStock) {
            return $this->discount += $descuento;
        }
        return $this->discount;
    }
}