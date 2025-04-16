<?php

namespace Src\Station06;

class Question
{
    public function main(): array
    {
        $array = ['red', 'blue', 'yellow'];
        print_r($array);

        array_splice($array, 0, 0, ['white', 'black']);
        print_r($array);

        array_splice($array, 4, 1);
        print_r($array);

        array_splice($array, 3, 0, 'green');
        print_r($array);

        return $array;
    }
}

(new Question())->main();