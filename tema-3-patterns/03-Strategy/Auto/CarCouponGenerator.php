<?php

interface CarCouponGenerator
{
    public function addSeasonDiscount($descuento);
    public function addStockDiscount($descuento);
}