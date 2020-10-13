<?php

namespace Console\App\Commands\Employee\ListActions;

class QaDoList extends AbstractEmployeeDoList
{
    protected function getSpeciality(): string
    {
        return 'qa';
    }
}
