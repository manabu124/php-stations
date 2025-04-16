<?php

namespace Src\Station17\Question;

class GuitarSound implements SoundInterface
{
    private const INSTRUMENT_NAME = 'ギター';

    public function isValidatedInput(string $scale): bool 
    {
      // 「C D E F G A B」の音名であるかをチェック
      return in_array($scale, ['C', 'D', 'E', 'F', 'G', 'A', 'B']);
    }

    public function sound(string $scale): string 
    {
      // エフェクトメソッドの返り値を返す
      return $this->effect($scale);
    }

    // エフェクトをかけた音を返す
    private function effect(string $scale): string 
    {
        return "エフェクトをかけた" . self::INSTRUMENT_NAME . "の" . $scale;
    }

    // public function isValidatedInput(string $scale): void
    // {
    //   if ( strpos( 'CDEFGAB', $scale ) === TRUE ) {
    //     $this->sound($scale);
    //   }
    // }

    // public function sound(string $scale): string
    // {
    //   return $this->effect($scale);
    // }

    // public function effect(string $scale): string
    // {
    //   return "エフェクトをかけた" .INSTRUMENT_NAME ."の" . $scale;
    // }

}

