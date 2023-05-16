<?php

namespace Codearemos\Calculator\Tests;

use Codearemos\Calculator\Entities\Division;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    public function testCanDivide()
    {
        $division = new Division();

        $this->assertEquals(1,$division->apply(2,2));
    }
}