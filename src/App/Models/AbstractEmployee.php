<?php

namespace Console\App\Models;

abstract class AbstractEmployee implements EmployeeInterface
{
    abstract public function welcome(): string ;

    function writeCode(): bool
    {
        return false;
    }

    function testCode(): bool
    {
        return false;
    }

    function communicateWithManager(): bool
    {
        return false;
    }

    function draw(): bool
    {
        return false;
    }

    function setTasks(): bool
    {
        return false;
    }
}
