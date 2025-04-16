<?php

namespace Src\Station07;

class Practice2
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $array = ['apple' => 1, 'banana' => 2, 'rime' => 5];

        $addedArray = array_map(function ($value) { // 第１引数は要素に対して行う特定処理を定義した関数
            return $value + 1;  // 特定処理を施した新たな配列を返す
        }, $array); // 第２引数以降が配列
        // array_map は複数個の配列の要素を同時に扱うことができる

        print_r($addedArray);
    }
}

(new Practice2())->main();
