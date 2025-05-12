<?php

/*### Задача 1: Животные и звуки  
Условие:  
Создайте базовый класс Animal с защищённым свойством name и методом makeSound(). 
Затем создайте два дочерних класса Dog и Cat, которые переопределяют метод makeSound(). 
Также создайте интерфейс IPet с методом play(), который реализуют оба класса. */

interface IPet {
    public function play(): string;
}

abstract class Animal {
    public function __construct(protected string $name) {}
    
    abstract public function makeSound(): string;
}

class Dog extends Animal implements IPet {
    public function makeSound(): string {
        return "Гав! Меня зовут {$this->name}";
    }

    public function play(): string {
        return "{$this->name} играет с мячиком";
    }
}

class Cat extends Animal implements IPet {
    public function makeSound(): string {
        return "Мяу! Меня зовут {$this->name}";
    }

    public function play(): string {
        return "{$this->name} играет с клубком ниток";
    }
}

$dog = new Dog('Бобик');
$cat = new Cat('Мурка');

echo $dog->makeSound() . "<br>";
echo $cat->makeSound() . "<br>";
echo $dog->play() . "<br>";
echo $cat->play() . "<br>";

