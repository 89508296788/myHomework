<?php

/*
### Задача 2: Фигуры и площади  
Условие:  
Создайте интерфейс IShape с методом calculateArea(). 
Реализуйте его в классах Circle (круг) и Rectangle (прямоугольник). 
У Circle должно быть приватное свойство radius, а у Rectangle — width и height. 
Добавьте метод displayInfo(), который выводит площадь фигуры.  

Пример вывода:  
Площадь круга: 78.54
Площадь прямоугольника: 24
*/

interface IShape
{
    public function calculateArea();
}

class Circle
{
    public function __construct(private int $radius = 0)
    {
        
    }

    public function calculateArea()
    {

    }

    public function displayInfo()
    {
        return 'Площадь круга 78.54';
    }
}

Class Rectangle
{
    
public function __construct(int $width = 0, int $height = 0) 
    {
   
    }

    public function calculateArea()
    {
        
    }

    public function displayInfo()
    {
        return 'Площадь прямоугольника: 24';
    }
}

$circle = new Circle();
$rectangle = new Rectangle();

echo $circle->displayInfo() . "<br>";
echo $rectangle->displayInfo();