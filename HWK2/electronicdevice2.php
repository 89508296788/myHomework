<?php

/*
Задача 2: Электронные устройства

    Создайте абстрактный класс ElectronicDevice с:

        Защищёнными свойствами: brand, powerConsumption.

        Абстрактным методом turnOn(): string.

    Интерфейс Chargeable с методом charge(): string.

    Классы:

        Smartphone (реализует Chargeable),

        Laptop (реализует Chargeable).

    Через foreach выведите статус включения и зарядки для каждого устройства.
*/

use SmartPhone as GlobalSmartPhone;

interface Chargeable 
{
    /**
     * заряжать
     */
    public function charge(): string; 
}

abstract class ElectronicDevice
{
    public function __construct(protected string $brand, protected string $powerConsumption)
    {
        
    }
    /**
     * включать 
     */
    abstract function turnOn(): string;
}

class Smartphone 
{

    public function __construct(protected string $brand = "Samsung", protected string $powerConsumption = '10Вт')
    {
        
    }

    public function charge(): string
    {
        return " Ваш смартфон {$this->brand} заряжен на 100%, потребление {$this->powerConsumption}";
    }

    public function turnOn(): string
    {
        return "Ваш смартфон {$this->brand} включен";
    }
}

    /**
    * ноутбук
    */
class LapTop
{
    public function __construct(protected string $brand = "Lenovo", protected string $powerConsumption = '60Вт')
    {
        
    }
    public function charge(): string
    {
        return "Ваш ноутбук {$this->brand} заряжен на 0%, потребление {$this->powerConsumption}";
    }

    public function turnOn(): string
    {
        return "Ваш ноутбук {$this->brand} выключен";
    }
}

$electronicdevices = [new SmartPhone(), new LapTop()];
foreach ($electronicdevices as $electro) {
    echo $electro->charge() . "<br>";
    echo $electro->turnOn() . "<br>";
}