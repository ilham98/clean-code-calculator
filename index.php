<?php

require_once __DIR__.'/vendor/autoload.php';

use Uyab\Calculator\SmartCalculator;
use Uyab\Calculator\Terbilang;

$terbilang = new Terbilang(-20);
echo $terbilang->toString();

$smartCalculator = new SmartCalculator;
echo $smartCalculator->calculateAndDisplayAsTerbilang('1 + 1');
