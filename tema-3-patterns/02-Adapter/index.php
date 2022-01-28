<?php

require_once 'Duck.php';
require_once 'Turkey.php';
require_once 'TurkeyAdapter.php';

function duck_interaction($duck)
{
    $duck->quack();
    $duck->fly();
}

echo "The Turkey says...<br>";
$turkey = new Turkey;
$turkey->gobble();
$turkey->fly();
echo "<hr>";

echo "The Duck says...<br>";
$duck = new Duck;
duck_interaction($duck);
echo "<hr>";

echo "The TurkeyAdapter says...<br>";
$turkey_adapter = new TurkeyAdapter($turkey);
duck_interaction($turkey_adapter);
