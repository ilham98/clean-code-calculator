<?php

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Uyab\Calculator\SmartCalculator;
use Uyab\Calculator\Terbilang;

#[CoversClass(SmartCalculator::class)]
#[CoversClass(Terbilang::class)]
class SmartCalculatorTest extends TestCase
{
    #[DataProvider('expressionProvider')]
    public function test_expression($expression, $result): void
    {
        $calculator = new SmartCalculator;
        $this->assertEquals($result, $calculator->calculate($expression));
    }

    public static function expressionProvider(): array
    {
        return [
            ['1 + 1', 2],
            ['1+1', 2],
            ['2 - 1', 1],
            ['2-1', 1],
            ['2 * 3', 6],
            ['2*3', 6],
            ['4 / 2', 2],
            ['4/2', 2],
            ['4 / 0', 'Infinity'],
            ['4/0', 'Infinity'],
        ];
    }

    public function test_calculate_and_display_as_terbilang(): void
    {
        $calculator = new SmartCalculator;
        $result = $calculator->calculateAndDisplayAsTerbilang('1 + 1');
        $this->assertEquals('dua', $result);
    }
}
