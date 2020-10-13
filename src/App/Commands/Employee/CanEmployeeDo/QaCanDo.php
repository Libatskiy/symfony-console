<?php

namespace Console\App\Commands\Employee\CanEmployeeDo;

class QaCanDo extends AbstractCanEmployeeDo
{
    protected function getSpeciality(): string
    {
        return 'qa';
    }
}
