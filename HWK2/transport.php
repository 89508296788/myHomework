<?php

/*
### Задача 3: Транспортные средства  
Условие:  
Создайте абстрактный класс Vehicle с защищёнными свойствами brand и speed, а также абстрактным методом displayInfo(). 
От него наследуйте классы Car и Bicycle, реализуя метод displayInfo() по-разному. 
Добавьте интерфейс IMovable с методами speedUp() и slowDown().  

Пример вывода:  
Машина Toyota едет со скоростью 120 км/ч
Велосипед движется со скоростью 25 км/ч
Скорость увеличена! Теперь: 130 км/ч
Скорость уменьшена! Теперь: 20 км/ч
*/

abstract class Vehicle
{
    public function __construct(private string $brand = 'Toyota', private int $speed = 120)
    {
        
    }

    public function displayInfo()
    {
        
    }

    
}

class Car extends Vehicle 
{
    public function displayInfo()
    {
        return 'Машина Toyota едет со скоростью 120 км/ч';
    }

    public function speedUp()
    {
        return 'Скорость увеличена! Теперь 130 км/ч';
    }
}

class Bicycle extends Vehicle 
{
    public function displayInfo()
    {
        return 'Велосипед движется со скоростью 25 км/ч';
    }

    public function slowDown()
    {
        return 'Скорость уменьшена! Теперь: 20 км/ч';
    }
}

interface IMovable 
{
    public function speedUp();
    public function slowDown();
}

$car = new Car('Toyota', 120);
$bicycle = new Bicycle();

echo $car->displayInfo() . '<br>';
echo $bicycle->displayInfo() . '<br>';
echo $car->speedUp() . '<br>';
echo $bicycle->slowDown();