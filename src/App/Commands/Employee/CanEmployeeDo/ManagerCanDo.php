<?php

namespace Console\App\Commands\Employee\CanEmployeeDo;

class ManagerCanDo extends AbstractCanEmployeeDo
{
    protected function getSpeciality(): string
    {
        return 'manager';
    }
}
