<?php

namespace Src\Station15\Practice;

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $i = 100;

        for ($i=0; $i<=3; $i++) {
          echo $i;
        }
      
        echo $i;
      
        $dog = new Dog();
        echo $name; // 出力されない
        echo $age; // 出力されない
        echo $dog->name; // 出力される
    }

    echo $i;
    echo $name;

    main();
}

(new Practice)->main();
