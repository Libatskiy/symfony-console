<?php

namespace Console\App\Commands\Employee\ListActions;

use Console\App\Service\RepresentEmployeeService;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Console\App\Commands\Employee\AbstractEmployeeCommand;

abstract class AbstractEmployeeDoList extends AbstractEmployeeCommand
{
    protected function configure()
    {
        parent::configure();
        $this->setDescription('Prints list what employee can do!');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $representEmployeeService = new RepresentEmployeeService($this->getEmployee());
        $output->writeln($representEmployeeService->getPossibilityList());
    }

    protected function getPrefix(): string
    {
        return 'user';
    }

    abstract protected function getSpeciality(): string ;
}
