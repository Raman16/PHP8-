<?php

namespace App;

class InvoiceCollection implements \Iterator
{
    private int $key = 0;
    public function __construct(public array $invoices) {
    }
    public function current(): mixed
    {
        echo __METHOD__ . PHP_EOL;
        return $this->invoices[$this->key];

    }
    public function next(): void
    {
        echo  __METHOD__ . PHP_EOL;
        ++$this->key;
    }
    public function key(): mixed
    {
        echo  __METHOD__ . PHP_EOL;
        return $this->key;
    }
    public function valid(): bool
    {
        echo  __METHOD__ . PHP_EOL;
        return isset($this->invoices[$this->key]);
    }
    public function rewind(): void
    {
        echo  __METHOD__ . PHP_EOL;
        reset($this->invoices);
    }
}
