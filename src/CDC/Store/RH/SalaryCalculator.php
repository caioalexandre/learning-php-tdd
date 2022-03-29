<?php

namespace CDC\Store\RH;

use CDC\Store\RH\Employee;

class SalaryCalculator
{
    public function calculateSalary(Employee $employee)
    {
        if ($employee->getPosition() === PositionsTable::DEVELOPER) {
            if ($employee->getSalary() > 3000) {
                return 3200.0;
            }
    
            return 1350.0;
        }

        return 425.0;
    }
}
