<?php

namespace Codearemos\Calculator\Tests;

use Codearemos\Calculator\Entities\Substraction;
use PHPUnit\Framework\TestCase;

class SubstractionTest extends TestCase
{
    public function testCanSubstraction()
    {
        $substraction = new Substraction();
        $this->assertEquals(2,$substraction->apply(4,2));
    }
}
