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
        if (array_key_exists($romanNumber, $this->table)) {
            return $this->table[$romanNumber];
        }

        return 0;
    }
}
