<?php

declare(strict_types=1);

namespace OOP\DDD\Iterator;

use Iterator;

class Days implements Iterator
{
    /**
     * @var array
     */
    private array $days;

    /**
     * @var int
     */
    private int $position;

    public function __construct(array $days)
    {
        $this->days = $days;
        $this->position = 0;
    }

    public function current()
    {
        return $this->days[$this->position];
    }

    public function next()
    {
        ++$this->position;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->days[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }
}