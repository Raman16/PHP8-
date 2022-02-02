<?php

namespace App;

class ClassB extends ClassA
{
    protected static string $name = 'B';
    public function getName(): string
    {
        var_dump(self::class);
        return static::$name;
    }

}