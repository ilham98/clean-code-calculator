<?php

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Uyab\Calculator\BasicCalculator;

#[CoversClass(BasicCalculator::class)]
class BasicCalculatorTest extends TestCase
{
    public function test_add(): void
    {
        $calculator = new BasicCalculator;
        $result = $calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function test_subtract(): void
    {
        $calculator = new BasicCalculator;
        $result = $calculator->subtract(2, 1);
        $this->assertEquals(1, $result);
    }

    public function test_multiply(): void
    {
        $calculator = new BasicCalculator;
        $result = $calculator->multiply(2, 3);
        $this->assertEquals(6, $result);
    }

    public function test_divide(): void
    {
        $calculator = new BasicCalculator;
        $result = $calculator->divide(6, 3);
        $this->assertEquals(2, $result);
    }

    public function test_divide_by_zero(): void
    {
        $calculator = new BasicCalculator;
        $result = $calculator->divide(6, 0);
        $this->assertEquals('Infinity', $result);
    }

    // public function testAddAndReturnAsString(): void
    // {
    //     $calculator = new BasicCalculator();
    //     $result = $calculator->addAndReturnAsString(1, 2);
    //     $this->assertEquals("tiga", $result);
    // }
}
