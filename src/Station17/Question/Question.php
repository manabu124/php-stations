<?php

namespace Src\Station17\Question;

class Question
{
    public function main(): void
    {
        $piano = new PianoSound();
        $guitar = new GuitarSound();
        $keyboard = new Keyboard();
            
        // ピアノの音を鳴らす
        $keyboard->play($piano, "ド"); // ピアノのドを鳴らします
            
        // ギターの音を鳴らす
        $keyboard->play($guitar, "C"); // エフェクトをかけたギターのCを鳴らします
        
    }
}
