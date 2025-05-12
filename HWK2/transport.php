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


interface IMovable {
    public function speedUp(int $amount): string;
    public function slowDown(int $amount): string;
}

abstract class Vehicle {
    public function __construct(protected string $brand, protected int $speed) {}
    
    abstract public function displayInfo(): string;
}

class Car extends Vehicle implements IMovable {
    public function displayInfo(): string {
        return "Машина {$this->brand} едет со скоростью {$this->speed} км/ч";
    }

    public function speedUp(int $amount): string {
        $this->speed += $amount;
        return "Скорость увеличена! Теперь: {$this->speed} км/ч";
    }

    public function slowDown(int $amount): string {
        $this->speed = max(0, $this->speed - $amount);
        return "Скорость уменьшена! Теперь: {$this->speed} км/ч";
    }
}

class Bicycle extends Vehicle implements IMovable {
    public function displayInfo(): string {
        return "Велосипед {$this->brand} движется со скоростью {$this->speed} км/ч";
    }

    public function speedUp(int $amount): string {
        $this->speed += $amount;
        return "Скорость увеличена! Теперь: {$this->speed} км/ч";
    }

    public function slowDown(int $amount): string {
        $this->speed = max(0, $this->speed - $amount);
        return "Скорость уменьшена! Теперь: {$this->speed} км/ч";
    }
}

$car = new Car('Toyota', 120);
$bicycle = new Bicycle('Stels', 25);

echo $car->displayInfo() . '<br>';
echo $bicycle->displayInfo() . '<br>';
echo $car->speedUp(10) . '<br>';
echo $bicycle->slowDown(5);