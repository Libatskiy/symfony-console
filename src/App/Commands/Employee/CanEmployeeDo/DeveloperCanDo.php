<?php

namespace Console\App\Commands\Employee\CanEmployeeDo;

class DeveloperCanDo extends AbstractCanEmployeeDo
{
    protected function getSpeciality(): string
    {
        return 'developer';
    }
}
