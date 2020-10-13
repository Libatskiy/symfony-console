<?php

namespace Console\App\Models;

class Manager extends AbstractEmployee
{
    public function welcome(): string
    {
        return "Hello! I am manager";
    }

    public function setTasks(): bool
    {
        return true;
    }
}
