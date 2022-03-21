<?php

namespace CDC\Examples;

require "./vendor/autoload.php";

use CDC\Examples\RomanNumberConverter;
use PHPUnit\Framework\TestCase as PHPUnit;

class RomanNumberConverterTest extends PHPUnit
{
    public function testMustUnderstandSymbolI()
    {
        $roman = new RomanNumberConverter();
        $number = $roman->convert("I");

        $this->assertEquals(1, $number);
    }

    public function testMustUnderstandSymbolV()
    {
        $roman = new RomanNumberConverter();
        $number = $roman->convert("V");

        $this->assertEquals(5, $number);
    }
}
