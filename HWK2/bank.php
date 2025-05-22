<?php

/*
### Задача 4: Банковский счёт  
УсловСоздайте класс BankAccount с приватными свойствами balance и ownerName. Добавьте методы deposit() (пополнить), 
withdraw() (снять) и displayBalance() (показать баланс). Затем создайте класс SavingsAccount, который наследует BankAccount 
и добавляет метод applyInterest() (начислить проценты).  


Пример вывода:  
Баланс Ивана: 1000
После снятия: 800
После начисления процентов: 840
*/

class BankAccount
{
    public function __construct(private string $ownerName, private int $balance)
    {
    }

    public function deposit(int $amount): string 
    {
        $this->balance += $amount;
        return "Баланс {$this->ownerName}: {$this->balance}";
    }

    public function withDraw(int $amount): string 
    {
        $this->balance -= $amount;
        return "После снятия: {$this->balance}";
    }

    public function displayBalance(): string
    {
        return "Баланс: {$this->balance}";
    }
}

class SavingsAccount extends BankAccount
{
    public function applyInterest(int $percent): string
    {
        $interest = $this->balance * $percent / 100;
        $this->balance += $interest;
        return "После начисления процентов: {$this->balance}";
    }
}

$bankaccount = new SavingsAccount('Иван', 1000);
echo $bankaccount->deposit(0) . '<br>';
echo $bankaccount->withdraw(200) . '<br>';
echo $bankaccount->applyInterest(5);