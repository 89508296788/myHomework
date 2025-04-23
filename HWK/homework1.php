<?php

class Rifle
{   
    public $shoots = '50 rounds per minute';

    public function fullAvtoShoots() {
        echo $this->shoots;
    }

}

$rifle = new Rifle();
$rifle->fullAvtoShoots();
