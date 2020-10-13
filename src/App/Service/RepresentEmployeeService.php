<?php

namespace Console\APP\Service;

use Console\App\Models\AbstractEmployee;

class RepresentEmployeeService
{
    const NEXT_ROW = "\r\n";

    protected $employee;

    public function __construct(AbstractEmployee $employee)
    {
        $this->employee = $employee;
    }

    public function getPossibilityList(): string
    {
        $output = $this->employee->welcome() . " And I can do : ";

        $output .= $this->employee->writeCode() === true ?
            self::NEXT_ROW . '- code writing' : '';
        $output .= $this->employee->testCode() === true ?
            self::NEXT_ROW . '- code testing' : '';
        $output .= $this->employee->draw() === true ?
            self::NEXT_ROW . '- draw' : '';
        $output .= $this->employee->communicateWithManager() === true ?
            self::NEXT_ROW . '- communication with manager' : '';
        $output .= $this->employee->setTasks() === true ?
            self::NEXT_ROW . '- set tasks' : '';

        return $output;
    }

    public function canDo(string $action): string
    {
        if (method_exists($this->employee, $action)) {
            try {
                return $this->employee->$action() === true ? 'true' : 'false';

            } catch (\Exception $e) {
                throw new \Exception();
            }
        }

        return "I don't now {$action} method";
    }
}
