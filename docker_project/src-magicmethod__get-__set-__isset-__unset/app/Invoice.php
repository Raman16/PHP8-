<?php

namespace App;

class Invoice
{

    protected array  $data = [];
    public function __get(string $name)
    {
        //checking property on current object
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        return null; //send null if no property
    }
    public function __set($name, $value): void
    {
        $this->data[$name] = $value;
    }

    public function __isset($name): bool
    {
        var_dump("isset called...");
        return array_key_exists($name, $this->data);//returns true/false
    }
    public function __unset($name): void
    {
        var_dump("unset called...");
        unset($this->data[$name]);
    }
}
