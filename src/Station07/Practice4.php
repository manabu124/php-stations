<?php

namespace Src\Station07;

class Practice4
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $array = [
            ['id' => 1, 'name' => '太郎'],
            ['id' => 2, 'name' => '次郎'],
            ['id' => 3, 'name' => '花子']
        ];
                // $array[0] に ['id' => 1, 'name' => '太郎'] が格納されており、 $array[0]['id'] で 1 を取り出せる

        // $array2 = array_column($array, 'id');
        // $array2 = array_column($array, 'name');
        $array2 = array_column($array, 'name', 'id');   //第３引数が指定されている場合には、それをキーにして第２引数の要素を抽出する
        print_r($array2);        
    }
}

(new Practice4())->main();
