<?php

namespace Src\Station01;

class Question
{
    public function main(): array
    {
        $a = 123;
        $b = TRUE;

        // echo gettype($a) . PHP_EOL;
        // echo gettype($b) . PHP_EOL;

        return [$a, $b];
    }
}

// (new Question())->main();