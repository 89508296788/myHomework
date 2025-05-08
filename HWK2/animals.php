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
  

---

### Задача 4: Банковский счёт  
Условие:  
Создайте класс BankAccount с приватными свойствами balance и ownerName. Добавьте методы deposit() (пополнить), 
withdraw() (снять) и displayBalance() (показать баланс). Затем создайте класс SavingsAccount, который наследует BankAccount 
и добавляет метод applyInterest() (начислить проценты).  

Пример вывода:  
Баланс Ивана: 1000
После снятия: 800
После начисления процентов: 840
  

---

### Задача 5: Персонажи игры  
Условие:  
Создайте интерфейс ICharacter с методами attack() и defend(). Реализуйте его в классах Warrior (воин) и Mage (маг). 
Воин должен иметь свойство strength, а маг — mana. Добавьте наследование от базового класса GameCharacter, где хранится name.  

Пример вывода:  
Воин Арагорн атакует с силой 15!
Маг Гэндальф атакует, используя 20 маны!
Арагорн блокирует удар!
  

---
*/