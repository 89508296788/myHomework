<?php

/*
Задача 7: Погодные явления

Условие:
Создайте интерфейс IWeatherEvent с методом describe(). 
Реализуйте его в классах Rain (дождь), Snow (снег) и Sunny (солнечно). 
У каждого класса должно быть приватное свойство, характеризующее явление (например, intensity для дождя). 
Добавьте метод getImpact(), который выводит влияние погодного явления.
Пример вывода
Идет дождь сильный (5 мм/ч)
Дождь может привести к лужам на дороге

Идет снегопад очень сильный (10 см/ч)
Снег может затруднить движение транспорта

На улице солнечно, сильная жара (+38°C)
Жара может привести к потере сознания
*/

interface IWeatherEvent
{
    public function describe(): string;
    public function getImpact(): string;
}

class Rain implements IWeatherEvent
{
    public function __construct(private string $intensity = "средней интенсивностью")
    {
    }

    public function describe(): string
    {
        return "Идет дождь {$this->intensity} (5 мм/ч)";
    }

    public function getImpact(): string
    {
        return "Дождь может привести к лужам на дороге";
    }
}

class Snow implements IWeatherEvent
{
    public function __construct(private string $intensity = "сильный")
    {
    }

    public function describe(): string
    {
        return "Идет снегопад {$this->intensity} (10 см/ч)";
    }

    public function getImpact(): string
    {
        return "Снег может затруднить движение транспорта";
    }
}

class Sunny implements IWeatherEvent
{
    public function __construct(private string $heat = "жара (+45°C)")
    {
    }

    public function describe(): string
    {
        return "На улице солнечно, {$this->heat}";
    }

    public function getImpact(): string
    {
        return "Жара может привести к потере сознания";
    }
}


$rain = new Rain("сильный");
$snow = new Snow("очень сильный");
$sunny = new Sunny("сильная жара (+38°C)");


echo $rain->describe() . "<br>";
echo $rain->getImpact() . "<br><br>";

echo $snow->describe() . "<br>";
echo $snow->getImpact() . "<br><br>";

echo $sunny->describe() . "<br>";
echo $sunny->getImpact() . "<br>";
