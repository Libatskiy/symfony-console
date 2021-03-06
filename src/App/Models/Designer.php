<?php

namespace Console\App\Models;

class Designer extends AbstractEmployee
{
    public function welcome(): string
    {
        return 'I am designer';
    }

    public function draw(): bool
    {
        return true;
    }

    public function communicateWithManager(): bool
    {
        return true;
    }
}
