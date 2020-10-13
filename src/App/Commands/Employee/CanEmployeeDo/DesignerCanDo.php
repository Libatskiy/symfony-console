<?php

namespace Console\App\Commands\Employee\CanEmployeeDo;

class DesignerCanDo extends AbstractCanEmployeeDo
{
    protected function getSpeciality(): string
    {
        return 'designer';
    }
}
