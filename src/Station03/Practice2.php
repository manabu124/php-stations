<?php

namespace Src\Station03;

class Practice2
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $a = 1;

        switch ($a) {
            // case '1':    // 緩やかな比較が行われている
            //     echo '$a は string の 1 です' . PHP_EOL;
            //     break;
            // case 1:
            //     echo '$a は int の 1 です' . PHP_EOL;
            //     break;
            // default:
            //     echo '$a は 1 ではありません' . PHP_EOL;
            
            case $a === '1':
                echo '$a は string の 1 です' . PHP_EOL;
                break;
            case $a === 1:
                echo '$a は int の 1 です' . PHP_EOL;
                break;
        }

        
    }
}

(new Practice2())->main();
