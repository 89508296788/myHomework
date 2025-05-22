<?php

class Worker 
{
    private string $name;
    private int $age;
    private int $salary;

    private function checkAge(int $age): bool {
        return $age >= 1 && $age <= 100;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setAge(int $age): bool {
        if ($this->checkAge($age)) {
            $this->age = $age;
            return true;
        }
        return false;
    }
    
    public function setSalary(int $salary): void {
        $this->salary = $salary;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getSalary(): int {
        return $this->salary;
    }
}

$worker1 = new Worker();
$worker1->setName('Иван');
$worker1->setAge(25); 
$worker1->setSalary(1000);

$worker2 = new Worker();
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

function printWorkerInfo(Worker $worker): void {
    echo $worker->getName() . ', ' . $worker->getAge() . ' лет<br>'; 
}

echo 'Сумма зарплат: ' . ($worker1->getSalary() + $worker2->getSalary()) . '<br>';
echo 'Сумма возрастов: ' . ($worker1->getAge() + $worker2->getAge()) . '<br>';

printWorkerInfo($worker1);
printWorkerInfo($worker2);

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