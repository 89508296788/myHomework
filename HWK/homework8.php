<?php

class Worker 
{
    private $name;
    private $age;
    private $salary;

    public function setName(){

    }

    public function getName(){

    }

    public function setAge(){

    }

    public function getAge(){

    }

    public function setSalary(){

    }

    public function getSalary(){

    }

    private function checkAge(){

    }

}

/*И вот отдельно задача Создать класс Worker, 
в котором будут следующие private поля - name (имя), 
age (возраст), salary (зарплата) и public методы setName, 
getName, setAge, getAge, setSalary, getSalary.
Дополните класс private методом checkAge, 
который будет проверять возраст на корректность (от 1 до 100 лет). 
Этот метод должен использовать метод setAge перед установкой нового возраста 
(если возраст не корректный - он не должен меняться) и возвращать false, при успешном изминении возвращать true.
Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
Напишите функцию которая быдет выводить Имя и возраст. Вызовите ее для этих обьектов.*/


?>