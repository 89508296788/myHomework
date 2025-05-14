<?php

/**
 * Задача 4: Электронные устройства (Electronic Devices)

*Условие:
*Создайте класс ElectronicDevice с приватными свойствами brand и powerStatus (вкл/выкл). 
*Добавьте методы turnOn(), turnOff() и displayStatus(). Затем создайте класс SmartPhone, 
*который наследует ElectronicDevice и добавляет метод installApp() (установить приложение).

*Пример вывода:

*Устройство Samsung: выключено  
* Устройство Samsung включено 
*Установлено приложение: Telegram  

*Примечание:

    *Метод installApp() должен принимать название приложения.

    *Убедитесь, что нельзя установить приложение на выключенное устройство.
 */

 class ElectronicDevice
 {
    public function __construct(private string $brand, private string $powerStatus)
    {
        
    }

    public function turnOn(): string 
    {
        return "Устройство {$this->brand} включено";
    }

    public function turnOff(): string
    {
        return "Устройство {$this->brand} выключено";
    }

    public function displayStatus(): string
    {
        if ($this->powerStatus) {
            return "Устройство {$this->brand} сейчас работает";
        } else {
            return "Устройство {$this->brand} сейчас работает";
        }
    }
 }

 class SmartPhone extends ElectronicDevice
 {
    public function installApp(string $telegram = 'Telegram'): string
    {
        return "Установлено приложение {$telegram}";
    }
 }

 $electronicdevice = new ElectronicDevice('Samsung', 'null' );
 $smartphone = new SmartPhone('Samsung', 'null');

 echo $electronicdevice->turnOff() . "<br>";
 echo $electronicdevice->turnOn() . "<br>";
 echo $smartphone->installApp();