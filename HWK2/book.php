<?php

/*
Задача 6: Библиотека и книги

Условие:
Создайте базовый класс Book с защищёнными свойствами title и author, 
а также методом displayInfo(). 
Затем создайте два дочерних класса FictionBook (художественная книга) и ScienceBook (научная книга), 
которые переопределяют метод displayInfo(). Также создайте интерфейс ILibraryItem с методом getLocation(), 
который реализуют оба класса.

Пример вывода:
Художественная книга "1984" написана Джорджем Оруэллом
Научная книга "Краткая история времени" написана Стивеном Хокингом
Книга "1984" находится в зале художественной литературы
Книга "Краткая история времени" находится в научном разделе
*/

class Book 
{
    public function __construct(protected string $title, protected string $author)
    {
        
    }

    public function displayInfo(): string
    {
        return "";
    }

}

class FictionBook extends Book
{
    public function __construct(protected string $title = 'Художественная книга "1984" ', protected string $author = "Джорджем Оруэллом")
    {
        
    }
    
    public function displayInfo(): string
    {
        return "{$this->title} написана {$this->author}";
    }

    public function getLocation(): string
    {
        return "{$this->title} находится в зале художественной литературы";
    }   
}

class ScienceBook extends Book
{
    public function __construct(protected string $title = 'Научная книга "Краткая история времени"', protected string $author = "Стивеном Хоккингом")
    {
        
    }

    public function displayInfo(): string
    {
        return "{$this->title} написана {$this->author}";
    }

    public function getLocation(): string
    {
        return "{$this->title} находится в научном разделе";
    }
}

interface IlibraryItem
{
    public function getLocation(): string;
}

$fictionbook = new FictionBook('Художественная книга "1984"');
$sciencebook = new ScienceBook('Научная книга "Краткая история времени"');



echo $fictionbook->displayInfo() . "<br>";
echo $sciencebook->displayInfo() . "<br>";
echo $fictionbook->getLocation() . "<br>";
echo $sciencebook->getLocation();