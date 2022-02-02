<?php

namespace App;

class ClassA
{
    protected static string $name = 'A';
    public function getName(): string
    {
        return static::$name;
    }
}
