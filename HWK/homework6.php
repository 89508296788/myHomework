<?php

class RifleM16
{
    public $caliber = "5,56 mm";

    private $length = "1000 mm";

    protected $weight = "2,88 kg";

    public function perfomanceDemonstration() {
        echo $this->caliber . '<br>';
        echo $this->length . '<br>';
        echo $this->weight . '<br>';
        echo '<br';
    }
}

class RifleM16A1 extends RifleM16
{
    public function perfomanceDemonstrationM4() {
        echo $this->caliber . '<br>';
        echo $this->weight . '<br>';
        echo '<br>';
    }
}

$riflem16 = new RifleM16();
$riflem16->perfomanceDemonstration();

echo $riflem16->caliber . '<br>';//Пример доступа к свойствам из вне класса

$riflem16a1 = new RifleM16A1();
$riflem16a1->perfomanceDemonstrationM4();