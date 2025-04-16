<?php

namespace Src\Station15\Question;

class Calculator
{
    public array $multiplieds;
    public int $multiplier;

    public function multiply($multiplieds, $multiplier)
    {
      if (empty($multiplieds)) {
        return FALSE;
      } else {
        $result = array_map(function($element) use ($multiplier) {
          return $element * $multiplier;
        }, $multiplieds);
        return $result;
      }
    }

}


