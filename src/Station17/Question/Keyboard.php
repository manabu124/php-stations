<?php

namespace Src\Station17\Question;

class Keyboard 
{
  public function play(SoundInterface $instrument, string $scale) 
  {
    // 音が有効か確認
    if (!$instrument->isValidatedInput($scale)) {
      echo "この音を鳴らすことはできません";
      return;
    }

    // 音を鳴らす
    echo $instrument->sound($scale) . "を鳴らします";
  }
}
