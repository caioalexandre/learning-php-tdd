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

    public function testMustUnderstandSymbolII()
    {
        $roman = new RomanNumberConverter();
        $number = $roman->convert("II");

        $this->assertEquals(2, $number);
    }

    public function testMustUnderstandSymbolXXII()
    {
        $roman = new RomanNumberConverter();
        $number = $roman->convert("XXII");

        $this->assertEquals(22, $number);
    }

    public function testMustUnderstandSymbolIX()
    {
        $roman = new RomanNumberConverter();
        $number = $roman->convert("IX");

        $this->assertEquals(9, $number);
    }

    public function testMustUnderstandSymbolXXIV()
    {
        $roman = new RomanNumberConverter();
        $number = $roman->convert("XXIV");

        $this->assertEquals(24, $number);
    }
}
