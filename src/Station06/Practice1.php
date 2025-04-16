<?php

namespace Src\Station06;

class Practice1
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        // $array = [1, 2, 3];
        // print_r($array);

        // $array = [1, 2, 3];
        // print_r($array[0]); // インデックスの追記

        $array = ['red' => 1, 'blue' => 2, 'yellow' => 3];
        print_r($array['red']); // キーの追記
    }
}

(new Practice1())->main();
