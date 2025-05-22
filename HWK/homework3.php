<?php

class Machinegun
{
    public $model;

    public function __construct($model) {
        $this->model = $model; 
    }
}

$machinegun = new Machinegun("M-60");
echo $machinegun->model;