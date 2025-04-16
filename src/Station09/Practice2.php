<?php

namespace Src\Station09;

class Practice2
{
    public function main(): void
    {
        // ここにサンプルコードを記述

        $fruits = [
            'apple' => 'red',
            'banana' => 'yellow',
            'rime' => 'green',
            'strawberry' => 'red',
            'pineapple' => 'yellow',
        ];
        
        $result = [];
        
        foreach ($fruits as $key => $fruit) {   // foreach (${配列} as ${配列のキー} => ${配列の要素})
            if ($fruit === 'yellow') {  // ${配列の要素}が'yellowに一致するときcontinue;
                continue;
            }
        
            $result[$key] = $fruit;
        }
        
        print_r($result);
    }
}

(new Practice2())->main();
