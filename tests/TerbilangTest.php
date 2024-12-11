<?php

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Uyab\Calculator\Terbilang;

#[CoversClass(Terbilang::class)]
class TerbilangTest extends TestCase
{
    public function test_positive(): void
    {
        $calculator = new Terbilang(1234567890);
        $result = $calculator->toString();
        $this->assertEquals('satu milyar dua ratus tiga puluh empat juta lima ratus enam puluh tujuh ribu delapan ratus sembilan puluh', $result);
    }

    public function test_belasan(): void
    {
        $calculator = new Terbilang(13);
        $result = $calculator->toString();
        $this->assertEquals('tiga belas', $result);
    }

    public function test_ratusan(): void
    {
        $calculator = new Terbilang(150);
        $result = $calculator->toString();
        $this->assertEquals('seratus lima puluh', $result);
    }

    public function test_ribuan(): void
    {
        $calculator = new Terbilang(1020);
        $result = $calculator->toString();
        $this->assertEquals('seribu dua puluh', $result);
    }

    public function test_triliun(): void
    {
        $calculator = new Terbilang(900000000000000);
        $result = $calculator->toString();
        $this->assertEquals('sembilan ratus  trilyun', $result);
    }

    public function test_negative(): void
    {
        $calculator = new Terbilang(-20);
        $result = $calculator->toString();
        $this->assertEquals('minus dua puluh', $result);
    }
}
