<?php

namespace Console\App\Models;

interface EmployeeInterface
{
    function writeCode():bool ;

    function testCode(): bool ;

    function communicateWithManager(): bool ;

    function draw(): bool ;

    function setTasks(): bool ;
}
