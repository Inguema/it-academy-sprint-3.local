<?php

require_once 'Auto\BmwCouponGenerator.php';
require_once 'Auto\CouponGeneratorStrategy.php';
require_once 'Auto\MercedesCouponGenerator.php';

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
    echo $totalDiscount->getCouponDiscount();
}

echo "<hr />";

$car = "mercedes1";
$couponGenerator = couponGeneratorBrand($car);
if ($couponGenerator !== null) {
    $totalDiscount = new CouponGeneratorStrategy($couponGenerator);
    echo $totalDiscount->getCouponDiscount();
}

echo "<hr />";

$car = "mercedes";
$couponGenerator = couponGeneratorBrand($car);
if ($couponGenerator !== null) {
    $totalDiscount = new CouponGeneratorStrategy($couponGenerator);
    echo $totalDiscount->getCouponDiscount();
}