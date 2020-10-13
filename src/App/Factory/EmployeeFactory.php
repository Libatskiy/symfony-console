<?php

namespace Console\App\Factory;

use Console\App\Models\{Designer, Developer, Manager, QA};

class EmployeeFactory
{
    public static function getEmployee(string $speciality)
    {
        switch ($speciality) {
            case 'developer':
                return new Developer();
            case 'qa' :
                return new QA();
            case 'manager':
                return new Manager();
            case 'designer':
                return new Designer();
            default:
                throw new \Exception('Specification wrong for employee');
        }
    }
}
