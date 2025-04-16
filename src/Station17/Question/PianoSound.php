<?php

namespace Src\Station17\Question;

class PianoSound implements SoundInterface
{
    const INSTRUMENT_NAME = 'ピアノ';

    public function isValidatedInput(string $scale): bool {
      // 「ドレミファソラシ」の音名であるかをチェック
      return in_array($scale, ['ド', 'レ', 'ミ', 'ファ', 'ソ', 'ラ', 'シ']);
    }

    public function sound(string $scale): string {
      // 楽器名と音名を結合して返す
      return self::INSTRUMENT_NAME . "の" . $scale;
    }

    // public function isValidatedInput(string $scale): void
    // {
    //   if ( strpos( 'ドレミファソラシド', $scale ) === TRUE ) {
    //     $this->sound($scale);
    //   }
    // }

    // public function sound(string $scale): string
    // {
    //   return INSTRUMENT_NAME . "の" . $scale;
    // }
}
