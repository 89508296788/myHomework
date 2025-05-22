<?php

// 1 класс Calculator который будет в конструкторе принимать в себя два числа потом у этого калькулятора будет два метода сложение и вычитание. 
// И эти методы будут возвращать Obj ответа Obj Response У этого объекта будет метод который будет называться GETResult 
// и этот метод метод будет возвращать результат операции. 

class Calculator
{
    public function __construct(private readonly float $number1, private readonly float $number2)
    {
    }
    
    public function subtraction(): Response {
        $result = $this->number1 - $this->number2;
        
        return new Response($result);
    }
}

/* Это value-object */
class Response {
    public function __construct(private readonly float $result)
    {
    }

    public function getResult(): float {
        return $this->result;
    }
}

$calculator = new Calculator(5, 2);

/* Ожидаю, что на экране выведется 3 */
echo $calculator->subtraction()->getResult();
