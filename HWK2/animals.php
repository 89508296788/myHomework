<?php

/*### Задача 1: Животные и звуки  
Условие:  
Создайте базовый класс Animal с защищённым свойством name и методом makeSound(). 
Затем создайте два дочерних класса Dog и Cat, которые переопределяют метод makeSound(). 
Также создайте интерфейс IPet с методом play(), который реализуют оба класса. */
abstract class Animal 
{ 

    public function __construct(private string $name) {
        
  }  

    public function makeSound() 
    {

    }

    public function play()
    {

    }
    

}

class Dog extends Animal
{
    public function makeSound()
    {
        return 'Гав! Меня зовут Бобик';
    }

    public function play()
    {
        return 'Бобик играет с мячиком';
    }

   
}

class Cat extends Animal
{
    public function makeSound()
    {
        return 'Мяу! Меня зовут Мурка';
    }

     public function play()
    {
        return 'Мурка играет с клубком ниток';
    }
}

interface Ipet 
{
    public function play();
}

$dog = new Dog('Бобик');
$cat = new Cat('Мурка');

echo $dog->makeSound() . "<br>";
echo $cat->makeSound() . "<br>";
echo $dog->play() . "<br>";
echo $cat->play() . "<br>";


/*
Гав! Меня зовут Бобик
Мяу! Меня зовут Мурка
Бобик играет с мячиком
Мурка играет с клубком ниток*/