<?php

class TurkeyAdapter extends Turkey
{
    public function quack()
    {
        $this->gobble();
    }

    public function fly()
    {
        for ($i=1; $i <= 5; $i++) {
            parent::fly() . "<br>";
        }
    }
}