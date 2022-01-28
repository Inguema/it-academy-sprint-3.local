<?php

require_once 'CarCouponGenerator.php';

class CouponGeneratorStrategy
{
    private $carCouponGenerator;

    //Objeto Interface
    public function __construct(CarCouponGenerator $carCouponGenerator)
    {
        $this->carCouponGenerator = $carCouponGenerator;
    }

    //Utiliza los métodos del objeto interface para calcular el descuento total por marca de coche
    public function getCouponDiscount():string
    {
        $discount = $this->carCouponGenerator->addSeasonDiscount();
        $discount = $this->carCouponGenerator->addStockDiscount();

        return "Get $discount % off the price of your new car.";
    }
}
