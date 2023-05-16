<?php

namespace Codearemos\Calculator\Entities;

class Substraction
{

    public function apply(int $number1, int $number2 ):int
    {
        return $number1 - $number2;
    }
}