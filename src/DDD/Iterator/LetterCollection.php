<?php

declare(strict_types=1);

namespace OOP\DDD\Iterator;

use ArrayIterator;

class LetterCollection implements \IteratorAggregate
{
    private array $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->array);
    }
}