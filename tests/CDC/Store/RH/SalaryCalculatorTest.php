<?php

namespace CDC\Store\RH;

use PHPUnit\Framework\TestCase as PHPUnit;
use CDC\Store\RH\SalaryCalculator,
    CDC\Store\RH\Employee,
    CDC\Store\RH\PositionsTable;

class SalaryCalculatorTest extends PHPUnit
{
    public function testDeveloperSalaryCalculationWithSalaryUnderLimit()
    {
        $calculator = new SalaryCalculator();
        $developer = new Employee('Andre', 1500.0, PositionsTable::DEVELOPER);

        $salary = $calculator->calculateSalary($developer);

        $this->assertEquals(1500.0 * 0.9, $salary, '', 0.00001);
    }

    public function testDeveloperSalaryCalculationWithSalaryAboveLimit()
    {
        $calculator = new SalaryCalculator();
        $developer = new Employee('Andre', 4000.0, PositionsTable::DEVELOPER);

        $salary = $calculator->calculateSalary($developer);

        $this->assertEquals(4000.0 * 0.8, $salary, '', 0.00001);
    }

    public function testDBAsSalaryCalculationWithSalaryUnderLimit()
    {
        $calculator = new SalaryCalculator();
        $dba = new Employee('Andre', 500.0, PositionsTable::DBA);

        $salary = $calculator->calculateSalary($dba);

        $this->assertEquals(500.0 * 0.85, $salary, '', 0.00001);
    }
}
