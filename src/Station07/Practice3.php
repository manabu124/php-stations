<?php

namespace Src\Station07;

class Practice3
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $array = ['apple' => 3, 'banana' => 6, 'rime' => 7];

        //第１引数は配列、第２引数が要素に対して行う特定処理を定義した関数
        array_walk($array, function (&$value) { //「&$value」と参照渡し
            $value = $value - 1;
        });
        // 「参照渡し」なので、元々の配列自体を変更しており、返り値は処理が成功したことを示す bool である

        print_r($array);
    }
}

(new Practice3())->main();
