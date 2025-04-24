<?php

//Добавить к определению родительского класса ключевое слово final. Объяснить ошибку при наследовании.
//Ключевое слово final перед классом означает, что этот класс не может быть унаследован.
//Это механизм безопасности/ограничения, который позволяет разработчикам явно запретить наследование от определенного класса.
 class Battleship
{
    public $maneuverability;
    public $survivability;

    public function __construct($maneuverability, $survivabiloots) {
        $this->maneuverabilts = $maneuverabilts;
        $this->survivability= $survivability;
    }

    public function floats(){
        return "Плывет по воде";
    }

    public function shoots(){
        return "Стреляет";
    }

}

class Destroyer extends Battleship //Эсминец
{
    public function floats(){
        return "Плывет по воде";
    }

    public function shoots(){
        return "Стреляет";
    }
}