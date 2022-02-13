<?php

require_once 'CarCouponGenerator.php';

class CouponGeneratorStrategy
{
    private $carCouponGenerator;
    private $seasonDiscount = 0;
    private $stockDiscount = 0;

    //Objeto Interface
    public function __construct(CarCouponGenerator $carCouponGenerator)
    {
        $this->carCouponGenerator = $carCouponGenerator;
    }

    //Utiliza los métodos del objeto interface para calcular el descuento total por marca de coche
    public function getCouponDiscount():string
    {
        $this->carCouponGenerator->addSeasonDiscount($this->seasonDiscount);
        return $this->carCouponGenerator->addStockDiscount($this->stockDiscount);
    }

    public function setSeasonDiscount(int $seasonDiscount): void
    {
        $this->seasonDiscount = $seasonDiscount;
    }

    public function setStockDiscount(int $stockDiscount): void
    {
        $this->stockDiscount = $stockDiscount;
    }
}
