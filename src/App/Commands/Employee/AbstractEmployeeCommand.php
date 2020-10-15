<?php

namespace Console\App\Commands\Employee;

use Console\App\Factory\EmployeeFactory;
use Console\App\Models\AbstractEmployee;
use Symfony\Component\Console\Command\Command;

abstract class AbstractEmployeeCommand extends Command
{
    protected $representService;

    abstract protected function getSpeciality(): string ;
    abstract protected function getPrefix(): string ;

    protected function configure()
    {
        $this->setName($this->getPrefix() . ':' . $this->getSpeciality());
    }

    protected function getEmployee(): AbstractEmployee
    {
        $speciality = explode(':', $this->getName())[1];
        return EmployeeFactory::getEmployee($speciality);
    }
}
