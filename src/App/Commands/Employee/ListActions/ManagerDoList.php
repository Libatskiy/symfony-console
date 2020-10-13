<?php

namespace Console\App\Commands\Employee\ListActions;

class ManagerDoList extends AbstractEmployeeDoList
{
    protected function getSpeciality(): string
    {
        return 'manager';
    }
}
