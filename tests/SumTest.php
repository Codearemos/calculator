<?php

namespace Codearemos\Calculator\Tests;

use Codearemos\Calculator\Entities\Sum;
use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{

    public function testCanSum()
    {
        $sum = new Sum();

        $this->assertEquals(3,$sum->apply(1,2));
    }

}