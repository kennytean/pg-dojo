<?php

namespace Dojo\Tests;

use Dojo\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    private $calculator;

    public function setUp()
    {
        // Arrange
        $this->calculator = new Calculator();
    }

    public function testDisplaysZeroWhenEnteringZero()
    {
        // Act
        $this->calculator->enter('0');

        // Assert
        $expected = '0';
        $actual = $this->calculator->display();
        $this->assertEquals($expected, $actual);
    }

    public function testDisplayOneWhenEnteringOne()
    {
        $this->calculator->enter('1');

        $expected = '1';
        $actual = $this->calculator->display();
        $this->assertEquals($expected, $actual);
    }

    public function testAdditionTwoNumbers()
    {
        $this->calculator->addition(4);
        $this->calculator->addition(6);

        $expected = 10;
        $actual = $this->calculator->display();
        $this->assertEquals($expected, $actual);
    }
}
