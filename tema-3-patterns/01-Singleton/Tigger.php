<?php

class Tigger
{
    private static $instance;
    private $counter;

    //Constructor privado, previene la creación de objetos vía new
    private function __construct()
    {
        echo "Building character..." . PHP_EOL;
    }

    public static function getInstance() //Los métodos estáticos se utilizan el operador ::
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function roar()
    {
        echo 'Grrr!' . PHP_EOL;
        ++$this->counter;
    }

    public function getCounter()
    {
        return $this->counter;
    }
}

Tigger::getInstance();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();


echo 'Contador = '. Tigger::getInstance()->getCounter() . PHP_EOL;


/*
Para llamar a un método estático fuera de la clase, tenemos que usar :: operator.
Sintaxis: Class_name::static_method_name();
De manera similar para acceder a la propiedad estática fuera de la clase, tenemos que usar :: operator.
Sintaxis: Class_name::static_property_name;
*/