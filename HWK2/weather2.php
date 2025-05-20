<?php

/*

Задача 1: Погодные явления

    Создайте интерфейс WeatherEvent с методами:

        describe(): string — возвращает описание явления.

        getImpact(): string — возвращает воздействие на окружающую среду.

    Реализуйте интерфейс в классах:

        Rain (свойство: intensity),

        Snow (свойство: snowfallDepth),

        Sunny (свойство: brightness).

    Создайте массив объектов этих классов и используйте foreach, чтобы вывести информацию о каждом явлении.
*/
interface WeatherEvent
{   
    /**
     * возвращает описание явления.
     * возвращает воздействие на окружающую среду.
     */
    public function describe(): string; 
    public function getImpact(): string;
}

class Rain 
{
    public function describe(): string 
    {
        return "Идет сильный дождь";
    }

    public function getImpact(): string 
    {
        return "Сильный дождь затопил окружающую местность";
    }
}

class Snow
{
    public function describe(): string 
    {
        return "Идет очень сильный снегопад с дождем";
    }

    public function getImpact(): string 
    {
        return "Снег замел всю округу";
    }
}

class Sunny 
{
    public function describe(): string 
    {
        return "На улице светит солнце осень жарко 40 градусов жары";
    }

    public function getImpact(): string 
    {
        return "Из за сильной жары есть вероятность солнечного удара";
    }
}

$weatherevent = [new Rain(), new Snow(), new Sunny()];
foreach ($weatherevent as $weather)
{
    echo $weather->describe() . "<br>";
    echo $weather->getImpact() . "<br>";
}