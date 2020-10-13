<?php

namespace Console\App\Commands\Employee\ListActions;

class DesignerDoList extends AbstractEmployeeDoList
{
    protected function getSpeciality(): string
    {
        return 'designer';
    }
}
