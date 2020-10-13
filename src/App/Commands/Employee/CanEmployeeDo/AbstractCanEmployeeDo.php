<?php

namespace Console\App\Commands\Employee\CanEmployeeDo;

use Console\App\Commands\Employee\AbstractEmployeeCommand;
use Console\App\Service\RepresentEmployeeService;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractCanEmployeeDo extends AbstractEmployeeCommand
{
    protected function configure()
    {
        parent::configure();
        $this->setDescription('can employee do or not!')
        ->addArgument('action');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $representEmployeeService = new RepresentEmployeeService($this->getEmployee());
        $output->writeln($representEmployeeService->canDo($input->getArgument('action')));
    }

    protected function getChecking(): string
    {
        return 'can';
    }

    abstract protected function getSpeciality(): string ;
}
