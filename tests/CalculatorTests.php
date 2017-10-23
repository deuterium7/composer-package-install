<?php

use PHPUnit\Framework\TestCase;

require '../src/Calculator.php';

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

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testDeflation()
    {
        $result = $this->calculator->deflation(2, 1);
        $this->assertEquals(1, $result);
    }

    public function testMultiplication()
    {
        $result = $this->calculator->multiplication(2, 3);
        $this->assertEquals(6, $result);
    }

    public function testSeparation()
    {
        $result = $this->calculator->separation(3, 3);
        $this->assertEquals(1, $result);
    }

}
