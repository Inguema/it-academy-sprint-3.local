<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once 'Auto/BmwCouponGenerator.php';
require_once 'Auto/CouponGeneratorStrategy.php';
require_once 'Auto/MercedesCouponGenerator.php';

function couponGeneratorBrand($car)
{
    $carBrand = null;

    if ($car === 'bmw') {
        $carBrand = new BmwCouponGenerator();
    } else if ($car === 'mercedes') {
        $carBrand = new MercedesCouponGenerator();
    } else if (null === $carBrand) {
        print_r('No existe la marca del coche');
    }

    return $carBrand;
}

$car = "bmw";
$couponGenerator = couponGeneratorBrand($car);
if ($couponGenerator !== null) {
    $totalDiscount = new CouponGeneratorStrategy($couponGenerator);
    $totalDiscount->setSeasonDiscount(5);
    $totalDiscount->setStockDiscount(7);
    echo 'Get ' . $totalDiscount->getCouponDiscount() . '% off the price of your new car.';
}

echo '<hr />';

$car = "mercedes";
$couponGenerator = couponGeneratorBrand($car);
if ($couponGenerator !== null) {
    $totalDiscount = new CouponGeneratorStrategy($couponGenerator);
    $totalDiscount->setSeasonDiscount(4);
    $totalDiscount->setStockDiscount(10);
    echo 'Get ' . $totalDiscount->getCouponDiscount() . '% off the price of your new car.';
}

echo '<hr />';

$car = "mercedes1";
$couponGenerator = couponGeneratorBrand($car);
if ($couponGenerator !== null) {
    $totalDiscount = new CouponGeneratorStrategy($couponGenerator);
    $totalDiscount->setSeasonDiscount(5);
    $totalDiscount->setStockDiscount(7);
    echo $totalDiscount->getCouponDiscount();
}
echo '<hr />';