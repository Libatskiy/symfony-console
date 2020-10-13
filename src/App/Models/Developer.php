<?php

namespace Console\App\Models;

class Developer extends EmployeeAbstract
{
    public function welcome(): string
    {
        return "Hi! I'm developer!";
    }

    public function writeCode(): bool
    {
        return true;
    }

    public function testCode(): bool
    {
        return true;
    }

    public function communicateWithManager(): bool
    {
        return true;
    }
}
