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

interface IShape {
    public function calculateArea(): float;
    public function displayInfo(): string;
}

class Circle implements IShape {
    public function __construct(private float $radius) {}
    
    public function calculateArea(): float {
        return M_PI * pow($this->radius, 2);
    }
    
    public function displayInfo(): string {
        return "Площадь круга: " . round($this->calculateArea(), 2);
    }
}

class Rectangle implements IShape {
    public function __construct(
        private float $width, 
        private float $height
    ) {}
    
    public function calculateArea(): float {
        return $this->width * $this->height;
    }
    
    public function displayInfo(): string {
        return "Площадь прямоугольника: " . $this->calculateArea();
    }
}

$circle = new Circle(5); // Радиус 5 (площадь ~78.54)
$rectangle = new Rectangle(6, 4); // Ширина 6, высота 4 (площадь 24)

echo $circle->displayInfo() . "<br>";
echo $rectangle->displayInfo();