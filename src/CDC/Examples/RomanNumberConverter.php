<?php

namespace CDC\Examples;

class RomanNumberConverter
{
    protected $table = [
        "I"	=>	1,
        "V"	=>	5,
        "X"	=>	10,
        "L"	=>	50,
        "C"	=>	100,
        "D"	=>	500,
        "M"	=>	1000
    ];

    public function convert($romanNumber)
    {
        $count = 0;
        $lastFromRight = 0;

        for ($i = strlen($romanNumber) - 1; $i >= 0; $i--) {

            $current = 0;
            $currentNumber = $romanNumber[$i];

            if (array_key_exists($currentNumber, $this->table)) {
                $current = $this->table[$currentNumber];
            }

            $multiplier = 1;
            
            if ($current < $lastFromRight) {
                $multiplier = -1;
            }

            $count += ($current * $multiplier);

            $lastFromRight = $current;
        }

        return $count;
    }
}
