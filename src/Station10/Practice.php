<?php

namespace Src\Station10;

class Practice
{
    public function main(): void
    {
        $this->checkEvenOrOdd();
    }

    private function checkEvenOrOdd()
    {
        $number = 10;
        if ($number % 2 === 0) {
            echo $number.'は偶数です';
        } else {
            echo $number.'は奇数です';
        }
    }
}

(new Practice())->main();
