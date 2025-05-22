<?php

/*
### Задача 5: Персонажи игры  
Условие:  
Создайте интерфейс ICharacter с методами attack() и defend(). Реализуйте его в классах Warrior (воин) и Mage (маг). 
Воин должен иметь свойство strength, а маг — mana. Добавьте наследование от базового класса GameCharacter, где хранится name.  

Пример вывода:  
Воин Арагорн атакует с силой 15!
Маг Гэндальф атакует, используя 20 маны!
Арагорн блокирует удар!
*/

interface ICharacter
{
    public function attack(): string;
    public function defend(): string;
}

class GameCharacter
{
    public function __construct(public string $name) {}
}

class Warrior extends GameCharacter implements ICharacter
{
    public function __construct(
        public string $name,
        public int $strength
    ) {
        parent::__construct($name);
    }

    public function attack(): string
    {
        return "Воин {$this->name} атакует с силой {$this->strength}!";
    }

    public function defend(): string
    {
        return "{$this->name} блокирует удар!";
    }
}

class Mage extends GameCharacter implements ICharacter
{
    public function __construct(
        public string $name,
        public int $mana
    ) {
        parent::__construct($name);
    }

    public function attack(): string
    {
        return "Маг {$this->name} атакует, используя {$this->mana} маны!";
    }

    public function defend(): string
    {
        return "{$this->name} создаёт магический щит!";
    }
}

$warrior = new Warrior("Арагорн", 15);
$mage = new Mage("Гэндальф", 20);

echo $warrior->attack() . "<br>";
echo $mage->attack() . "<br>";
echo $warrior->defend();


