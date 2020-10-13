<?php

namespace Console\App\Models;

class QA extends AbstractEmployee
{
    public function welcome(): string
    {
        return 'Hi! I am QA!';
    }

    public function testCode(): bool
    {
        return true;
    }

    public function communicateWithManager(): bool
    {
        return true;
    }

    public function setTasks(): bool
    {
        return true;
    }
}
