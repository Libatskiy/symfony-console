<?php

namespace Console\App\Commands\Employee\ListActions;

class DeveloperDoList extends AbstractEmployeeDoList
{
    protected function getSpeciality(): string
    {
        return 'developer';
    }
}
