<?php

namespace Src\Station02;

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $a = 1;
        $b = '1';

        if ($a > 1) {
            echo '$a は 1 より大きい';
        } else {
            echo '$a は 1 以下';
        }

        echo PHP_EOL;

        if ($a >= $b) {
            echo '$a は $b 以上';
        } else {
            echo '$a は $b 未満';
        }

        echo PHP_EOL;

        // if ($a === $b) {
        //     echo '$a は $b と等しい';
        // } else {
        //     echo '$a は $b と等しくない';
        // }

        if ($a == $b) { // 緩やかな比較にする
            echo '等しい';
        } else {
            echo '等しくない';
        }

        echo PHP_EOL;
            }
        }

(new Practice())->main();
