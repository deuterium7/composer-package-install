<?php

namespace AlexanderZabornyi\PackageTest\tests;

use PHPUnit\Framework\TestCase;
use AlexanderZabornyi\PackageTest\Calculator;

class CalculatorTests extends TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testAddMethod()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testSubtractMethod()
    {
        $result = $this->calculator->subtract(2, 1);
        $this->assertEquals(1, $result);
    }

    public function testMultiplyMethod()
    {
        $result = $this->calculator->multiply(2, 3);
        $this->assertEquals(6, $result);
    }

    public function testDivideMethod()
    {
        $result = $this->calculator->divide(3, 3);
        $this->assertEquals(1, $result);
    }
}
