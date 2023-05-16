<?php

namespace Codearemos\Calculator\Tests;

use Codearemos\Calculator\Entities\Multiplication;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    public function testCanMultiplication()
    {
        $multiplication = new Multiplication();

        $this->assertEquals(3,$multiplication->apply(3,1));
    }
}