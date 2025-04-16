<?php

namespace Src\Station16\Question;

class Car
{
    public string $name = '';
    public int $passenger = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function run(): void
    {
        echo '走行する';
    }

    public function pickup(int $addPassenger): int
    {
        $this->passenger = $this->passenger + $addPassenger;
        return $this->passenger;
    }

}
