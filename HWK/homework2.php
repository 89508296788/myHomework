<?php

class Rifle
{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}

$rifle1 = new Rifle("M-16");
$rifle2 = $rifle1;
$rifle2->name = "M-16A1";  
echo $rifle1->name;    


