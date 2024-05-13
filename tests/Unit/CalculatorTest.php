<?php

require_once("src/Calculator.php");

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new Calculator();
        $result = $calculator->addition(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testSoustraction()
    {
        $calculator = new Calculator();
        $result = $calculator->soustraction(2, 1);
        $this->assertEquals(1, $result);
    }

    public function testMultiplication()
    {
        $calculator = new Calculator();
        $result = $calculator->multiplication(2, 3);
        $this->assertEquals(6, $result);
    }

    public function testDivision()
    {
        $calculator = new Calculator();
        $result = $calculator->division(6, 3);
        $this->assertEquals(2, $result);
    }

    public function testDivisionParZero()
    {
        $this->expectException(InvalidArgumentException::class);
        $calculator = new Calculator();
        $calculator->division(6, 0);
    }
}