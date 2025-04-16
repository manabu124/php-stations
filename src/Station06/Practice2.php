<?php

namespace Src\Station06;

class Practice2
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $array = [1, 2, 3];

        array_push($array, 5, 6);
        print_r($array);
        array_unshift($array, -1, 0);
        print_r($array);
        array_splice($array, 5, 0, 4);
        // 第１引数が操作対象の配列
        // 第２引数が「対象配列のどの位置（インデックス）に挿入するか」の指定。
        // 第３引数は削除対象とする要素数ですが、挿入のみを行う場合は必ず 0 を指定します。
        // 第４引数が、実際にその位置に挿入する値です。
        print_r($array);
    }
}

(new Practice2())->main();
