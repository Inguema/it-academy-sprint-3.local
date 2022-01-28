<?php

require_once 'CarCouponGenerator.php';

class BmwCouponGenerator implements CarCouponGenerator
{
    private int $discount = 0;
    private bool $isHighSeason = false;
    private bool $bigStock = true;

    public function addSeasonDiscount()
    {
        if (!$this->isHighSeason) {
           return $this->discount += 5;
        }
        return "Get $this->discount % off the price of your new car.";
    }

    public function addStockDiscount()
    {
        if ($this->bigStock) {
            return $this->discount += 7;
        }
        return "Get $this->discount % off the price of your new car.";
    }
}