<?php

namespace Src\Station08;

class Question
{
    public function main(): array
    {
        $array = [
            ['アザラシ', 'アライグマ'],
            ['ウサギ', 'ウシ', 'ウマ'],
            ['オオカミ', 'オットセイ'],
        ];

        // $array2 = [
        //     ['イヌ', 'イルカ']
        // ];
        // array_splice($array, 1, 0, $array2);

        $array2 = ['イヌ', 'イルカ'];
        array_splice($array, 1, 0, [$array2]); // "[]"を用いて入れ子にすることで、配列のまま挿入できる

        array_splice($array, 3, 1);

        print_r($array);        
        return $array;

    }
}

(new Question())->main();
