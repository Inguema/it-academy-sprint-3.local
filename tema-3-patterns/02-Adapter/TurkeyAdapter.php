<?php

class TurkeyAdapter
{
    private Turkey $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        $this->turkey->gobble();
    }

    public function fly()
    {
        for($i=1; $i <= 5; $i++) {
            $this->turkey->fly() . "<br>";
        }
    }
}